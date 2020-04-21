<?php require_once('functions/alert.php');?>

<?php
if (!isset($_GET['token'])) {
    # they didnt get the token
    header("location: forgot.php?forgot=NoToken");
            exit();
}
?>

<h3>Forgot Password</h3>
   <p>Reset Password associated with your account</p>

   <form action="processReset.php" method="POST">
   <p>
        
    </p>

    <input type= "hidden" name = "token" value = "<?php echo $_GET['token'] ?>"/>
   <p>
        <label>Email</label><br />
        <input  type="text" name="Email" placeholder="Email"  />
    </p>
    <p>
       
    </p>

    <label><b>New Password</b></label>
            <input type="Password" name="Password" value="" placeholder="Enter Password">
            <br>
            
            <button type="submit">Reset Password</button>


           <?php ResetAlert(); //error Handler?>

   </form>
    
