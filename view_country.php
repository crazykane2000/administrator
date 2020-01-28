 <?php session_start();
    include 'administrator/connection.php';
    include 'administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt); 
?> <!doctype html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>View Country | Bingo</title>
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
              <h4>View Country</h4>
              <p class="u-mb-small">Administrator Section</p>
              <div class="">
               <div class="c-card" style="min-height:800px">
                   <h4>View Available Countries</h4>
                   <hr style="margin: 10px 0px;opacity: .2" />
                   <table class="tabler">
                     <thead>
                       <th>S.No.</th>
                       <th>Country</th>
                       <th>Status</th>
                       <th>Date</th>
                       <th>Action</th>
                     </thead>

                     <tbody>

                      <?php 
                        $i=1;
                        try {
                              $stmt = $pdo->prepare('SELECT * FROM `country` ORDER BY date DESC');
                                  //echo 'SELECT * FROM franchisie_details WHERE email = :user';
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll();

                              foreach ($user as $key => $value) {
                                $btns = '<a href="approve_country.php?id='.$value['id'].'" class="c-btn c-btn--small c-btn--success ">Enable</a>';
                                $ratay = '<label class="badge" style="background-color: red;color:#fff;padding: 5px;">Disabled</label>';
                                if ($value['status']!="Pending") {
                                  $ratay = '<label class="badge" style="background-color: green;color:#fff;padding: 5px;">Enabled</label>';
                                  $btns = '<a href="unapprove_country.php?id='.$value['id'].'" class="c-btn c-btn--small c-btn--danger ">Disable</a>';
                                }
                               
                               echo '<tr>
                                       <td>'.$i.'.</td>
                                      <td >'.$value['country'].'</td>
                                       <td>'.$ratay.'</td>
                                       <td>'.$value['date'].'</td>
                                       <td>'.$btns.'</td>
                                     </tr>';
                                     $i++;
                              }
                       ?>                      
                     </tbody>
                   </table>
                   <div style="padding: 10px;"></div>
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