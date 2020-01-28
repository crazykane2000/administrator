  <!doctype html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>View All Purchase Orders | Bingo</title>
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
        </style>
    </head>
    <body>

      <div class="o-page">
       <?php include 'header.php'; ?>
        <div class="container-fluid" style="padding-left:40px;">
          <div class="row">
            <div class="col-lg-12 col-md-12 ">
              <h4>View all Purchase Orders</h4>
              <p class="u-mb-small">Administrator Sections</p>
              <div class="">
               
                
                <div class="c-card">
                   <h4>Purchase Orders</h4>
                   <hr style="margin: 10px 0px;opacity: .2" />
                   <table class="tabler">
                     <thead>
                       <th>Order Id.</th>
                       <th>Order Date</th>
                       <th>Order From</th>
                       <th>Order To</th>
                       <th>Due Date</th>
                       <th>Status</th>
                       <th>Payment Method</th>
                       <th>Order Amount</th>
                       <th>Invoice No.</th>
                       <th>Action</th>
                     </thead>

                     <tbody>
                       <tr>
                         <td>INV 7887666.</td>
                         <td>14-11-2019</td>
                         <td style="font-weight: bold;color:#333">Ellissi Stores</td>
                         <td style="font-weight: bold;color:#333">Pepsico International</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                         <td>Credit Line <br/> <b>Credit Line id : </b> CL7676554</td>
                         <td>$6756556</td>
                         <td>INV 66765</td>
                          <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Order</a></td>
                       </tr>

                        <tr>
                         <td>INV 67766575</td>
                         <td>12-12-2019</td>
                         <td style="font-weight: bold;color:#333">Practo Stores</td>
                         <td style="font-weight: bold;color:#333">Coco Cola</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                         <td>Credit Line <br/> <b>Credit Line id : </b> CL332554</td>
                         <td>$6756556</td>
                         <td>INV 66765</td>
                          <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Order</a></td>
                       </tr>

                        <tr>
                         <td>INV 56454.</td>
                         <td>14-11-2019</td>
                         <td style="font-weight: bold;color:#333">Tractop Stores</td>
                         <td style="font-weight: bold;color:#333">Reb Bulls</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td><label class="badge" style="background-color: #8bc34a;color:#fff;padding: 5px;">Responded</label></td>
                         <td>Credit Line <br/> <b>Credit Line id : </b> CL456754</td>
                         <td>$6756556</td>
                         <td>INV 66765</td>
                          <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Order</a></td>
                       </tr>

                        <tr>
                         <td>INV 13434.</td>
                         <td>23-10-2020</td>
                         <td style="font-weight: bold;color:#333">Domanica Stores</td>
                         <td style="font-weight: bold;color:#333">Key Eye</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td><label class="badge" style="background-color: #e91e63;color:#fff;padding: 5px;">Rejected</label></td>
                         <td>Credit Line <br/> <b>Credit Line id : </b> CL7886784554</td>
                         <td>$334556</td>
                         <td>INV 33765</td>
                          <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Order</a></td>
                       </tr>


                        <tr>
                         <td>INV 4e545454.</td>
                         <td>14-08-2019</td>
                         <td style="font-weight: bold;color:#333">Busy Centrals</td>
                         <td style="font-weight: bold;color:#333">Shamrocks Greens</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td><label class="badge" style="background-color: #8bc34a;color:#fff;padding: 5px;">Responded</label></td>
                         <td>Credit Line <br/> <b>Credit Line id : </b> CL3234554</td>
                         <td>$6756556</td>
                         <td>INV 66765</td>
                          <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Order</a></td>
                       </tr>

                        <tr>
                         <td>INV 54545.</td>
                         <td>19-08-2020</td>
                         <td style="font-weight: bold;color:#333">Wallmarts</td>
                         <td style="font-weight: bold;color:#333">Slarwarty </td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td><label class="badge" style="background-color: #e91e63;color:#fff;padding: 5px;">Rejected</label></td>
                         <td>Credit Line <br/> <b>Credit Line id : </b> CL432554</td>
                         <td>$45556</td>
                         <td>INV 78965</td>
                          <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Order</a></td>
                       </tr>

                        <tr>
                         <td>INV 6565.</td>
                         <td>16-11-2019</td>
                         <td style="font-weight: bold;color:#333">Gulp Stopers</td>
                         <td style="font-weight: bold;color:#333">Freto Lays</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td><label class="badge" style="background-color: #8bc34a;color:#fff;padding: 5px;">Responded</label></td>
                         <td>Credit Line <br/> <b>Credit Line id : </b> CL54544554</td>
                         <td>$9797556</td>
                         <td>INV 465</td>
                          <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Order</a></td>
                       </tr>

                        <tr>
                         <td>INV 4456565.</td>
                         <td>14-11-2019</td>
                         <td style="font-weight: bold;color:#333">Ketan International</td>
                         <td style="font-weight: bold;color:#333">Adidas</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                         <td>Credit Line <br/> <b>Credit Line id : </b> CL35554</td>
                         <td>$3256</td>
                         <td>INV 13445</td>
                          <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Order</a></td>
                       </tr>

                        <tr>
                         <td>INV 68768787.</td>
                         <td>12-11-2019</td>
                         <td style="font-weight: bold;color:#333">Domanica  International</td>
                         <td style="font-weight: bold;color:#333">Gold More</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td><label class="badge" style="background-color: #8bc34a;color:#fff;padding: 5px;">Responded</label></td>
                         <td>Credit Line <br/> <b>Credit Line id : </b> CL454554</td>
                         <td>$467656</td>
                         <td>INV 6535</td>
                          <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Order</a></td>
                       </tr>

                        <tr>
                         <td>INV 2323232.</td>
                         <td>14-01-2019</td>
                         <td style="font-weight: bold;color:#333">LipBip International</td>
                         <td style="font-weight: bold;color:#333">Nike</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td><label class="badge" style="background-color: #e91e63;color:#fff;padding: 5px;">Rejected</label></td>
                         <td>Credit Line <br/> <b>Credit Line id : </b> CL454554</td>
                         <td>$21356</td>
                         <td>INV 765</td>
                          <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Order</a></td>
                       </tr>

                    </tbody>
                   </table>

                   <div style="padding: 10px;"></div>

                  
                </div>
              </div>
            </div><!-- // .col-sm-6 -->

            
          </div>


          <?php include 'footer.php'; ?>
        </div>
      </div>

      <!-- Main JavaScript -->
      <script src="js/neat.minc619.js?v=1.0"></script>

     
    </body>
  </html>