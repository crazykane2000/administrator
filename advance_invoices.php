  <!doctype html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>View All Advance Invoices | Bingo</title>
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
              <h4>View all Advance Invoices</h4>
              <p class="u-mb-small">Administrator Sections</p>
              <div class="">
               
                
                <div class="c-card">
                   <h4>Advance Invoices</h4>
                   <hr style="margin: 10px 0px;opacity: .2" />
                   <table class="tabler">
                     <thead>
                       <th>Adv ID</th>
                       <th>Adv Date</th>
                       <th>FIE</th>
                       <th>Total Sales</th>
                       <th>TT Fees</th>
                       <th>TT Interests</th>
                       <th>TT Credited Amount</th>
                       <th>Status</th>
                       <th>UnSettled Sales </th>
                     </thead>

                     <tbody>
                       <tr>
                         <td>ADV 7887666.</td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td>Banco Unión</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td style="font-weight:bold;color:#2083fe">USD 589.55</td>
                         <td><?php echo rand(1,6)." %"; ?></td>
                          <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                          <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                           <td><?php echo rand(20,78); ?></td>
                       </tr>

                        <tr>
                         <td>INV 67766575</td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td>ICICI Bank India  </td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td style="font-weight:bold;color:#2083fe">USD 589.55</td>
                         <td><?php echo rand(1,6)." %"; ?></td>
                          <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                          <td><label class="badge" style="background-color: #8bc34a;color:#fff;padding: 5px;">Advanced</label></td>
                           <td><?php echo rand(20,78); ?></td>
                       </tr>

                        <tr>
                         <td>INV 56454.</td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td>Scotiabank República Dominicana  </td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td style="font-weight:bold;color:#2083fe">USD 90.55</td>
                         <td><?php echo rand(1,6)." %"; ?></td>
                          <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                          <td><label class="badge" style="background-color: green;color:#fff;padding: 5px;">Advanced</label></td>
                          <td><?php echo rand(20,78); ?></td>
                       </tr>

                        <tr>
                         <td>INV 13434.</td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td>Banco Vimenca   </td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                         <td><?php echo rand(1,6)." %"; ?></td>
                          <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                          <td><label class="badge" style="background-color: green;color:#fff;padding: 5px;">Advanced</label></td>
                          <td><?php echo rand(20,78); ?></td>
                       </tr>


                        <tr>
                         <td>INV 4e545454.</td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td>Banco BDI </td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td style="font-weight:bold;color:#2083fe">USD 90.55</td>
                         <td><?php echo rand(1,6)." %"; ?></td>
                          <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                          <td><label class="badge" style="background-color: #8bc34a;color:#fff;padding: 5px;">Advanced</label></td>
                           <td><?php echo rand(20,78); ?></td>
                       </tr>

                        <tr>
                         <td>INV 54545.</td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td>Banco Dominicano del Progreso    </td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                         <td><?php echo rand(1,6)." %"; ?></td>
                          <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                          <td><label class="badge" style="background-color: #8bc34a;color:#fff;padding: 5px;">Advanced</label></td>
                           <td><?php echo rand(20,78); ?></td>
                       </tr>

                        <tr>
                         <td>INV 6565.</td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td>Banco BHD Leon</td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td style="font-weight:bold;color:#2083fe">USD 90.55</td>
                         <td><?php echo rand(1,6)." %"; ?></td>
                          <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                          <td><label class="badge" style="background-color: green;color:#fff;padding: 5px;">Advanced</label></td>
                          <td><?php echo rand(20,78); ?></td>
                       </tr>

                        <tr>
                         <td>INV 4456565.</td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td>Banco Dominicano del Progreso    </td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td style="font-weight:bold;color:#2083fe">USD 589.55</td>
                         <td><?php echo rand(1,6)." %"; ?></td>
                          <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                          <td><label class="badge" style="background-color: #8bc34a;color:#fff;padding: 5px;">Advanced</label></td>
                           <td><?php echo rand(20,78); ?></td>
                       </tr>

                        <tr>
                         <td>INV 68768787.</td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td>Scotiabank República Dominicana  </td>
                        <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td style="font-weight:bold;color:#2083fe">USD 90.55</td>
                         <td><?php echo rand(1,6)." %"; ?></td>
                          <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                          <td><label class="badge" style="background-color: green;color:#fff;padding: 5px;">Advanced</label></td>
                          <td><?php echo rand(20,78); ?></td>
                       </tr>

                        <tr>
                         <td>INV 2323232.</td>
                         <td><?php $int= mt_rand(1576108800,1580124696);$string = date("Y-m-d",$int); echo $string; ?></td>
                         <td>Banco Dominicano del Progreso   </td>
                         <td style="font-weight:bold;color:#2083fe">USD 566.55</td>
                         <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                         <td><?php echo rand(1,6)." %"; ?></td>
                          <td style="font-weight:bold;color:#2083fe">USD 866.55</td>
                          <td><label class="badge" style="background-color: green;color:#fff;padding: 5px;">Advanced</label></td>
                          <td><?php echo rand(20,78); ?></td>
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