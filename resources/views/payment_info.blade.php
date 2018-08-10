@extends('layout.content_layout')
@section('title', 'Register for Event')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Invoice
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Participation Access Level</a></li>
            <li><a href="#">{{ $access_levels[$payment_info->access_lvel] }} </a></li>
        </ol>

        <?= show_notification(); ?>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Payment Confirmation</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Access level</td>
                                    <td>{{ $access_levels[$payment_info->access_lvel] }}</td>
                                </tr>
                                <tr>
                                    <td>Amount</td>
                                    <td>USD {{ number_format($payment_info->amount, 2) }}</td>
                                </tr>
                                <tr>
                                    <td>Telegraphic Details</td>
                                    <td>{{ get_local_account() }}</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <a class="btn btn-primary btn-lg"  href="{{\Config::get('constants.pay_pal_address')}}">Pay now via Paypal</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            <div class="col-md-5">
                    <div class="box box-info">
                        <div class="box-body">
                            <div class="alert alert-success">
                                Thanks for coming thus far. A copy of the invoice has been sent to {{ $participant_details->email_address }}. 

                            </div>

                            <a class="btn btn-primary pull-right" style="margin-right: 5px;" href="/invoice/{{$participant_details->ref_id}}" target="_blank"><i class="fa fa-download"></i> Generate PDF</a>
                            
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
    </section>

</div>


@stop