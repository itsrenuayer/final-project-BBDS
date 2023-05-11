<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
  
</body>
</html>


  <div class="header">
    <h1>
      <a href="home.php" class="logo"<?php if ($active == "home") {
          echo "class='logo2'";
      } ?> >BBMS </a>
    </h1>
    <div class="header-right">
      <a href="about_us.php"  <?php if ($active == "about") {
          echo "class='act'";
      } ?> >About Us</a>
      <a href="why_donate_blood.php"  <?php if ($active == "why") {
          echo "class='act'";
      } ?>>Why Donate Blood</a>
        <a href="donate_blood.php"  <?php if ($active == "donate") {
            echo "class='act'";
        } ?>>Become A Donor</a>
        <a href="need_blood.php" <?php if ($active == "need") {
            echo "class='act'";
        } ?>>Need Blood</a>
        <a href="contact_us.php" <?php if ($active == "contact") {
            echo "class='act'";
        } ?>>Contact Us</a>
    </div>
  </div>
