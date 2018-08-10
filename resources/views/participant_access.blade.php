@extends('layout.content_layout')
@section('title', 'Participant Access')
@section('content')

<div class="content-wrapper" ng-app="invoice" ng-controller="invoiceCtrl" ng-cloak>
    <section class="content-header">
        <h1>
            Participation Access Level
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Participation Access Level</a></li>
        </ol>
        
        <?= show_notification(); ?>
    </section>

    <div class="pad margin no-print">
        <div class="callout callout-info" style="margin-bottom: 0!important;">		
            <h4><i class="fa fa-info"></i> Note:</h4>
            Please refer to the participation guide for more details.
        </div>
    </div>
    
    
    
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> {{ $participant_details->institution_name}}.
                    <small class="pull-right">Date: {{ date('d/M/Y')}}</small>
                </h2>
            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>{{ $participant_details->institution_name}}</strong><br>
                    {{ $participant_details->address}}<br>
                    <!--                    San Francisco, CA 94107<br>-->
                    Email: {{$participant_details->email_address}}
                </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong>{{\Config::get('constants.biz_name')}}</strong><br>
                    {{\Config::get('constants.biz_address')}}<br>
                    {{\Config::get('constants.biz_country')}}<br>
                    Phone: {{\Config::get('constants.biz_phone')}}<br/>
                    Email: {{\Config::get('constants.info_email')}}
                </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Invoice #{{ str_pad($participant_details->id, 7, "0", STR_PAD_LEFT)}}</b><br/>
                <br/>
                <b>Order ID:</b> {{$participant_details->ref_id}}<br/>
                <b>Payment Due:</b> {{ date('d/M/Y', strtotime($participant_details-> created_at.' + 10days'))}}<br/>
                <b>Account:</b> 968-34567
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Participation Access Pass</th>
                            <th>Education Providers (USD)</th>
                            <th>Early Bird Prices (Closes 30 July 2018) Education Providers</th>
                            <th>Service Providers(USD)</th>
                            <th>Early Bird Prices(Closes 30 July 2018) Service Providers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gold – All Access Pass</td>
                            <td>
                                <label> <input type="radio" name="gold_access" ng-click="setGoldPrice('4500', 'G-EP')" value="4500" /> $4,500 </label>
                            </td>
                            <td>
                                <label> <input type="radio" name="gold_access" ng-che ng-click="setGoldPrice('4000', 'G-EP-EB')" value="4000" /> $4,000 save $500 </label>

                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="gold_access" ng-click="setGoldPrice('2000', 'G-SP')" value="2000" /> $2,000
                                </label> 
                            </td>
                            <td>
                                <label> <input type="radio" name="gold_access" ng-click="setGoldPrice('1700', 'G-SP-EB')" value="1700" />

                                    $1,700 save $300
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Silver – Botswana or Johannesburg Access Pass</td>
                            <td><label> <input type="radio" name="gold_access" ng-click="setGoldPrice('2500', 'S-EP')" value="2500" /> $2,500 </label></td>
                            <td>
                                <label> <input type="radio" name="gold_access" ng-click="setGoldPrice('2300', 'S-EP-EB')" value="2300" /> $2,300 save $200 </label>
                            </td>
                            <td><label> <input type="radio" name="gold_access" ng-click="setGoldPrice('1500', 'S-SP')" value="1500" /> $1,500 </label></td>
                            <td>
                                <label> <input type="radio" name="gold_access" ng-click="setGoldPrice('1300', 'S-SP-EB')" value="1300" /> $1,300 save $200 </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Bronze – Botswana or Johannesburg Access Pass</td>
                            <td>
                                <label> <input type="radio" name="gold_access" ng-click="setGoldPrice('1850', 'B-EP')" value="1850" /> $1,850 </label>
                            </td>
                            <td>N/A</td>
                            <td>
                                <label> <input type="radio" name="gold_access" ng-click="setGoldPrice('1000', 'B-SP')" value="1000" /> $1,000 </label>
                            </td>
                            <td>N/A</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Payment Methods:</p>
                <img src="../../dist/img/credit/visa.png" alt="Visa"/>
                <img src="../../dist/img/credit/mastercard.png" alt="Mastercard"/>
                <img src="../../dist/img/credit/american-express.png" alt="American Express"/>
                <img src="../../dist/img/credit/paypal2.png" alt="Paypal"/>
                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    We currently accept Paypal and Telegraphic Payment.
                </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Amount Due {{date('d/m/Y')}}</p>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td><% data.gold_access_price | currency  %></td>
                        </tr>
                        <tr>
                            <th>VAT (<% data.vat_percent * 100 %>%)</th>
                            <td><% data.vat_percent * data.gold_access_price | currency %></td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td><% data.gold_access_price + (data.vat_percent * data.gold_access_price) | currency  %></td>
                        </tr>
                    </table>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <form method="post" action="/save_invoice">
                    <button ng-disabled="data.gold_access_price == 0" class="btn btn-success pull-right" type="submit">
                        <i class="fa fa-credit-card"></i> Next <i class="fa fa-chevron-right"></i> Make Payment (<% data.gold_access_price + (data.vat_percent * data.gold_access_price) | currency  %>)</button>
<!--                    <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>-->
                    <input type="hidden" name="price" value="<% data.gold_access_price %>" />
                    <input type="hidden" name="access_level" value="<% data.access_level %>" />
                    <input type="hidden" name="ref_id" value="{{ $ref_id}}" />
                    <input type="hidden" name="participant_id" value="{{ $participant_details->id }}" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
    </section><!-- /.content -->
</div>

@stop