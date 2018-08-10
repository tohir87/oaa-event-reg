<!DOCTYPE html>
<html lang ="en">
    <head>  

        <style>
            .mrg10T {
                margin-top: 10px
            }
            .divider {
                overflow: hidden;
                height: 1px;
                margin: 10px 0;
                padding: 0;
                ityity: .70;
                -moz-opacity: .70;
                filter: alpha(opacity: 70);
            }
            .label-warning {
                background-color: #cbb956;
            }
            .bs-label {
                /*font-size: 80%;*/
                line-height: 1;
                display: inline;
                padding: .4em .6em .3em;
                text-align: center;
                text-transform: uppercase;
                vertical-align: baseline;
                white-space: nowrap;
                color: #fff;
                border-radius: .25em;
            }
            .col-sm-6 {
                width: 500px;
            }
            .col-sm-4 {
                width: 400px;
            }

            .invoice-title {
                font-size: 32px;
                text-transform: uppercase;
            }
            .invoice-title + b {
                font-size: 18px;
                opacity: 0.7;
            }
            .invoice-address {
                /*line-height: 2em;*/
                font-size: 14px;
                margin: 0 0 10px;
            }
            .invoice-date {
                font-size: 18px;
                opacity: 0.5;
            }
            .invoice-client {
                font-size: 13px;
                text-transform: uppercase;
                /*margin: 10px 0 15px;*/
                font-weight: bold;
            }
            .invoice-client + .reset-ul li {
                padding: 0 0 15px;
            }
            .invoice-client + .reset-ul li b {
                width: 80px;
                display: inline-block;
                opacity: 0.6;
            }
            .invoice-client + h5 {
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .invoice-client + h5 + address {
                opacity: 0.5;
                line-height: 1.6em;
            }

            /* Default */

            .table {
                font-size: 14px;
                width: 100%;
                border-spacing: 0;
                border-collapse: separate;
            }
            .table > caption + thead > tr:first-child > th,
            .table > colgroup + thead > tr:first-child > th,
            .table > thead:first-child > tr:first-child > th,
            .table > caption + thead > tr:first-child > td,
            .table > colgroup + thead > tr:first-child > td,
            .table > thead:first-child > tr:first-child > td {
                border-top: 0;
            }
            .table > thead > tr > th,
            .table > tbody > tr > th,
            .table > tfoot > tr > th,
            .table > thead > tr > td,
            .table > tbody > tr > td,
            .table > tfoot > tr > td {
                padding: 10px;
                border-top-width: 1px;
                border-top-style: solid;
                text-align: left;
            }
            .table th,
            .table td {
                font-weight: normal;
                vertical-align: middle;
            }
            .table > thead > tr > th {
                font-weight: bold;
                vertical-align: bottom;
                border-bottom-width: 2px;
                border-bottom-style: solid;
            }
            /* Condensed */

            .table-condensed > thead > tr > th,
            .table-condensed > tbody > tr > th,
            .table-condensed > tfoot > tr > th,
            .table-condensed > thead > tr > td,
            .table-condensed > tbody > tr > td,
            .table-condensed > tfoot > tr > td {
                padding: 5px;
            }
            /* Striped */

            .table-striped tr:nth-child(even) > td {
                background: #fefeff;
            }
            /* Hover */

            .table-hover tr:hover td {
                color: #000;
                background: #fffdf4;
            }
            /* Bordered */

            .table-bordered {
                border-width: 1px;
                border-style: solid;
                border-width: 1px 0 1px 1px;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > tbody > tr > th,
            .table-bordered > tfoot > tr > th,
            .table-bordered > thead > tr > td,
            .table-bordered > tbody > tr > td,
            .table-bordered > tfoot > tr > td {
                border-width: 1px;
                border-style: solid;
                border-width: 1px 1px 0 0;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > thead > tr > td {
                border-bottom-width: 1px;
            }
            /* Responsive Tables */

            @media (max-width: 767px) {
                .table-responsive {
                    overflow-x: scroll;
                    overflow-y: hidden;
                    width: 100%;
                    -ms-overflow-style: -ms-autohiding-scrollbar;
                    -webkit-overflow-scrolling: touch;
                }
                .table-responsive > .table {
                    margin-bottom: 0;
                }
                .table-responsive > .table > thead > tr > th,
                .table-responsive > .table > tbody > tr > th,
                .table-responsive > .table > tfoot > tr > th,
                .table-responsive > .table > thead > tr > td,
                .table-responsive > .table > tbody > tr > td,
                .table-responsive > .table > tfoot > tr > td {
                    white-space: nowrap;
                }
                .table-responsive > .table-bordered {
                    border: 0;
                }
                .table-responsive > .table-bordered > thead > tr > th:first-child,
                .table-responsive > .table-bordered > tbody > tr > th:first-child,
                .table-responsive > .table-bordered > tfoot > tr > th:first-child,
                .table-responsive > .table-bordered > thead > tr > td:first-child,
                .table-responsive > .table-bordered > tbody > tr > td:first-child,
                .table-responsive > .table-bordered > tfoot > tr > td:first-child {
                    border-left: 0;
                }
                .table-responsive > .table-bordered > thead > tr > th:last-child,
                .table-responsive > .table-bordered > tbody > tr > th:last-child,
                .table-responsive > .table-bordered > tfoot > tr > th:last-child,
                .table-responsive > .table-bordered > thead > tr > td:last-child,
                .table-responsive > .table-bordered > tbody > tr > td:last-child,
                .table-responsive > .table-bordered > tfoot > tr > td:last-child {
                    border-right: 0;
                }
                .table-responsive > .table-bordered > tbody > tr:last-child > th,
                .table-responsive > .table-bordered > tfoot > tr:last-child > th,
                .table-responsive > .table-bordered > tbody > tr:last-child > td,
                .table-responsive > .table-bordered > tfoot > tr:last-child > td {
                    border-bottom: 0;
                }
            }

            /* Font Colors */

            .font-black {
                color: #464646 !important;
            }
            .font-blue {
                color: #1f6dca !important;
            }
            .font-blue-alt {
                color: #65a6ff !important;
            }
            .font-azure {
                color: #41e5c0 !important;
            }
            .text-muted,
            .font-gray {
                color: #c2c2c2 !important;
            }
            .text-info,
            .font-gray-dark {
                color: #828282 !important;
            }
            .text-success,
            .font-green {
                color: #2ecc71 !important;
            }
            .text-warning,
            .font-orange {
                color: #fa7753 !important;
            }
            .font-yellow {
                color: #fc0 !important;
            }
            .font-purple {
                color: #984dff !important;
            }
            .has-error .help-block,
            .text-danger,
            .font-red,
            .parsley-required {
                color: #ff5757 !important;
            }
            .font-white {
                color: #fff !important;
            }
            /* Other Background Colors */

            .alert-info a,
            .alert-info {
                color: #6c6c6c;
                border-color: #c9c9c9;
                background: #dfe8f1;
            }
            .alert-notice a,
            .alert-notice {
                color: #0f2c62;
                border-color: #62baf6;
                background: #c6e8ff;
            }
            .alert-success a,
            .alert-success,
            .parsley-success {
                color: #1e620f;
                border-color: #7cd362;
                background: #d3ffc6;
            }
            .parsley-success {
                background: #fff;
            }
            .alert-warning a,
            .alert-warning,
            .warning {
                color: #624b0f;
                border-color: #ebc875;
                background: #ffeec6;
            }
            .alert-danger a,
            .alert-danger,
            .danger,
            .parsley-error {
                color: #620f0f;
                border-color: #db6a6a;
                background: #ffc6c6;
            }
            .parsley-error {
                background: #fff;
            }


            /* White */

            .table,
            .label-white,
            .bg-white {
                background: #fff;
            }
            /* White Transparent */

            .bg-white-opacity {
                background: rgba(255, 255, 255, .85);
            }
            .hover-white:hover {
                background: #fafafa;
            }
            /* Yellow */

            .badge-yellow,
            .label-yellow,
            .btn-yellow,
            .hover-yellow:hover,
            .bg-yellow {
                color: #fff;
                background: #fc0;
                border-color: #deb200;
            }
            .label-yellow[href]:hover,
            .label-yellow[href]:focus,
            .btn-yellow:hover,
            .btn-yellow:focus,
            .btn-yellow:active,
            .btn-yellow.active,
            .open .dropdown-toggle.btn-yellow,
            .btn-yellow.disabled,
            .btn-yellow[disabled],
            .btn-yellow.disabled:hover,
            .btn-yellow[disabled]:hover,
            .btn-yellow.disabled:focus,
            .btn-yellow[disabled]:focus,
            .btn-yellow.disabled:active,
            .btn-yellow[disabled]:active,
            .btn-yellow.disabled.active,
            .btn-yellow[disabled].active {
                color: #fff;
                background: #e1b400;
                border-color: #c59e00;
            }
            /* Purple */

            .badge-purple,
            .label-purple,
            .btn-purple,
            .hover-purple:hover,
            .bg-purple {
                color: #fff;
                background: #984dff;
                border-color: #7a3ecc;
            }
            .label-purple[href]:hover,
            .label-purple[href]:focus,
            .btn-purple:hover,
            .btn-purple:focus,
            .btn-purple:active,
            .btn-purple.active,
            .open .dropdown-toggle.btn-purple,
            .btn-purple.disabled,
            .btn-purple[disabled],
            .btn-purple.disabled:hover,
            .btn-purple[disabled]:hover,
            .btn-purple.disabled:focus,
            .btn-purple[disabled]:focus,
            .btn-purple.disabled:active,
            .btn-purple[disabled]:active,
            .btn-purple.disabled.active,
            .btn-purple[disabled].active {
                color: #fff;
                background: #8134eb;
                border-color: #752fd6;
            }
            /* Blue Alt */

            .badge-blue-alt,
            .label-blue-alt,
            .btn-blue-alt,
            .hover-blue-alt:hover,
            .bg-blue-alt {
                color: #fff;
                background: #65a6ff;
                border-color: #5388d1;
            }
            .label-blue-alt[href]:hover,
            .label-blue-alt[href]:focus,
            .btn-blue-alt:hover,
            .btn-blue-alt:focus,
            .btn-blue-alt:active,
            .btn-blue-alt.active,
            .open .dropdown-toggle.btn-blue-alt,
            .btn-blue-alt.disabled,
            .btn-blue-alt[disabled],
            .btn-blue-alt.disabled:hover,
            .btn-blue-alt[disabled]:hover,
            .btn-blue-alt.disabled:focus,
            .btn-blue-alt[disabled]:focus,
            .btn-blue-alt.disabled:active,
            .btn-blue-alt[disabled]:active,
            .btn-blue-alt.disabled.active,
            .btn-blue-alt[disabled].active {
                color: #fff;
                background: #478ded;
                border-color: #4c7ec1;
            }
            /* Azure */

            .badge-azure,
            .label-azure,
            .btn-azure,
            .hover-azure:hover,
            .bg-azure {
                color: #fff;
                background: #41e5c0;
                border-color: #3acead;
            }
            .label-azure[href]:hover,
            .label-azure[href]:focus,
            .btn-azure:hover,
            .btn-azure:focus,
            .btn-azure:active,
            .btn-azure.active,
            .open .dropdown-toggle.btn-azure,
            .btn-azure.disabled,
            .btn-azure[disabled],
            .btn-azure.disabled:hover,
            .btn-azure[disabled]:hover,
            .btn-azure.disabled:focus,
            .btn-azure[disabled]:focus,
            .btn-azure.disabled:active,
            .btn-azure[disabled]:active,
            .btn-azure.disabled.active,
            .btn-azure[disabled].active {
                color: #fff;
                background: #27d1ab;
                border-color: #24c19e;
            }
            /* Border Colors */

            .border-black {
                border-color: #212121 !important;
            }
            .border-blue {
                border-color: #5bccf6 !important;
            }
            .border-blue-alt {
                border-color: #65a6ff !important;
            }
            .border-azure {
                border-color: #41e5c0 !important;
            }
            .border-gray {
                border-color: #c2c2c2 !important;
            }
            .border-gray-dark {
                border-color: #828282 !important;
            }
            .border-green {
                border-color: #2ecc71 !important;
            }
            .border-orange {
                border-color: #fa7753 !important;
            }
            .border-yellow {
                border-color: #fc0 !important;
            }
            .border-purple {
                border-color: #984dff !important;
            }
            .border-red {
                border-color: #ff5757 !important;
            }
            /* Box Shadow Colors */

            .parsley-success {
                border-color: #77e038 !important;
            }
            .parsley-error {
                border-color: #e03838 !important;
            }

        </style>
    </head>

    <body>
        <div style="padding: 25px; margin-bottom: 0; width: 500px">
            <div style=" margin-left: 0; margin-right: 0;">
                <div style="float: right; width: inherit">
                    <div>
                        <img src="{{public_path('/images/oaastudy-small-logo.png')}}" width="150px" style="margin-left: -0px; float: left" />
                    </div>
                </div>

                <div>
                    <h4 class="invoice-title">Invoice</h4>
                    Invoice Number: <b>{{str_pad($details->id, 7, '0', STR_PAD_LEFT)}}</b>
                    <div class="divider"></div>
                    <div class="invoice-date">{{date('d F Y', strtotime($details->created_at))}}</div>
                </div>
                
                <table style="width: 130%">
                    <tr>
                        <td style="width: 50%">
                            <b>Participant information</b>
                            
                             <address class="invoice-address">
                                 {{ucfirst($details->institution_name)}} <br>
                                {{$details->address}}
                                <br>
                                {{$details->email_address}}
                            </address>
                        </td>
                        <td style="width: 50%">
                            <address class="invoice-address" style="text-align: right">
                            ABN {{\Config::get('constants.abn')}}<br>
                            {{\Config::get('constants.biz_address')}}
                            <br>
                            {{\Config::get('constants.biz_country')}}
                            <br>
                            <i class="glyph-icon icon-phone"></i> {{\Config::get('constants.biz_phone')}}
                        </address>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="divider"></div>

            

            <hr style="height: 4px; background-color: #620f0f">
            

            <table class="table mrg20T table-hover">
                <thead>
                    <tr>
                        <th>&nbsp; #</th>
                        <th>Product Name</th>
                        <th>Price({{$currency}})</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $access_level[$payment_info->access_lvel]}}</td>
                        <td>{{ $payment_info->amount }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>VAT {{100 * \Config::get('constants.vat_percent')}} % </td>  
                        <td>{{ number_format($payment_info->amount * \Config::get('constants.vat_percent') , 2)}}</td>
                    </tr>
                    <tr class="font-bold font-black">
                        <td colspan="" class="text-right">TOTAL <span>Inclusive of VAT</span>:</td>
                        <td class="font-blue font-size-23"><td>{{ number_format($payment_info->amount + $payment_info->amount * \Config::get('constants.vat_percent') ,2) }}</td></td>
                    </tr>
                </tbody>
            </table>

            <hr style="height: 3px; background-color: #620f0f">
            <div class="divider"></div>
            <h4>Bank Details</h4>
            <div class="table">
                {{get_local_account()}}

                Reference : <b> {{ucfirst($details->institution)}} {{ucfirst($details->last_name)}} {{str_pad($details->id, 7, '0', STR_PAD_LEFT)}}</b>
            </div>
        </div>
    </body>
</html>