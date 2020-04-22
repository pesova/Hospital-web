<?php session_start();


$FullName = $_POST['Name'];
$Email  = $_POST['Email'];
$Date  = $_POST['date'];
$Time  = $_POST['Time'];
$Nature  = $_POST['Nature'];
$Complaint  = $_POST['Complaint'];
$Department  = $_POST['Department'];



if(isset($_POST['submit'])){


                    $allUsers = scandir("db/users/"); //return @array (2 filled)
                    $countAllUsers = count($allUsers);
                    $newUserId = ($countAllUsers-1);

                    $userObject = [
                        'id'=>$newUserId,
                        'first_name'=>$FirstName,
                        'last_name'=>$LastName,
                        'Email'=>$Email,
                        'Password'=> password_hash($Password, PASSWORD_DEFAULT), //password hashing
                        'gender'=>$Gender,
                        'designation'=>$designation,
                        'department'=>$Department
                    ];

                        file_put_contents("db/users/". $userObject['Email'] . ".json", json_encode($userObject));

                        header("location: SignIn.php?success");

                }
            }
        }
    }

        // user didnt click submit
            else{
            header("location: Register.php?signup=ClickRegister");
            exit();
        }
