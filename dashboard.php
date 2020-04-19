<h3>Dashboard</h3>

<?php session_start();?>

<?php (getdate());
echo "<br><br>";

$mydate = getdate(date("U"));

echo "$mydate[hours]:$mydate[minutes] $mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";?>

Welcome, <?php echo $_SESSION['fullname'] ?>, You are logged in as (<?php echo $_SESSION['role'] ?>), and your ID is <?php echo $_SESSION['loggedIn'] ?>.

