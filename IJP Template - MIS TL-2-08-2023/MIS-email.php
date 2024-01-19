<?php
  
// Program to illustrate base64_encode()
// function
$str_exam_name_encoded = 'MIS-TL-02-08-2023';
 $str_exam_title_encoded = 'MIS-TL';
  
// echo base64_encode($str_encoded);
?> <html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <!--
					
					<![endif]-->
    <title>Email Template</title>
    <style type="text/css" media="screen">
      /* Linked Styles */
      body {
        padding: 0 !important;
        margin: 0 !important;
        display: block !important;
        min-width: 100% !important;
        width: 100% !important;
        background: #202020;
        -webkit-text-size-adjust: none
      }

      a {
        color: #ffffff;
        text-decoration: none
      }

      p {
        padding: 0 !important;
        margin: 0 !important
      }

      img {
        -ms-interpolation-mode: bicubic;
        /* Allow smoother rendering of resized image in Internet Explorer */
      }

      .mcnPreviewText {
        display: none !important;
      }

      /* Mobile styles */
      @media only screen and (max-device-width: 480px),
      only screen and (max-width: 480px) {
        u+.body .gwfw {
          width: 100% !important;
          width: 100vw !important;
        }

        .m-shell {
          width: 100% !important;
          min-width: 100% !important;
        }

        .m-center {
          text-align: center !important;
        }

        .center {
          margin: 0 auto !important;
        }

        .nav {
          text-align: center !important;
        }

        .h2 {
          font-size: 60px !important;
          line-height: 64px !important;
        }

        .h3 {
          font-size: 30px !important;
          line-height: 36px !important;
        }

        .td {
          width: 100% !important;
          min-width: 100% !important;
        }

        .bg {
          height: auto !important;
          -webkit-background-size: cover !important;
          background-size: cover !important;
        }

        .m-br-15 {
          height: 15px !important;
        }

        .p30-0 {
          padding: 30px 0px !important;
        }

        .p30-15 {
          padding: 30px 15px !important;
        }

        .p0-15-30 {
          padding: 0px 15px 30px 15px !important;
        }

        .p0-15 {
          padding: 0px 15px !important;
        }

        .pb40 {
          padding-bottom: 40px !important;
        }

        .pb0 {
          padding-bottom: 0px !important;
        }

        .pb20 {
          padding-bottom: 20px !important;
        }

        .m-td,
        .m-hide {
          display: none !important;
          width: 0 !important;
          height: 0 !important;
          font-size: 0 !important;
          line-height: 0 !important;
          min-height: 0 !important;
        }

        .m-height {
          height: auto !important;
        }

        .m-block {
          display: block !important;
        }

        .fluid-img img {
          width: 100% !important;
          max-width: 100% !important;
          height: auto !important;
        }

        .column,
        .column-top,
        .column-dir,
        .column-bottom,
        .column-dir-top,
        .column-dir-bottom {
          float: left !important;
          width: 100% !important;
          display: block !important;
        }

        .content-spacing {
          width: 15px !important;
        }
      }

      button:hover {
        background-color: red;
        color: white;
      }

      .ii a[href] {
        color: #fff !important;
      }

      .card-heading {
        color: #fff;
        font-family: 'Nunito', sans-serif;
        font-size: 16px;
        line-height: 26px;
        text-align: left;
        min-width: auto !important;
      }

      .card-span {
        padding-bottom: 16px;
        font-family: 'interestate', Arial, sans-serif;
        font-size: 16px;
        line-height: 24px;
        text-align: left;
        font-weight: 300;
        color: #c5c5c5;
      }
    </style>
  </head>
  <body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#202020; -webkit-text-size-adjust:none;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#202020" class="gwfw">
      <tr>
        <td align="center" valign="top">
          <!-- Main -->
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" style="padding-bottom: 40px;" class="pb0">
                <!-- Shell -->
                <table width="700" border="0" cellspacing="0" cellpadding="0" class="m-shell">
                  <tr>
                    <td class="td" style="width:700px; min-width:700px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                      <!-- Header -->
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" style="border-radius: 6px 6px 0px 0px;">
                        <tr>
                          <td style="padding: 25px 40px;background: #ffffff;" class="p30-15">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <th class="column" width="145" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;">
                                        <!--<img src="https://xdbsworldwide.com/wp-content/uploads/2021/06/XDBS-new-logo.png" width="141" border="0" alt="" /><img src="https://www.itbusinessplus.net/Email-IJP/ondirect-logo.png" width="40%" border="0" alt="" />-->
                                        <img src="https://www.itbusinessplus.net/Email-IJP/ondirect-logo.png" width="40%" border="0" alt="" />
                                      </td>
                                    </tr>
                                  </table>
                                </th>
                                <th style="padding-bottom:20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="1"></th>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <!-- END Header -->
                      <!-- Hero -->
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ED1C24; margin-top: 50px" style="background-color: rgb(237, 10, 0);">
                        <tr>
                          <td class="content-spacing" width="45" valign="top" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
                          <td style="padding: 10px 0px 0px 0px;" class="p30-15">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td class="h3" style="color:#fff; font-family:'interestate', Arial, sans-serif; font-size:26px; line-height:55px; text-align:left; font-weight:300;">Internal Job Posting: <BR>
                                </td>
                              </tr>
                              <tr>
                                <td class="h2" style="padding-bottom: 20px; color:#fff !important; font-family:'interestate', Arial, sans-serif; font-size:43px; line-height:20px; text-align:left; font-weight:700;">MIS TL <span class="card" style="font-size: 28px;
    float: right;
    margin-right: 51px;" }"></span>
                                </td>
                              </tr>
                              <tr>
                                <td align="left">
                                  <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <th style="padding-bottom: 10px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="10"></th>
                                      <th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                        <!-- <table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="left"><table border="0" cellspacing="0" cellpadding="0"><tr><td class="text-button2" style="color:#ffffff; background:#ffffff; font-family:'interestate', Arial, sans-serif; font-size:14px; line-height:18px; text-align:center; font-weight:500; padding:12px 25px;"><a href="index2.php" target="_blank" class="link-yellow" style="color:#ffffff; text-decoration:none;"><span class="link-yellow" style="color:#000000; text-decoration:none;">MORE ABOUT US</span></a></td></tr></table></td></tr></table> -->
                                      </th>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td class="content-spacing" width="40" valign="top" style="font-size:0pt; line-height:0pt; text-align:left;">
                            <div class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
                              <img src="http://itbusinessplus.net/Email-IJP/images/red_box.jpg" border="0" width="45" height="44" alt="" style="filter: grayscale(1);" />
                            </div>
                          </td>
                        </tr>
                      </table>
                      <!-- END Hero -->
                      <!-- Two Columns -->
                      <!-- <layout label='Two Columns'><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff"><tr><td style="padding: 40px;" class="p30-15"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><th class="column-top" width="275" bgcolor="#202020" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;background-color: #202020;"    ><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td valign="top" class="content-spacing" width="40" style="font-size:0pt; line-height:0pt; text-align:left;"></td><td style="padding: 40px 0px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"></table></td><td valign="top" class="content-spacing" width="40" style="font-size:0pt; line-height:0pt; text-align:left;"><div class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="images/red_box.jpg" border="0" width="40" height="40" alt="" style="    filter: grayscale(1);" /></div></td></tr></table></th></tr></table></td></tr></table></layout> -->
                      <!-- END Two Columns -->
                      <!-- <layout label='Two Columns'><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff"><tr><td style="padding: 00px 40px 40px 40px;" class="p30-15"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><th class="column-top" width="275" bgcolor="#202020" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;background-color: #202020;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td valign="top" class="content-spacing" width="40" style="font-size:0pt; line-height:0pt; text-align:left;"></td><td style="padding: 40px 0px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"></table></td><td valign="top" class="content-spacing" width="40" style="font-size:0pt; line-height:0pt; text-align:left;"><div class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="images/red_box.jpg" border="0" width="40" height="40" alt="" style="    filter: grayscale(1);" /></div></td></tr></table></th></tr></table></td></tr></table></layout> -->
                      <layout label='Two Columns'>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff">
                          <tr>
                            <td style="padding: 10px 40px 40px 40px;" class="p30-15">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <th class="column-top" width="275" bgcolor="#202020" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;background-color: #323232 !important; ">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td valign="top" class="content-spacing" width="40" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
                                        <td style="padding: 40px 0px;">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td class="h5 card-heading">Date: <span class="card-span">3rd August 2023</span>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="h5 card-heading">Nomination End Date: <span class="card-span">5th August 2023</span>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="h5 card-heading">Job Title: <span class="card-span">MIS TL</span>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="h5 card-heading">Department: <span class="card-span">Quality Assurance </span>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="h5 card-heading">No. of Positions Open: <span class="card-span">1</span>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="h5 card-heading">Location: <span class="card-span"> Pune</span>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="h5 card-heading" style="padding-top:5px;padding-bottom: 5px; font-family:'interestate', Arial, sans-serif; font-size:26px;text-align:left; font-weight:300; color:#FFFFFF;">
                                                <hr>Eligibility
                                                <hr>
                                              </td>
                                            </tr>
                                   
                                            <tr>
                                              <td class="h5 card-heading">Tenure: <span class="card-span">Minimum 24 months, preferably in MIS/Data management role</span>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="h5 card-heading">Eligible JT: <span class="card-span">Currently working as SME, Mentor, TL for minimum 6 months </span>
                                              </td>
                                            </tr>
											         <tr>
                                              <td class="h5 card-heading">Ratings: <span class="card-span">Average KRA Rating above C or 50% and above productivity in the last 6 months </span>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="h5 card-heading">Attendance: <span class="card-span">0 UPL / AWOI (in last 3 months) </span>
                                              </td>
                                            </tr>
											<tr>
                                              <td class="h5 card-heading">Adherence to Policies: <span class="card-span">No Warning letter in the last 6 months</span>
                                              </td>
                                            </tr>
                                            <br>
                                            <!--	<tr><td class="h5 card-heading"><ul style="list-style-type:circle;"><li>2 years with the organization</li><li>Currently a TL/Sr. TL</li><li>No UPL in the last 6 months</li><li>No warning letters in the last 6 months</li><li>Minimum 40% Productivity (Can be waived if handling specific responsibilities or from Delivery/Call Review Team)</li><li>Maximum average shrinkage of 15% for the last 6 months</li><li>Maximum average attrition of 7% for the last 6 months</li></ul></td></tr>-->
                                            <tr>
                                              <td class="h5 card-heading" style="padding-top: 5px;padding-bottom: 5px; font-family:'interestate', Arial, sans-serif; font-size:26px; text-align:left; font-weight:300; color:#FFFFFF;">
                                                <hr>Key Responsibilities
                                                <hr>
                                              </td>
                                            </tr>
                                             
											<!-- <tr>
											<td class="h5 card-heading">Audits: <span class="card-span">Audit and monitor DNC calls as per specified guidelines</span>
											</td>
										</tr>
										<tr>
											<td class="h5 card-heading">International voice calling (in/outbound): <span class="card-span">To handle the international calls that we receive from the prospects around the globe</span>
											</td>
										</tr>
										<tr>
											<td class="h5 card-heading">DNC Tracking | Excel Reports (Basic): <span class="card-span">Maintaining a daily/weekly DNC report of activities processed</span>
											</td>
										</tr>
										<tr>
											<td class="h5 card-heading">Ops Skill Development + Feedback sessions: <span class="card-span">Providing effective feedbacks to agents for ensuring DNC process compliance.
Providing the training sessions for DNC procedure to support the agents on a regular basis</span>
											</td>
										</tr>-->
										<br>
                                            <!--<tr><td class="h5 card-heading" >Half Day Calling(0.5 FTE): <span style="padding-bottom: 22px; font-family:'interestate', Arial, sans-serif; font-size:16px; text-align:left; font-weight:300; color:#c5c5c5;">Dialing on particular campaigns and achieving targets as assigned by the reporting manager.</span></td></tr><tr><td class="h5 card-heading" >Half Day Floor Support: <span class="card-span">Supporting the team in real time coahing, mentoring & accountable for driving numbers.</span></td></tr><tr><td class="h5 card-heading" >Report Management: <span class="card-span">Provide daily/weekly status report of activities completed and planned for the following week to the Reporting Manager(OPS Manager)</span></td></tr><tr><td class="h5 card-heading" >Determine And Report: <span class="card-span">Determine and report on how technology and process improvements can address identified issues.</span></td></tr><tr><td class="h5 card-heading" >Skill Development: <span class="card-span">Providing valuable information and a wealth of knowledge and support to agents.</span></td></tr><tr><td class="h5 card-heading" >Process Expertise And Optimisation: <span class="card-span">Master on process, who can help and guide others.</span></td></tr>-->
                                            <!--<tr><td class="h5 card-heading" >Half Day Audits (0.5 FTE): <span style="padding-bottom: 22px; font-family:'interestate', Arial, sans-serif; font-size:16px; text-align:left; font-weight:300; color:#c5c5c5;">Dialing on particular campaigns and achieving targets as assigned by the RM
</span></td></tr><tr><td class="h5 card-heading" >Half Day Floor Support: <span class="card-span">Supporting the team in real time coahing, mentoring & accountable for driving numbers.

</span></td></tr><tr><td class="h5 card-heading" >Report Management: <span class="card-span">Provide daily/weekly status report of activities completed and planned for the following week to the Reporting Manager
</span></td></tr>
																															<!--<tr><td class="h5 card-heading" >Determine And Report: <span class="card-span">Determine and report on how technology and process improvements can address identified issues.</span></td></tr>-->
                                            <!--<tr><td class="h5 card-heading" >Skill Development: <span class="card-span">Providing Feedbacks and Valueable Knowledge to agents to improve teams performance.
</span></td></tr><tr><td class="h5 card-heading" >Process Expertise And Optimisation: <span class="card-span">Process Knowledge has to be upto the mark to help and guide resources.
</span></td></tr>-->
                                            <tr>
                                              <td class="h5 card-heading">
                                                <ul style="list-style-type:circle;">
                                               <li>Data Collation & Management</li>
												<li>Data Analysis & Excel Reporting</li>
												<li>Data Visualization</li>
												<li>Team Management </li>
												<li>MIS & WFM (Allocation)</li>
												<li>MS Access, VBA Macro, Power BI</li>
                                                </ul>
                                              </td>
                                            </tr>
											
											  <tr>
                                              <td class="h5 card-heading" style="padding-top: 5px;padding-bottom: 5px; font-family:'interestate', Arial, sans-serif; font-size:26px; text-align:left; font-weight:300; color:#FFFFFF;">
                                                <hr>Round of Interviews<hr>
                                              </td>
                                            </tr>
											                              <tr>
                                              <td class="h5 card-heading">
                                                <ul style="list-style-type:circle;">
                                                 <li>Aptitude Test</li>
												<li>MS Excel Test</li>
												<li>Dashboard / Reporting Assignment</li>
                                                </ul>
                                              </td>
                                            </tr>
                                           <!-- <tr>
                                              <td class="h5 card-heading" style="padding-top:5px;padding-bottom: 5px; font-family:'interestate', Arial, sans-serif; font-size:26px;text-align:left; font-weight:300; color:#FFFFFF;">
                                                <hr>Round of Interviews:  2
                                                <hr>
												
                                              </td>
                                            </tr>-->
                                             <!-- <tr>
                                              <td class="h5 card-heading">Process Knowledge Test: <span class="card-span">19th July 2023</span>
                                              </td>
                                            </tr>
                                            <tr> 
                                              <td class="h5 card-heading">Panel Interview: <span class="card-span"> 20th July 2023</span>
                                              </td>
                                            </tr> -->
                                            <!--<tr><td class="h5 card-heading" >Group Discussion: <span class="card-span">9th Dec 2022</span></td></tr><tr><td class="h5 card-heading" >Panel Interview: <span class="card-span">12th Dec 2022</span></td></tr>-->
                                            <tr style="margin-top: 10px;">
                                              <td class="h5 card-heading" style="padding: 5px; font-size: 20px; background: rgb(237, 10, 0); text-align: center; font-weight: 700;">
                                                <a href="https://itbusinessplus.net/Email-IJP/MIS-TL-02082023.php?etitle=<?php echo base64_encode($str_exam_title_encoded);?>&&ename=<?php echo base64_encode($str_exam_name_encoded);?>" style="color:#ffffff !important;" target="_blank">Apply Now </a>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                        <td valign="top" class="content-spacing" width="40" style="font-size:0pt;text-align:left;">
                                          <div class="fluid-img" style="font-size:0pt; text-align:left;">
                                            <img src="http://itbusinessplus.net/Email-IJP/images/red_box.jpg" border="0" width="40" height="40" alt="" style="filter: grayscale(1)" />
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </th>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </layout>
                      <!-- Footer -->
                      <!-- <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff"><tr><td style="padding: 60px 40px; border-top: 1px solid #202020;" class="p30-15"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td style="padding-bottom: 40px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><th class="column-top" width="145" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="https://xdbsworldwide.com/wp-content/uploads/2021/06/XDBS-new-logo.png" width="141"  border="0" alt="" /></td></tr></table></th><th style="padding-bottom:25px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="20"></th></tr></table></td></tr></table><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="text-footer2 m-center" style="color:#999999; font-family: 'Nunito', sans-serif;font-size:12px; line-height:16px; text-align:left; min-width:auto !important;">East Pixel Bld. 99, Creative City 9000, Republic of Design.</td></tr></table></th><th style="padding-bottom:25px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="20"></th></tr></table></td></tr></table> -->
                      <!-- END Footer -->
                    </td>
                  </tr>
                </table>
                <!-- END Shell -->
              </td>
            </tr>
          </table>
          <!-- END Main -->
        </td>
      </tr>
    </table>
  </body>
</html>