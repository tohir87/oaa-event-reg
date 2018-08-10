<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     @include('emails_template.head')
    
                <body bgcolor="#E1E1E1" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

                    <!-- CENTER THE EMAIL // -->
                   
                    <center style="background-color:#E1E1E1;">
                        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;">
                            <tr>
                                <td align="center" valign="top" id="bodyCell">

                                    <!-- EMAIL HEADER // -->
                                    <!--
                                            The table "emailBody" is the email's container.
                                            Its width can be set to 100% for a color band
                                            that spans the width of the page.
                                    -->
                                    <table bgcolor="#E1E1E1" border="0" cellpadding="0" cellspacing="0" width="500" id="emailHeader">

                                        <!-- HEADER ROW // -->
                                        <tr>
                                            <td align="center" valign="top">
                                                <!-- CENTERING TABLE // -->
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <!-- FLEXIBLE CONTAINER // -->
                                                            <table border="0" cellpadding="10" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td valign="top" width="500" class="flexibleContainerCell">

                                                                        <!-- CONTENT TABLE // -->
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                                                                           <td align="left" valign="middle" id="invisibleIntroduction" class="flexibleContainerBox" style="display:none !important; mso-hide:all;">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
                                                                                        <tr>
                                                                                            <td align="left" class="textContent">
                                                                                                <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
                                                                                                    The introduction of your message preview goes here. Try to make it short.
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                                <td align="right" valign="middle" class="flexibleContainerBox">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
                                                                                        <tr>
                                                                                            <td align="left" class="textContent">
                                                                                                <!-- CONTENT // -->
                                                                                                <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
                                                                                                    If you can't see this message, <a href="#" target="_blank" style="text-decoration:none;border-bottom:1px solid #828282;color:#828282;"><span style="color:#828282;">view&nbsp;it&nbsp;in&nbsp;your&nbsp;browser</span></a>.
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- // FLEXIBLE CONTAINER -->
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // CENTERING TABLE -->
                                            </td>
                                        </tr>
                                        <!-- // END -->

                                    </table>
                                    <!-- // END -->

                                    <!-- EMAIL BODY // -->
                                    <!--
                                            The table "emailBody" is the email's container.
                                            Its width can be set to 100% for a color band
                                            that spans the width of the page.
                                    -->
                                    <table bgcolor="#FFFFFF"  border="0" cellpadding="0" cellspacing="0" width="500" id="emailBody">

                                        @include('emails_template.top')
                                        <!-- // MODULE ROW -->


                                        <!-- MODULE ROW // -->
                                        <!--  The "mc:hideable" is a feature for MailChimp which allows
                                                you to disable certain row. It works perfectly for our row structure.
                                                http://kb.mailchimp.com/article/template-language-creating-editable-content-areas/
                                        -->
                                        <tr mc:hideable>
                                            <td align="center" valign="top">
                                                <!-- CENTERING TABLE // -->
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <!-- FLEXIBLE CONTAINER // -->
                                                            <table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td valign="top" width="500" class="flexibleContainerCell">

                                                                        <!-- CONTENT TABLE // -->
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="" valign="top" class="flexibleContainerBox">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="420" style="max-width: 100%;">
                                                                                        <tr>
                                                                                            <td align="left" class="textContent">
                                                                                                <h3 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">Hi {{ $user->institution_name }}</h3>
                                                                                                <div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">Thank you for signifying interest in our upcoming event. 
                                                                                                    <p>
                                                                                                        Please <a href="{{url('study-fair-participation-guide.pdf')}}">click here and download the study fair participation guide</a> for your perusal.
                                                                                                    </p></div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- // CONTENT TABLE -->

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- // FLEXIBLE CONTAINER -->
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // CENTERING TABLE -->
                                            </td>
                                        </tr>
                                        <!-- // MODULE ROW -->


                                        <!-- MODULE ROW // -->
                                        <tr>
                                            <td align="center" valign="top">
                                                <!-- CENTERING TABLE // -->
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr style="padding-top:0;">
                                                        <td align="center" valign="top">
                                                            <!-- FLEXIBLE CONTAINER // -->
                                                            <table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td style="padding-top:0;" align="center" valign="top" width="500" class="flexibleContainerCell">

                                                                        <!-- CONTENT TABLE // -->
                                                                        <table border="0" cellpadding="0" cellspacing="0" width="50%" class="emailButton" style="background-color: #3498DB;">
                                                                            <tr>
                                                                                <td align="center" valign="middle" class="buttonContent" style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;">
                                                                                    <a style="color:#FFFFFF;text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:135%;" href="{{ url('access_level/')}}/{{$user->ref_id}}" target="_blank">Participation Access Level</a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- // CONTENT TABLE -->

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- // FLEXIBLE CONTAINER -->
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // CENTERING TABLE -->
                                            </td>
                                        </tr>
                                        <!-- // MODULE ROW -->


                                       


                                        <!-- MODULE ROW // -->
                                        <tr>
                                            <td align="center" valign="top">
                                                <!-- CENTERING TABLE // -->
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <!-- FLEXIBLE CONTAINER // -->
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top">

                                                                                    <!-- CONTENT TABLE // -->
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                        <tr>
                                                                                            <td valign="top" class="textContent">
                                                                                                <div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;margin-top:3px;color:#5F5F5F;line-height:135%;">Regards <br>{{\Config::get('constants.biz_name')}}</br></div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                    <!-- // CONTENT TABLE -->

                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- // FLEXIBLE CONTAINER -->
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // CENTERING TABLE -->
                                            </td>
                                        </tr>
                                        <!-- // MODULE ROW -->

                                    </table>
                                    <!-- // END -->

                                    @include('emails_template.footer')

                                </td>
                            </tr>
                        </table>
                    </center>
                </body>
                </html>
