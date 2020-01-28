<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | Bingo</title>
    <meta name="description" content="Bingo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/neat.minc619.css?v=1.0">
    <style type="text/css">
      .tabler {
        font-family: 'Poppins',Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        font-size: 13px;
        color: #888
      }

      .tabler td, .tabler th {
        border: 1px solid #f5f5f5;
        padding: 11px;
      }

      .tabler tr:nth-child(even){background-color: #fafafa;}

      .tabler tr:hover {background-color: #f4f4f4;}

      .tabler th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #f5f5f5;
        color: #333;
      }

      .badge {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    .timeline{list-style:none;padding:0 0 20px;position:relative;margin-top:-15px}.timeline:before{top:30px;bottom:25px;position:absolute;content:" ";width:3px;background-color:#ccc;left:25px;margin-right:-1.5px}.timeline>li,.timeline>li>.timeline-panel{margin-bottom:5px;position:relative}.timeline>li:after,.timeline>li:before{content:" ";display:table}.timeline>li:after{clear:both}.timeline>li>.timeline-panel{margin-left:55px;float:left;top:19px;padding:4px 10px 8px 15px;border:1px solid #ccc;border-radius:5px;width:85%;word-wrap:break-word;font-size:12px;}.timeline>li>.timeline-badge{color:#fff;width:36px;height:36px;line-height:36px;font-size:1.2em;text-align:center;position:absolute;top:26px;left:9px;margin-right:-25px;background-color:#fff;z-index:100;border-radius:50%;border:1px solid #d4d4d4}.timeline>li.timeline-inverted>.timeline-panel{float:left}.timeline>li.timeline-inverted>.timeline-panel:before{border-right-width:0;border-left-width:15px;right:-15px;left:auto}.timeline>li.timeline-inverted>.timeline-panel:after{border-right-width:0;border-left-width:14px;right:-14px;left:auto}.timeline-badge.primary{background-color:#2e6da4!important}.timeline-badge.success{background-color:#3f903f!important}.timeline-badge.warning{background-color:#f0ad4e!important}.timeline-badge.danger{background-color:#d9534f!important}.timeline-badge.info{background-color:#5bc0de!important}.timeline-title{margin-top:0;color:inherit;font-size:14px;color:#03a9f4;font-weight:bold;}.timeline-body>p,.timeline-body>ul{margin-bottom:0;margin-top:0}.timeline-body>p+p{margin-top:5px}.timeline-badge>.glyphicon{margin-right:0px;color:#fff}.timeline-body>h4{margin-bottom:0!important}
      </style>
  </head>
  <body>

    <div class="o-page">
     <?php include 'header.php'; ?>
      <div class="container-fluid" style="padding-left:40px;">
        <div class="row">
          <div class="col-lg-7 col-md-12 ">
            <h4>Dashboard Statistics</h4>
            <p class="u-mb-small">Administrator Sections</p>
            <div class="">
            
              <div class="c-card">
                 <h4>Retaillers</h4>
                 <hr style="margin: 10px 0px;opacity: .2" />
                <div class="modal-body" style="padding: 20px;">
                        <div style="padding: 10px;"></div>
            <div class="row">              
              <div class="col-sm-6">
                <div>Detailled View</div>
                <h3 style="margin:5px 0px;color: #444;cursor:pointer;font-size:23px;">Transaction Order (Id:32)</h3>
              </div>
              <div class="col-sm-3">
               <label class="badge" style="background-color: orange;color:#fff">Pending</label>              </div>
              <div class="col-sm-3">
                <div style="padding: 5px;"></div>
                <span><b style="color: orange">Delivery Date </b>: 20/11/2019</span>
                <div style="text-transform: uppercase;">By : Demo Buyer Inc.</div>

              </div>
             
            </div>
            <div style="margin:10px 0px;border-bottom: solid 1px #eee"></div>
            <div class="row">
              <div class="col-sm-8">
                 <div style="padding: 20px;font-size: 12px;">
                    <h3 style="margin:5px 0px;color: #03a9f4;cursor:pointer;font-size:23px;">Pepsico International</h3>
                    <b style="font-size: 14px;color: #444">Date of Transaction  :</b>20/11/2019<br>
                    <b style="font-size: 14px;color: #333">Transaction Durations in Days : </b> : 23 Days<br>                         
                 </div>
              </div>

              <div class="col-sm-4">
                <div style="padding: 20px;font-size: 12px;">
                   <h3 style="margin:5px 0px;color: #03a9f4;cursor:pointer;font-size:16px;">Tx Details</h3>
                    <b style="font-size: 14px;color: #444">Purpose :</b>For Residence and Industries<br>
                    <b style="font-size: 14px;color: #333">Facilities : </b> : 45 Days Cycle Term Days<br>  
                 </div>
              </div>
            </div>

            <div class="row">
              
              <div class="table-responsive" style="padding: 30px">
                <table class="tabler" style="width: 100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th style="width:300px;">Product</th>
                      <th style="width:240px">Buy Price</th>
                      <th style="width:240px">Sell Price</th>
                      <th>Qty.</th>
                      <th>Unit</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                              <td class="mosa">1</td>
                              <td class="mosa"><b style="font-size:16px;">Coco Cola Cans  </b><br>wdsfdfsfd</td>
                              <td class="mosa"><span style="font-weight:bold;color: #03a9f4">$ </span> 23.00</td>
                              <td class="mosa"><span style="font-weight:bold;color: #03a9f4">$ </span>43.00</td>
                              <td class="mosa">2</td>
                              <td class="mosa" style="text-transform:uppercase"></td>                                  
                            </tr><tr>
                              <td class="mosa">2</td>
                              <td class="mosa"><b style="font-size:16px;">sfdfdfsdfsdaf </b><br>sdafsdfs</td>
                              <td class="mosa"><span style="font-weight:bold;color: #03a9f4">$ </span> 435.00</td>
                              <td class="mosa"><span style="font-weight:bold;color: #03a9f4">$ </span>5.00</td>
                              <td class="mosa">2</td>
                              <td class="mosa" style="text-transform:uppercase"></td>                                  
                            </tr>                    </tbody>
                  </table>


                  <div style="padding: 20px 10px;background: #03a9f4;;color: #fff">
                    <div class="row">                     
                      <div class="col-sm-4" style="text-align: center;">
                          <div><b>Total Expenses</b><br> 
                              <h3 style="margin-top:0px;"><span style="color: #fff">$ 365798</span></h3>
                          </div>
                      </div>
                      <div class="col-sm-4" style="text-align: center;">
                          <div><b>Buy Amount</b><br> 
                              <h3 style="margin-top:0px;"><span style="color: #fff">$ 366,714</span></h3>
                          </div>
                      </div>
                       <div class="col-sm-4" style="text-align: center;">
                         <div><b>Total Amount</b><br> 
                              <h3 style="margin-top:0px;"><span style="color: #fff">$ 365,894</span></h3>
                          </div>
                       </div>
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-6">
                      <div>
                        <h4>Buyer details : </h4>
                        <div style="font-size: 17px;padding: 10px;"><b>Buyer Name : Demo Buyer Inc.</b></div>
                        <div style="padding:10px;"><b>Buyer inco Terms : <label class="label label-danger" style="font-size:11px;margin:2px;">EXW</label><label class="label label-danger" style="font-size:11px;margin:2px;">DAT</label></b></div>
                        <div style="padding: 3px;"></div>
                        <a target="_blank" style="font-size: 14px;" href="../supplier/upload/1574263792.jpg">View Buyer Contract</a>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div>
                        <h4>Seller details : </h4>
                        <div style="font-size: 17px;"><b>Seller Name : Demo Trader INc.</b></div>
                        <div><b>Seller inco Terms : <label class="label label-danger" style="font-size:11px;margin:2px;">EXW</label><label class="label label-danger" style="font-size:11px;margin:2px;">DAT</label></b></div>
                         <div style="padding: 3px;"></div>
                        <a target="_blank" style="font-size: 14px;" href="../supplier/upload/1574263777.jpg">View Seller Contract</a>
                      </div>
                    </div>
                  </div>
                 
                <hr>
              <div class="row" style="padding: 20px;background: #f5f5f5">
                <div class="col-sm-6">
                   <h1 style="font-size: 16px;text-align: right;width:90%"><b style="color: #444">Expected Delivery Date</b> : 20/11/2019</h1>
                </div>
                <div class="col-sm-6">
                   <h1 style="font-size: 16px;text-align: right;width:90%"><b style="color: #444">Expected Shipping Date</b> : 20/11/2019</h1>
                </div>
              </div>               
              <div>
               <!-- timeline starts -->
              
              </div>

                <hr>

                <div class="row">
                  <div class="col-sm-6">
                    <div style="padding: 10px 5px;">
                      <div style="padding: 10px;"></div>
                        <b style="color:#03a9f4;font-size: 20px;">Transhipment and freight Details</b>
                        <div>sfdddfasdf</div>
                        <b>Forwarders Name : </b> dfadfd<br>
                        <b>Shipment Cost : </b> $ 342343   
                        <div style="padding: 3px;"></div>
                        <a target="_blank" style="font-size: 14px;" href="../supplier/upload/1574263809.jpg">View Transhipment Contract</a>                   
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div style="padding: 3px 5px;">                     
                                               <iframe width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=sfdddfasdf&amp;output=embed"></iframe>                       
                    </div>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-sm-6">
                    <h3 style="font-size: 22px;">Transaction Warrenties</h3>
                    <div style="padding: 10px;"></div>
                    <div class="row">
                      <div class="col-sm-4"> <b>Type of Payment </b> </div>
                      <div class="col-sm-8">CAD Payment</div>
                    </div>
                     <div class="row">
                      <div class="col-sm-4"> <b>Type of Document</b> </div>
                      <div class="col-sm-8">Credit Insuarance</div>
                    </div>
                     <div class="row">
                      <div class="col-sm-4"> <b>Document Remarks: </b> </div>
                      <div class="col-sm-8">dfsdafs</div>
                    </div>
                     <a target="_blank" style="font-size: 14px;" href="../supplier/upload/1574263818.jpg">View Warrenty Contract</a>   
                  </div>
                  <div class="col-sm-6">
                     <h3 style="font-size: 22px;">Surveyor Details</h3>
                    <div style="padding: 10px;"></div>
                    <div class="row">
                      <div class="col-sm-4"> <b>Surveyor Name </b> </div>
                      <div class="col-sm-8">dfsfsdf</div>
                    </div>
                     <div class="row">
                      <div class="col-sm-4"> <b>Surveyor Cost</b> </div>
                      <div class="col-sm-8">$ 23455</div>
                    </div>
                     <a target="_blank" style="font-size: 14px;" href="../supplier/upload/1574263828.jpg">View Surveyor Contract</a>  
                  </div>
                </div>                
                <hr>
                <h3>Transaction Information</h3>
                <div style="padding: 10px;"></div>
                <div class="row">
                  <div class="col-sm-4"> <b>Transaction Remarks</b> </div>
                  <div class="col-sm-8" style="font-weight: bold;color:#900">sdsadds</div>
                </div>
                 <div class="row">
                  <div class="col-sm-4"> <b>Proof Of Transaction</b> </div>
                  <div class="col-sm-8"> <a target="_blank" style="font-size: 14px;" href="../supplier/upload/1574263835.jpg">View Proof of Contract</a>  </div>
                </div>

                                  
                
                <div style="padding: 40px;"></div>
                 <div class="">
                   <div class="row">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Bill Terms</a></li>
                      <li><a data-toggle="tab" href="#menu1">Shipping Terms</a></li>
                      <li><a data-toggle="tab" href="#menu2">Other Terms and Conditions</a></li>
                    </ul>
                    
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <h3 style="font-size: 20px;">Billing Terms and Conditions</h3>
                        <p style="padding: 10px;">These Terms and Conditions ("Agreement") governs the use of the services ("Service") that are made available by Website.com Solutions Inc. ("Website.com", "we" or "us"). These Terms and Conditions represent the whole agreement and understanding between Website.com and the individual or entity who subscribes to our service ("Subscriber" or "you"). PLEASE READ THIS AGREEMENT CAREFULLY. By submitting your application and by your use of the Service, you agree to comply with all of the terms and conditions set out in this Agreement. Website.com may terminate your account at any time, with or without notice, for conduct that is in breach of this Agreement, for conduct that Website.com believes is harmful to its business, or for conduct where the use of the Service is harmful to any other party.Website.com may, in its sole discretion, change or modify this Agreement at any time, with or without notice. Such changes or modifications shall be made effective for all Subscribers upon posting of the modified Agreement to this web address You are responsible to read this document from time to time to ensure that your use of the Service remains in compliance with this Agreement.+++++These Terms and Conditions ("Agreement") governs the use of the services ("Service") that are made available by Website.com Solutions Inc. ("Website.com", "we" or "us"). These Terms and Conditions represent the whole agreement and understanding between Website.com and the individual or entity who subscribes to our service ("Subscriber" or "you"). PLEASE READ THIS AGREEMENT CAREFULLY. By submitting your application and by your use of the Service, you agree to comply with all of the terms and conditions set out in this Agreement. Website.com may terminate your account at any time, with or without notice, for conduct that is in breach of this Agreement, for conduct that Website.com believes is harmful to its business, or for conduct where the use of the Service is harmful to any other party.Website.com may, in its sole discretion, change or modify this Agreement at any time, with or without notice. Such changes or modifications shall be made effective for all Subscribers upon posting of the modified Agreement to this web address (URL): http://www.website.com/terms-and-conditions/. You are responsible to read this document from time to time to ensure that your use of the Service remains in compliance with this Agreement.+++++These Terms and Conditions ("Agreement") governs the use of the services ("Service") that are made available by Website.com Solutions Inc. ("Website.com", "we" or "us"). These Terms and Conditions represent the whole agreement and understanding between Website.com and the individual or entity who subscribes to our service ("Subscriber" or "you"). PLEASE READ THIS AGREEMENT CAREFULLY. By submitting your application and by your use of the Service, you agree to comply with all of the terms and conditions set out in this Agreement. Website.com may terminate your account at any time, with or without notice, for conduct that is in breach of this Agreement, for conduct that Website.com believes is harmful to its business, or for conduct where the use of the Service is harmful to any other party.Website.com may, in its sole discretion, change or modify this Agreement at any time, with or without notice. Such changes or modifications shall be made effective for all Subscribers upon posting of the modified Agreement to this web address (URL): http://www.website.com/terms-and-conditions/. You are responsible to read this document from time to time to ensure that your use of the Service remains in compliance with this Agreement..</p>
                      </div>                     
                    </div>
                     
                  </div>
                 </div>
                 <div class="finance">

                 

                  <div class="tab-content">
                    <div id="loka">
                      <h3>Finance Details</h3>
                                                 <div style="padding: 10px;"></div>
                        
                        <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Total Amount</b> </div>
                          <div class="col-sm-8" style="font-weight: bold;color:#900">$ 366714.00</div>
                        </div>
                       
                        <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Status</b> </div>
                          <div class="col-sm-8" style="font-size: 12px;"><label class="badge" style="background-color: orange;color:#fff;">Pending</label></div>
                        </div>
                       
                         <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Amount Asked</b> </div>
                                                    <div class="col-sm-8" style="font-weight: bold;color:#900">$ 0.00 <span title="Max Advance Against Purchase Value" style="color: #333;font-size: 12px;">(%)</span></div>
                        </div>
                       
                       
                        <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Transaction (id)</b> </div>
                          <div class="col-sm-8" style="font-size: 12px;"></div>
                        </div>
                       
                        <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Apply Document</b> </div>
                          <div class="col-sm-8" style="font-size: 12px;"><a target="_blank" href="../supplier/ask_for_fund/"><button class="c-btn c-btn--small">View File</button></a></div>
                        </div>
                      </div>
                      <div style="padding: 3px;"></div>

                      <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Accept Document</b> </div>
                          <div class="col-sm-8" style="font-size: 12px;"><a target="_blank" href="../supplier/ask_for_fund/"><button class="c-btn c-btn--success c-btn--small">View File</button></a></div>
                        </div>
                      </div>
                    </div>

                    <div id="soka" >
                      <h3>Shipping Details</h3>
                                                 <div style="padding: 10px;"></div>
                        
                        <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Shipment Tracking Number</b> </div>
                          <div class="col-sm-8" style="font-weight: bold;color:#900"></div>
                        </div>
                       
                        <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Shipment Remark </b> </div>
                          <div class="col-sm-8" style="font-size: 12px;"></div>
                        </div>
                      
                        <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Apply Document</b> </div>
                          <div class="col-sm-8" style="font-size: 12px;"><a target="_blank" href="../shipment/"><button class="c-btn c-btn--small">View Shipping Contract File</button></a></div>
                        </div>
                    </div>
                    <div id="bhoka">
                     <h3>Invoice Details</h3>
                                                 <div style="padding: 10px;"></div>
                        
                        <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Invoice Date</b> </div>
                          <div class="col-sm-8" style="font-weight: bold;color:#900"></div>
                        </div>
                       
                        <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Invoice Remark </b> </div>
                          <div class="col-sm-8" style="font-size: 12px;"></div>
                        </div>
                      
                        <div class="row" style="font-size: 15px;">
                          <div class="col-sm-4"> <b>Apply Document</b> </div>
                          <div class="col-sm-8" style="font-size: 12px;"><a target="_blank" href="../invoice/"><button class="c-btn c-btn--small">View Invoice File</button></a></div>
                        </div>
                    </div>
                  </div>
                    <hr>
                    
                  </div>

              </div>

                 <div style="padding: 10px;"></div>

                 <a href="view_all_retaillers.php">Show All</a>
              </div>
            </div>
          </div><!-- // .col-sm-6 -->

          <div class="col-lg-5 col-md-12">
            <div style="padding: 32px;"></div>
             <div class="c-card" style="min-height: 800px;">
                 <h4>Timeline Details</h4>
                 <p>Order Details : 123454</p>
                 <hr style="margin: 10px 0px;opacity: .2" />
               <ul class="timeline">
                  <li>
                    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">Order Generated</h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Block No. : 456545</small></p>
                      </div>
                      <div class="timeline-body">
                        
                        <b>Blockhash : </b> 000dc75a315c77a1f9c98fb6247d03dd18ac52632d7dc6a9920261d8109b37cf<br/>
                        <b>Tx Hash : </b> 000dc75a315c77a1f9c98fb6247d03dd18ac52632d7dc6a9920261d8109b37cf
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">Order Accepted</h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Block No. : 456545</small></p>
                      </div>
                      <div class="timeline-body">
                        
                        <b>Blockhash : </b> 000dc75a315c77a1f9c98fb6247d03dd18ac52632d7dc6a9920261d8109b37cf<br/>
                        <b>Tx Hash : </b> 000dc75a315c77a1f9c98fb6247d03dd18ac52632d7dc6a9920261d8109b37cf
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">Order Invoices</h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Block No. : 456545</small></p>
                      </div>
                      <div class="timeline-body">
                        
                        <b>Blockhash : </b> 000dc75a315c77a1f9c98fb6247d03dd18ac52632d7dc6a9920261d8109b37cf<br/>
                        <b>Tx Hash : </b> 000dc75a315c77a1f9c98fb6247d03dd18ac52632d7dc6a9920261d8109b37cf
                      </div>
                    </div>
                  </li>
                 <li>
                    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">Order Shipped</h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Block No. : 456545</small></p>
                      </div>
                      <div class="timeline-body">
                        
                        <b>Blockhash : </b> 000dc75a315c77a1f9c98fb6247d03dd18ac52632d7dc6a9920261d8109b37cf<br/>
                        <b>Tx Hash : </b> 000dc75a315c77a1f9c98fb6247d03dd18ac52632d7dc6a9920261d8109b37cf
                      </div>
                    </div>
                  </li>
              </ul>

              </div>
          </div>
        </div>
      </div>

         <?php include 'footer.php'; ?>


      </div>
    </div>

    <!-- Main JavaScript -->
    <script src="js/neat.minc619.js?v=1.0"></script>

   
  </body>
</html>