  <!doctype html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>View All Invoices | Bingo</title>
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
              <h4>View all Ventas (ES), Sales (EN), </h4>
              <p class="u-mb-small">Administrator Sections</p>
              <div class="">
               
                
                <div class="c-card">
                   <h4>Ventas (ES), Sales (EN), </h4>
                   <hr style="margin: 10px 0px;opacity: .2" />
                   <table class="tabler" style="color: #333;">
                     <thead>
                       <th>Sale Id</th>
                       <th>Wholesaler Invoice No. </th>
                       <th>Sale Date</th>
                       <th>From</th>
                       <th>To</th>
                       <th>FIE</th>
                       <th>Due Date</th>
                       <th>Status</th>
                       <th>Amount</th>
                       <th>Balance</th>
                       <th>Total Owe (including interest + late fees)</th>
                       <th>Details</th>
                     </thead>

                     <tbody>
                       <tr>
                         <td>SID <?php echo rand(80,300); ?></td>
                         <td>INV <?php echo rand(80,300); ?></td>
                         <td style="font-weight: bold;color:#333"><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td style="font-weight:bold;color:#2083fe">Ellissi Stores</td>
                         <td style="font-weight:bold;color:#2083fe">Pepsico International</td>
                         <td style="font-weight:bold;">Scotiabank República Dominicana  </td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                          <td>USD <?php echo rand(8000,300000); ?></td>
                          <td>USD <?php echo rand(8000,200000); ?></td>
                          <td>USD <?php echo rand(8000,10000); ?></td>
                           <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Details</a></td>
                       </tr>

                        <tr>
                         <td>SID <?php echo rand(80,300); ?></td>
                         <td>INV <?php echo rand(80,300); ?></td>
                         <td style="font-weight: bold;color:#333"><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td style="font-weight:bold;color:#2083fe">Practo Stores</td>
                         <td style="font-weight:bold;color:#2083fe">Redbull International</td>
                         <td style="font-weight:bold;">Scotiabank República Dominicana  </td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                          <td>USD <?php echo rand(8000,300000); ?></td>
                          <td>USD <?php echo rand(8000,200000); ?></td>
                          <td>USD <?php echo rand(8000,10000); ?></td>
                           <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Details</a></td>
                       </tr>

                        <tr>
                         <td>SID <?php echo rand(80,300); ?></td>
                         <td>INV <?php echo rand(80,300); ?></td>
                         <td style="font-weight: bold;color:#333"><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td style="font-weight:bold;color:#2083fe">Keshav Stores</td>
                         <td style="font-weight:bold;color:#2083fe">Polo International</td>
                         <td style="font-weight:bold;">Scotiabank República Dominicana  </td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                          <td>USD <?php echo rand(8000,300000); ?></td>
                          <td>USD <?php echo rand(8000,200000); ?></td>
                          <td>USD <?php echo rand(8000,10000); ?></td>
                           <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Details</a></td>
                       </tr>

                        <tr>
                         <td>SID <?php echo rand(80,300); ?></td>
                         <td>INV <?php echo rand(80,300); ?></td>
                         <td style="font-weight: bold;color:#333"><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td style="font-weight:bold;color:#2083fe">Monixa Stores</td>
                         <td style="font-weight:bold;color:#2083fe">Subway International</td>
                         <td style="font-weight:bold;">Scotiabank República Dominicana  </td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                          <td>USD <?php echo rand(8000,300000); ?></td>
                          <td>USD <?php echo rand(8000,200000); ?></td>
                          <td>USD <?php echo rand(8000,10000); ?></td>
                           <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Details</a></td>
                       </tr>

                        <tr>
                         <td>SID <?php echo rand(80,300); ?></td>
                         <td>INV <?php echo rand(80,300); ?></td>
                         <td style="font-weight: bold;color:#333"><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td style="font-weight:bold;color:#2083fe">Ellissi Stores</td>
                         <td style="font-weight:bold;color:#2083fe">Delta Worriors</td>
                         <td style="font-weight:bold;">Scotiabank República Dominicana  </td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                          <td>USD <?php echo rand(8000,300000); ?></td>
                          <td>USD <?php echo rand(8000,200000); ?></td>
                          <td>USD <?php echo rand(8000,10000); ?></td>
                           <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Details</a></td>
                       </tr>

                        <tr>
                         <td>SID <?php echo rand(80,300); ?></td>
                         <td>INV <?php echo rand(80,300); ?></td>
                         <td style="font-weight: bold;color:#333"><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td style="font-weight:bold;color:#2083fe">Ellissi Stores</td>
                         <td style="font-weight:bold;color:#2083fe">Pepsico International</td>
                         <td style="font-weight:bold;">Scotiabank República Dominicana  </td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                          <td>USD <?php echo rand(8000,300000); ?></td>
                          <td>USD <?php echo rand(8000,200000); ?></td>
                          <td>USD <?php echo rand(8000,10000); ?></td>
                           <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Details</a></td>
                       </tr>

                        <tr>
                         <td>SID <?php echo rand(80,300); ?></td>
                         <td>INV <?php echo rand(80,300); ?></td>
                         <td style="font-weight: bold;color:#333"><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td style="font-weight:bold;color:#2083fe">Ellissi Stores</td>
                         <td style="font-weight:bold;color:#2083fe">Pepsico International</td>
                         <td style="font-weight:bold;">Scotiabank República Dominicana  </td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                          <td>USD <?php echo rand(8000,300000); ?></td>
                          <td>USD <?php echo rand(8000,200000); ?></td>
                          <td>USD <?php echo rand(8000,10000); ?></td>
                           <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Details</a></td>
                       </tr>

                        <tr>
                         <td>SID <?php echo rand(80,300); ?></td>
                         <td>INV <?php echo rand(80,300); ?></td>
                         <td style="font-weight: bold;color:#333"><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td style="font-weight:bold;color:#2083fe">Ellissi Stores</td>
                         <td style="font-weight:bold;color:#2083fe">Pepsico International</td>
                         <td style="font-weight:bold;">Scotiabank República Dominicana  </td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                          <td>USD <?php echo rand(8000,300000); ?></td>
                          <td>USD <?php echo rand(8000,200000); ?></td>
                          <td>USD <?php echo rand(8000,10000); ?></td>
                           <td><a href="view_order.php" class="c-btn c-btn--info c-btn--small">View Details</a></td>
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