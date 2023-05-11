<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood-Bank-And-Donation-Management-System</title>
  <link rel="stylesheet" href="css/utility.css">
  <link rel="stylesheet" href="css/head.css">
  <link rel="stylesheet" href="css/ticker.css">
  <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <?php 
  $active ='need';
  include('head.php') ?>

  <div id="page-container"">
    <div class="container">
      <div id="content-wrap" style="padding-bottom:50px;">
       <h1 class="mt-4 mb-3">Need Blood</h1>
      </div>
      <form name="needblood" action="" method="post">
        <div class="font-italic">Blood Group
          <span style="color:red">*</span>
        </div>

        <select name="blood" class="form-control" required>
        <option value=""selected disabled>Select</option>
          <?php
            include 'conn.php';
            $sql= "select * from blood";
            $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
          while($row=mysqli_fetch_assoc($result)){
          ?>
          <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
          <?php } ?>
        </select>

        <div class="font-italic">Reason, why do you need blood?
          <span style="color:red">*</span>
        </div>

        <textarea class="form-control" name="address" required></textarea>
          
        <div class="row">
          <div class="col-lg-4 mb-4">
            <input type="submit" name="search" class="btn btn-primary" value="Search" style="cursor:pointer">
          </div>
        </div>

          <div class="row">
            <?php if(isset($_POST['search'])){
            $bg=$_POST['blood'];
            $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id AND donor_blood='{$bg}' order by rand() limit 5";
            $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
              if(mysqli_num_rows($result)>0)   {
              while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-lg-4 portfolio-item" ><br>
                  <div class="card" style="width:300px">
                    <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image" style="width:100%;height:300px">
                    <div class="card-body">
                      <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
                      <p class="card-text">
                        <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
                        <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
                        <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
                        <b>Age : </b> <?php echo $row['donor_age']; ?><br>
                        <b>Address : </b> <?php echo $row['donor_address']; ?><br>
                      </p>
                    </div>
                  </div>
                </div>
            <?php
              }
            }else
              {
                echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';
              }
          }?>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>
</div>
</body>

</html>
