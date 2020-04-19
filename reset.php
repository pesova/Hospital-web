<h3>Forgot Password</h3>
   <p>Reset Password associated with your account</p>

   <form action="processReset.php" method="POST">
   <p>
        
    </p>

    <input type= "hidden" name = "token" value = "<?php echo $_GET['token'] ?>"/>
   <p>
        <label>Email</label><br />
        <input readonly value="[Email]"  type="text" name="Email" placeholder="Email"  />
    </p>
    <p>
       
    </p>

    <label><b>Password</b></label>
            <input type="Password" name="Password" value="" placeholder="Enter Password">
            <br>
            
            <button type="submit">Reset Password</button>


    <?php
        //error handlers
        if(!isset($_GET['forgot'])){
            exit();
        }
        else{
            $signupcheck = $_GET['forgot'];

            if($signupcheck == "empty"){
                echo "<p class='error'>Empty field</p>";
                exit();
            }
            elseif($signupcheck == "codeerror"){
                echo "<p class='error'>code error</p>";
                exit();
            }
            elseif($signupcheck == "Emailerror"){
                echo "<p class='error'>Fill in valid email</p>";
                exit();
            }
            elseif($signupcheck == "Negative"){
                echo "<p class='error'>Email not in database</p>";
                exit();
            }
            
        }

        ?>
   </form>
    
