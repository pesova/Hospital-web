<?php
//error Handlers Function
if(!isset($_GET['Login'])){
    exit();
}
else{
    $signIncheck = $_GET['Login'];

    if($signIncheck == "passwordResetSuccess"){
        echo "<p class='success'>Password Reset Successful, you can now Login</p>";
        exit();
    }
    elseif($signIncheck == "wrongpass"){
        echo "<p class='error'>Wrong Email or Password</p>";
        exit();
    }
    elseif($signIncheck == "user_not_set"){
        echo "<p class='error'>Empty Fields</p>";
        exit();
    }
    elseif($signIncheck == "wrongUser"){
        echo "<p class='error'>User Not in Database</p>";
        exit();
    }
}