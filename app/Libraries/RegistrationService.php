<?php

namespace App\Libraries;

use App\Models\Registration;
use App\Models\Invoices;
use Illuminate\Support\Facades\Mail;

/**
 * Description of RegistrationService
 *
 * @author tohir
 */
class RegistrationService {
    public function __construct() {
        
    }
    
    /**
     * 
     * @param type $param
     * @return bool
     */
    public function registerParticipant($param) : String {
        $ref_id = strtoupper(str_random(25));
        
        $regModel = new Registration();
        $regModel->ref_id = $ref_id;
        $regModel->institution_name = $param->institution_name;
        $regModel->email_address = $param->email_address;
        $regModel->program_offered = json_encode($param->program_offered);
        $regModel->address = $param->address;
        $regModel->organisation_name = $param->organisation_name;
        $regModel->org_email_address = $param->org_email_address;
        $regModel->service_type = $param->service_type;
        $regModel->participant_name = $param->participant_name;
        $regModel->participant_designation = $param->participant_designation;
        $regModel->participant_email_address = $param->participant_email_address;
        
        $regModel->save();
        
        $this->sendSignupEmail($param->email_address, $regModel->id);
        
        
        return $ref_id;
    }
    
    /**
     * 
     * @param type $email
     */
    private function sendSignupEmail($email, $id) {
        // send email
        return Mail::to($email)
                ->send(new \App\Mail\Signup(Registration::find($id)));
    }
    
    /**
     * Get participant Info
     * @param string $ref_id
     * @return Registration
     */
    public function getParticipantInfo($ref_id) : Registration {
        return Registration::where('ref_id', $ref_id)->first();
    }
    
    /**
     * Check if $ref_id is valid
     * @param type $ref_id
     * @return bool
     */
    public function isValidRefId($ref_id) : bool {
        $isValid = false;
        if (count(Registration::where('ref_id', $ref_id)->first()) > 0) {
            $isValid = true;
        }
        
        return $isValid;
    }
    
    /**
     * Save invoice details into database
     * @param type $param
     * @return bool
     */
    public function saveInvoice($param) : bool {
        try {
            $invoice = new Invoices();

            $invoice->participant_id = $param->participant_id;
            $invoice->ref_id = strtoupper(str_random(25));
            $invoice->amount = floatval($param->price);
            $invoice->access_lvel = $param->access_level;

            $invoice->save();
            
            return TRUE;
        } catch (Exception $ex) {
            Log::debug("unable to save invoice data "  . $ex->getMessage());
            return FALSE;
        }
    }
    
    /**
     * Get invoice details
     * @param type $participantId
     * @return Invoices
     */
    public function getInvoiceData($participantId) : Invoices {
        try {
            return Invoices::where('participant_id', $participantId)->first();
        } catch (Exception $ex) {
            Log::debug("trying to get invoice that does not exist " . $ex->getMessage());
        }
    }
    
    /**
     * Return various participation access levels with their codes
     * @param type $key
     * @return array
     */
    public function getAccessLevels() : array {
        return [
            'B-SP' => "Bronze - Service Provider",
            'B-EP' => "Bronze - Education Provider",
            'S-SP' => "Silver - Service Provider",
            'S-EP' => "Silver - Education Provider",
            'S-SP-EB' => "Silver - Service Provider Early Bird",
            'S-EP-EB' => "Silver - Education Provider Early Bird",
            'G-SP-EB' => "Gold - Service Provider Early Bird",
            'G-EP-EB' => "Gold - Education Provider Early Bird",
            'G-SP' => "Gold - Service Provider",
            'G-EP' => "Gold - Education Provider",
        ];
    }
}
