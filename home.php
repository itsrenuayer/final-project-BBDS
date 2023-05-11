<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood-Bank-And-Donation-Management-System</title>
  <link rel="stylesheet" href="css/utility.css">
  <link rel="stylesheet" href="css/head.css">
  <link rel="stylesheet" href="css/ticker.css">
  <link rel="stylesheet" href="css/home.css">
<style>
</style>
</head>

<body>
<div class="page-header">
<?php
$active = "home";
include "head.php";
?>
</div>
<?php include "ticker.php"; ?>

  <!-- <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
    <div id="content-wrap"style="padding-bottom:75px;">
  <div id="demo" class="carousel slide" data-ride="carousel"> -->
    <!-- The slideshow -->
    <div class="carousel-inner">

      <div class="carousel-item">
        <img src="image\Blood-facts_10-illustration-graphics__canteen.png" alt="image\Blood-facts_10-illustration-graphics__canteen.png" width="100%" height="500">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <div class="section-one">
    <h2 class='section-one-title'>Welcome to BloodBank & Donor Management System</h2>
  <div class="container">
    <div class="row">
            <div class="col-4 mb-4">
              <div class="card">
                <h4 class="card-header" >The need for blood</h4>
                        <p class="card-body">
                          <?php
                          include "conn.php";
                          $sql = $sql =
                              "select * from pages where page_type='needforblood'";
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                  echo $row["page_data"];
                              }
                          }
                          ?>
                         </p>
                        </div>
                      </div>
            <div class="col-4 mb-4">
                <div class="card">
                  <h4 class="card-header">Blood Tips</h4>
                  
                  <p class="card-body">
                    <?php
                    include "conn.php";
                    $sql = $sql =
                        "select * from pages where page_type='bloodtips'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row["page_data"];
                        }
                    }
                    ?>
                     </p>
                     
                    </div>
                  </div>
                  <div class="col-4 mb-4">
                    <div class="card">
                      <h4 class="card-header" >Who you could Help</h4>
                      
                      <p class="card-body">
                        <?php
                        include "conn.php";
                        $sql = $sql =
                            "select * from pages where page_type='whoyouhelp'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row["page_data"];
                            }
                        }
                        ?>
                      </p>
             </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-two">
      <h2 class='section-two-title'>Blood Donor Names</h2>
      <div class="container">

        <div class="row">
          <?php
          include "conn.php";
          $sql =
          "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-3 portfolio-item" >
            <div class="card">
              <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image" style="width:100%;height:300px">
              <div class="card-body">
                <h3 class="card-title"><?php echo $row["donor_name"]; ?></h3>
                <p class="card-text">
                  <b>Blood Group : </b> <b><?php echo $row[
                    "blood_group"
                  ]; ?></b><br>
                    <b>Mobile No : </b> <?php echo $row["donor_number"]; ?><br>
                    <b>Gender : </b><?php echo $row["donor_gender"]; ?><br>
                    <b>Age : </b> <?php echo $row["donor_age"]; ?><br>
                    <b>Address : </b> <?php echo $row["donor_address"]; ?><br>
                  </p>
                  
                </div>
              </div>
            </div>
            <?php }
          }
          ?>
</div>
</div>
</div>



<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h2>BLOOD GROUPS</h2>
      <p>
        <?php
                  include "conn.php";
                  $sql = $sql =
                  "select * from pages where page_type='bloodgroups'";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                          echo $row["page_data"];
                        }
                      }
                      ?></p>

            </div>
            <div class="col-lg-6">
              <img class="blood-group-img rounded" src="image\blood_donationcover.jpeg" alt="" >
            </div>
          </div>
          <!-- /.row -->
          
          <hr>
          
          <!-- Call to Action Section -->
          <div class="row mb-4">
            <div class="col-8">
              <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
              <p>
                <?php
              include "conn.php";
              $sql = $sql = "select * from pages where page_type='universal'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["page_data"];
                }
              }
              ?></p>
              </div>
            <div class="col-4 donor-btn">
                <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php">Become a Donor </a>
              </div>
            </div>
            
          </div>
        </div>
      </div>        <!-- Features Section -->


  <?php include "footer.php"; ?>
</div>

</body>

</html>
