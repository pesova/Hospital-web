<?php session_start();

$token = $_POST['token'];
$Email  = $_POST['Email'];
$Password  = $_POST['Password'];

//$_SESSION['token'] = $token;
//$_SESSION['Email'] = $Email;

$allUsersToken = scandir("db/tokens/"); 

$countAllUsersToken = count($allUsersToken);

for ($counter = 0; $counter < $countAllUsersToken ; $counter++) { 
    $currentTokenFile = $allUsersToken[$counter];

    if ($currentTokenFile == $Email . ".json") {
        // checking if the tokens are the same
        $tokenContents = file_get_contents("db/tokens/".$currentTokenFile);
        $TokenObject = json_decode($tokenContents);
        $TokenFromDB = $TokenObject->token;
        
        if ($TokenFromDB == $token) {
            # do the password update            
                
            
                $allUsers = scandir("db/users/"); //checking the user doing the password reset
                $countAllUsers = count($allUsers);
            
                for ($counter = 0; $counter < $countAllUsers ; $counter++) {
                   
                    $currentUser = $allUsers[$counter];
            
                    if($currentUser == $Email . ".json"){
                      //check the user password.
                        $userString = file_get_contents("db/users/".$currentUser);
                        $userObject = json_decode($userString);

      //check the user Password.
        $userObject->Password = ; 

        
    
        }

    }
    header("location: forgot.php?forgot=ResetFail");