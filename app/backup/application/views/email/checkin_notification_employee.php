<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <!--[if gte mso 9]>
  <Auhthor: Tobiloba Ajibola, tobiajibola.com, 08064012829>

  <![endif]-->
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="format-detection" content="date=no" />
  <meta name="format-detection" content="address=no" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i" rel="stylesheet" />
    <!--<![endif]-->
  <title>Visitor Notification</title>
  <!--[if gte mso 9]>
  <style type="text/css" media="all">
    sup { font-size: 100% !important; }
  </style>
  <![endif]-->
  

  <style type="text/css" media="screen">
    /* Linked Styles */
    body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#001736; -webkit-text-size-adjust:none }
    a { color:#66c7ff; text-decoration:none }
    p { padding:0 !important; margin:0 !important } 
    img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
    .mcnPreviewText { display: none !important; }

        
    /* Mobile styles */
    @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
      .mobile-shell { width: 100% !important; min-width: 100% !important; }
      .bg { background-size: 100% auto !important; -webkit-background-size: 100% auto !important; }
      
      .text-header,
      .m-center { text-align: center !important; }
      
      .center { margin: 0 auto !important; }
      .container { padding: 20px 10px !important }
      
      .td { width: 100% !important; min-width: 100% !important; }

      .m-br-15 { height: 15px !important; }
      .p30-15 { padding: 30px 15px !important; }

      .m-td,
      .m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

      .m-block { display: block !important; }

      .fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

      .column,
      .column-top,
      .column-empty,
      .column-empty2,
      .column-dir-top { float: left !important; width: 100% !important; display: block !important; }

      .column-empty { padding-bottom: 10px !important; }
      .column-empty2 { padding-bottom: 30px !important; }

      .content-spacing { width: 15px !important; }
    }
  </style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#ffffff; -webkit-text-size-adjust:none;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
    <tr>
      <td align="center" valign="top">
        <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
          <tr>
            <td class="td container" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:55px 0px;">
              <!-- Header -->
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="p30-15" style="padding: 0px 30px 30px 30px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <th class="column-top" width="145" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;"><img  src="<?php echo base_url();?>assets/images/logo/<?php echo $_SESSION['company_account']['company_logo'];?>" alt="" width="40" height="40" border="0" alt="" /></td>
                            </tr>
                          </table>
                        </th>
                        <th class="column-empty" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th>
                        <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                             
                            </tr>
                          </table>
                        </th>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <!-- END Header -->

              <!-- Intro -->
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td style="padding-bottom: 10px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="tbrr p30-15" style="padding: 60px 30px; border-radius:26px 26px 0px 0px;" bgcolor="#f2f2f2">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td class="h1 pb25" style="color:#811f1f; font-family:'Muli', Arial,sans-serif; font-size:40px; line-height:46px; text-align:center; padding-bottom:25px;">Dear <?php echo $visitor_tag_data['employee_firstname']?></td>
                            </tr>
                            <tr>
                              <td class="text-center pb25" style="color:#c1cddc; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:30px; text-align:center; padding-bottom:25px;"><?php echo $visitor_tag_data['firstname'] .' '. $visitor_tag_data['lastname'];?> from <?php echo $visitor_tag_data['organization'];?> has just checked in at the reception to see you for a/an <?php echo $visitor_tag_data['purpose'];?></td>
                            </tr>
                            <!-- Button -->
                            <tr>
                              <td align="center">
                                <table class="center" border="0" cellspacing="0" cellpadding="0" style="text-align:center;">
                                  <tr>
                                    <td class="pink-button text-button" style="background:#811f1f; color:#c1cddc; font-family:'Muli', Arial,sans-serif; font-size:14px; line-height:18px; padding:12px 30px; text-align:center; border-radius:0px 22px 22px 22px; font-weight:bold;"><a href="<?php echo base_url();?>admit_checkin/<?php echo $visitor_tag_data['checkin_ref'];?>" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">CLICK HERE TO ADMIT/REJECT</span></a></td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                            <!-- END Button -->
                          </table>
                        </td><a href="<?php echo base_url()?>'admit_checkin/'<?php echo $visitor_tag_data['checkin_ref'];?>' "></a>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <!-- END Intro -->

          
              <!-- Footer -->
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="p30-15 bbrr" style="padding: 50px 30px; border-radius:0px 0px 26px 26px;" bgcolor="#f2f2f2">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center" style="padding-bottom: 30px;">
                          <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td class="img" width="55" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="<?php echo base_url();?>assets/images/ico_facebook.jpg" width="38" height="38" border="0" alt="" /></a></td>
                              <td class="img" width="55" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="<?php echo base_url();?>assets/images/ico_twitter.jpg" width="38" height="38" border="0" alt="" /></a></td>
                              <td class="img" width="55" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="<?php echo base_url();?>assets/images/ico_instagram.jpg" width="38" height="38" border="0" alt="" /></a></td>
                              <td class="img" width="38" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="<?php echo base_url();?>assets/images/ico_linkedin.jpg" width="38" height="38" border="0" alt="" /></a></td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-footer1 pb10" style="color:#c1cddc; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:20px; text-align:center; padding-bottom:10px;"><?php echo $_SESSION['company_account']['company'];?></td>
                      </tr>
                      <tr>
                        <td class="text-footer2" style="color:#8297b3; font-family:'Muli', Arial,sans-serif; font-size:12px; line-height:26px; text-align:center;"><a href="https://skorebot.com">Powered by Skorebot</a></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              
              </table>
              <!-- END Footer -->
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
