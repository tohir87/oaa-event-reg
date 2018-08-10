<?php

if (!function_exists('get_local_account')) {

    function get_local_account($country_id = 3857) {
        if ($country_id == 79) {
             $accountDetails = "<b>Chase Bank </b><br>
                                            Account No: 0302330821001 <br>
                                            Account Name:International Opportunities Australia Limited <br>
                                            Branch No: 030 <br>
                                            Bank Code: 30 <br>
                                            <hr>
                                            <b>MPESA Bill No: 552800 </b><br>";
        }else if ($country_id == 115) {
            $accountDetails = "<b>United Bank of Africa (UBA) </b><br>
                                            
                                            Account No: 1018936787 <br>
                                            Account Name:Applied Preneur Technology Ltd <br>";
        }else{
            $accountDetails = "<b>Commonwealth Bank of Australia </b><br>
                                            Bank Address:Cnr Main Street and Campbell Street, Blacktown NSW 2148 Australia <br>
                                            BSB:062121 <br>
                                            Account No: 11117652 <br>
                                            Account Name:Buy OSHC <br>
                                            SWIFT code: CTBAAU2S <br>";
        }
        return $accountDetails;
    }

}

if (!function_exists('show_notification')) {
    function show_notification(){
        $msg = '';
        if (session('error')){
            $msg = '<div class="alert alert-close alert-danger">
                    <a href="#" title="Close" class="fa alert-close-btn icon-remove"></a>
                        <p><i class="fa fa-bug"></i> '.session('error') .'</p>
                    </div>';
        }
        elseif (session('success')){
            $msg = '<div class="alert alert-close alert-success">
                    <a href="#" title="Close" class="fa alert-close-btn icon-remove"></a>
                        <p><i class="fa fa-check-circle-o"></i> '.session('success') .'</p>
                    </div>';
        }
        
        return $msg;
    }
}