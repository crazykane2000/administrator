<?php session_start();
    include 'administrator/connection.php';
    include 'administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt); 
?>
<!doctype html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>View All Administrator Back Office | Bingo</title>
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
              <h4>View all Administrator Back Office</h4>
              <p class="u-mb-small">Administrator Sections</p>
              <div class="">
               
                
                <div class="c-card" style="min-height:800px">
                   <h4>Administrator Back Office</h4>
                   <hr style="margin: 10px 0px;opacity: .2" />
                   <table class="tabler">
                     <thead>
                       <th>S.No.</th>
                       <th>User Name</th>
                       <th>Admin Type</th>
                       <th>Password</th>
                       <th>Status</th>
                       <th>Country</th>
                       <th>Date Registered</th>
                     </thead>

                     <tbody>

                      <?php 
                        $i=1;
                        try {
                              $stmt = $pdo->prepare('SELECT * FROM `admin_backoffice` ORDER BY date DESC');
                                  //echo 'SELECT * FROM franchisie_details WHERE email = :user';
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll();

                              foreach ($user as $key => $value) {
                                $hata = '<label class="badge" style="background-color: orange;color:#fff;padding: 5px;">Pending</label>';
                                if ($value['status']=="Approved") {
                                  $hata = '<label class="badge" style="background-color: green;color:#fff;padding: 5px;">Approved</label>';
                                }
                                echo '<tr>
                                       <td>'.$i.'.</td>
                                       <td data-id="'.$value['id'].'" style="font-weight: bold;color:#333;cursor:pointer" class="tango" data-toggle="modal" data-target="#modal1"><b>'.$value['username'].'</b><br/>
                                        Tx : <span style="color:#888;font-size:12px;">'.$value['tx_address'].'</td>
                                       <td >'.$value['type'].'</td>
                                       <td><label class="badge" style="background-color: orange;color:#fff;padding: 5px;">'.$value['pass'].'</label></td>
                                       <td >'.$hata.'</td>
                                       <td>'.$value['country'].'</td>
                                       <td>'.$value['date'].'</td>
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

                <div class="c-modal modal fade " id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" >
                    <div class="c-modal__dialog modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="c-card u-p-medium u-mh-auto" style="max-width:500px;">
                                <h5>Admin Details Are : </h5>
                                <div style="padding: 4px;"></div>
                                <div><hr style="opacity: .4" /></div>
                                <div style="padding: 6px;"></div>
                                <div id="dosa"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
      </div>

      <!-- Main JavaScript -->
      <script src="js/neat.minc619.js?v=1.0"></script>
      <script type="text/javascript">
        $(document).on("click", ".tango", function () {
           var id = $(this).data('id');
           $("#dosa").load("load.php", {"id":id});
      });
      </script>

     
    </body>
  </html>