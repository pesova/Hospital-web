<?php require_once('functions/alert.php');?>
<?php require_once('Lib/header.php');?>

      <title>patient</title>


  <body>
    <div class="patient">

      <br>

    <h3 class="nav-item">Dashboard</h3>

    <?php

    echo "<h1><p>This page is for Patient</p></h1>"
    ?>
    <br>
    <div class="patient">

    <?php session_start();?>



    <B>Welcome, <?php echo $_SESSION['fullname'] ?>, You are logged in as (<?php echo $_SESSION['role'] ?>), and your ID is <?php echo $_SESSION['loggedIn'] ?></b>

    <?php (getdate());
    echo "<br><br>";

    $mydate = getdate(date("U"));
    ?>

    <pre>Logedd in Time:  <?php echo  $_SESSION['Time']?></pre>

    <pre>Logged in date: <?php echo  $_SESSION['Date']?></pre>

    <br>

    <div class="Action">
        <a href="index.php">Home</a>

        <a href="BookAppointment.php">Book Appointment</a>

        <a href="Paybills.php">Paybills</a>
      </div>

    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
<?php Appointment(); ?>
    </div>

<?php require_once('Lib/footer.php');?>
