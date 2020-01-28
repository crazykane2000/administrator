 <?php session_start();
    include 'administrator/connection.php';
    include 'administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt); 
?> <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sattlement  | Bingo</title>
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
          <div class="col-lg-7 col-md-12 ">
            <h4>Sattlement  Statistics</h4>
            <p class="u-mb-small">Administrator Sections</p>
            <div class="">
             
              
              <div class="c-card">
                 <h4>Retaillers</h4>
                 <hr style="margin: 10px 0px;opacity: .2" />
                 <table class="tabler">
                   <thead>
                     <th>S.No.</th>
                     <th>Store Name</th>
                     <th>IRN No.</th>
                     <th>KYC Documents</th>
                     <th>Operation</th>
                   </thead>

                   <tbody>
                     <tr>
                       <td>1.</td>
                       <td style="font-weight: bold;"  >Assochain Stores</td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><button class="c-btn c-btn--success c-btn--small" data-toggle="modal" data-target="#modal1">Configure %</button></td>
                     </tr>

                     <tr>
                       <td>2.</td>
                       <td  style="font-weight: bold;">Stress Montaronic</td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><button class="c-btn c-btn--success c-btn--small" data-toggle="modal" data-target="#modal1">Configure %</button></td>
                     </tr>

                     <tr>
                       <td>3.</td>
                       <td  style="font-weight: bold;">Rajendra Galla</td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><button class="c-btn c-btn--success c-btn--small" data-toggle="modal" data-target="#modal1">Configure %</button></td>
                     </tr>

                     <tr>
                       <td>4.</td>
                       <td  style="font-weight: bold;">Super Bazar </td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><button class="c-btn c-btn--success c-btn--small" data-toggle="modal" data-target="#modal1">Configure %</button></td>
                     </tr>

                     <tr>
                       <td>5.</td>
                       <td  style="font-weight: bold;">Wallmart</td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><button class="c-btn c-btn--success c-btn--small" data-toggle="modal" data-target="#modal1">Configure %</button></td>
                     </tr>

                     <tr>
                       <td>6.</td>
                       <td  style="font-weight: bold;">Vishal Mega Mart</td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><button class="c-btn c-btn--success c-btn--small" data-toggle="modal" data-target="#modal1">Configure %</button></td>
                     </tr>
                   </tbody>
                 </table>

                 <div style="padding: 10px;"></div>

                 <a href="view_all_retaillers.php">Show All</a>
              </div>

              <div class="c-card">
                <div class="row">
                  <div class="col-lg-8">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <div id="chart_div"></div>
                  </div>
                  <div class="col-lg-4">
                    <div style="padding: 30px"></div>
                    <a href="admin.php">
                      <button class="c-btn c-btn--success u-mb-xsmall" style="width:100%">Add FIE</button>
                      <button class="c-btn c-btn--info u-mb-xsmall" style="width:100%">Add Wholesaler</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- // .col-sm-6 -->

          <div class="c-modal modal fade show" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1">
                    <div class="c-modal__dialog modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="c-card u-p-medium u-mh-auto" style="max-width:500px;">
                                <h3>Set Percentage Here</h3>
                                <hr style="margin:10px 0px;opacity: .3">
                                <div class="c-field">
                                  <label class="c-field__label" for="input1">Set Percentage Here</label>
                                  <input class="c-input" type="text" id="input1" placeholder="Set Percentage Here">
                                </div>
                                <div style="padding: 10px;"></div>

                                <div class="c-field">                                  
                                  <button class="c-btn" style="width: 100%">Configure The Percentage Now</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

          <div class="col-lg-5 col-md-12">
            <div style="padding: 32px;"></div>
             <div class="c-card">
                 <h4>Wholesaler</h4>
                 <hr style="margin: 10px 0px;opacity: .2" />
                 <table class="tabler">
                     <thead>
                       <th>S.No.</th>
                       <th>Wholesaler Name</th>
                       <th>Status</th>
                       <th>Country</th>
                       <th>Operation</th>
                     </thead>

                     <tbody>

                      <?php 
                        $i=1;
                        try {
                              $stmt = $pdo->prepare('SELECT * FROM `business_partners` WHERE `partner_type`="Wholesaler" ORDER BY creation_date DESC LIMIT 10');
                                  //echo 'SELECT * FROM franchisie_details WHERE email = :user';
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll();

                              foreach ($user as $key => $value) {
                                $ratay = '<label class="badge" style="background-color: #03a9f4;color:#fff;padding: 5px;">Wholesaler</label>';
                                if ($value['partner_type']!="Wholesaler") {
                                  $ratay = '<label class="badge" style="background-color: green;color:#fff;padding: 5px;">FIE Bank</label>';
                                }
                                $rand1 = rand(100000,900000);
                                $rand2 = rand(100000,700000);
                               // print_r($value);
                                echo '<tr>
                                       <td>'.$i.'.</td>
                                       <td style="font-weight: bold;color:#333"><b>'.$value['name'].'</b><br/><span style="color:green">'.$value['business_type'].'</span></td>
                                       <td><label class="badge" style="background-color: orange;color:#fff;padding: 5px;">Pending</label></td>
                                       <td >'.$value['address'].'</td>
                                       <td><button class="c-btn c-btn--success c-btn--small" data-toggle="modal" data-target="#modal1">Configure %</button></td>
                                     </tr>';
                                     $i++;
                              }
                       ?>
                     </tbody>
                 </table>
                 <div style="padding: 10px;"></div>

                 <a href="view_all_wholesalers.php">Show All</a>

              </div>
          </div>
        </div>
         <?php include 'footer.php'; ?>

      </div>
    </div>

    <!-- Main JavaScript -->
    <script src="js/neat.minc619.js?v=1.0"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawBasic);

      function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('timeofday', 'Time of Day');
            data.addColumn('number', 'Motivation Level');

            data.addRows([
              [{v: [8, 0, 0], f: '8 am'}, 1],
              [{v: [9, 0, 0], f: '9 am'}, 2],
              [{v: [10, 0, 0], f:'10 am'}, 3],
              [{v: [11, 0, 0], f: '11 am'}, 4],
              [{v: [12, 0, 0], f: '12 pm'}, 5],
              [{v: [13, 0, 0], f: '1 pm'}, 6],
              [{v: [14, 0, 0], f: '2 pm'}, 7],
              [{v: [15, 0, 0], f: '3 pm'}, 8],
              [{v: [16, 0, 0], f: '4 pm'}, 9],
              [{v: [17, 0, 0], f: '5 pm'}, 10],
            ]);

            var options = {
              title: 'CL Frequency Per Month',
              hAxis: {
                title: 'Time of Day',
                format: 'h:mm a',
                viewWindow: {
                  min: [7, 30, 0],
                  max: [17, 30, 0]
                }
              },
              vAxis: {
                title: 'Rating (scale of 1-10)'
              }
            };

            var chart = new google.visualization.ColumnChart(
              document.getElementById('chart_div'));

            chart.draw(data, options);
          }
    </script>
   
  </body>
</html>