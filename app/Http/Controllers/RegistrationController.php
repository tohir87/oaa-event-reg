<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\RegistrationService;
use PDF;

class RegistrationController extends Controller {

    private $regService;

    public function __construct() {
        $this->regService = new RegistrationService();
    }

    public function index() {
        return view("register", [
            'title' => "Registration"
        ]);
    }

    public function save_participant_details(Request $request) {

        // perform input validation
        $validatedData = $request->validate([
            'institution_name' => 'required|max:255',
            'email_address' => 'required|unique:registrations|max:50',
            'program_offered' => 'required',
            'address' => 'required|max:150',
            'participant_name' => 'required|max:150',
            'participant_name' => 'required|max:255',
            'participant_designation' => 'required|max:50',
            'participant_email_address' => 'required|max:50',
        ]);

        $ref_id = $this->regService->registerParticipant(request());

        return redirect("/access_level/{$ref_id}");
    }

    public function access_level($ref_id) {

        if (!$this->regService->isValidRefId($ref_id)) {
            die("Sorry, the ref id seems not to be valid.");
        }

        return view('participant_access', [
            'participant_details' => $this->regService->getParticipantInfo($ref_id),
            'ref_id' => $ref_id
        ]);
    }

    public function generate_invoice_pdf($ref_id) {
        $participant_info = $this->regService->getParticipantInfo($ref_id);
        $pdf = PDF::loadView('pdf.invoice', [
                    'details' => $this->regService->getParticipantInfo($ref_id),
                    'currency' => "USD",
                    'payment_info' => $this->regService->getInvoiceData($participant_info->id),
                    'access_level' => $this->regService->getAccessLevels()
        ]);

        $pdf_file_name = time() . '_' . $ref_id . '.pdf';
        return $pdf->save(\Config::get('constants.filepath') . $pdf_file_name)->stream('download.pdf');
    }

    /**
     * 
     * @param Request $request
     * @return type
     */
    public function saveInvoice(Request $request) {
        // input validation
        if ($request->price == 0) {
            return back()->with('error', "Please select participation access type");
        }

        // validate ref_id
        if (empty($request->ref_id) || !$this->regService->isValidRefId($request->ref_id)) {
            return back()->with('error', "Invalid reference code detected. ");
        }

        // save invoice
        if ($this->regService->saveInvoice($request)) {
            return redirect("/payment/{$request->ref_id}")->with('success', "You invoice has been created. Here are the details of your order below");
        } else {
            return back()->with('error', "Invlaid reference code detected. ");
        }
    }

    /**
     * Show paymemnt page
     * @param type $ref_id
     */
    public function payment($ref_id) {

        if (!$this->regService->isValidRefId($ref_id)) {
            die("Sorry, the ref id seems not to be valid.");
        }

        $participant_info = $this->regService->getParticipantInfo($ref_id);

        return view('payment_info', [
            'participant_details' => $participant_info,
            'payment_info' => $this->regService->getInvoiceData($participant_info->id),
            'access_levels' => $this->regService->getAccessLevels()
        ]);
    }

}
