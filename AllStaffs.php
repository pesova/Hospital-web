<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Staffs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
  </head>
          <body>

                <h2>  All Staffs</h2>



          <?php

             $allUsers = scandir("db/users/");
             $countAllUsers = count($allUsers);



             for ($counter = 2; $counter < $countAllUsers ; $counter++) {

                   $currentUser = $allUsers[$counter];

                     $userString = file_get_contents("db/users/".$currentUser);
                     $userObject = json_decode($userString);


                     if ($userObject->designation == 'Medical Team (MT)') {
                       // show patients only
                         $id = $userObject->id;
                         $first_name = $userObject->first_name;
                         $last_name = $userObject->last_name;
                         $email = $userObject->Email;
                         $gender = $userObject->gender;
                         $designation = $userObject->designation;
                         $department = $userObject->department;

                         echo "ID: $id <br />";
                         echo "FirstName: $first_name <br />";
                         echo "LastName: $last_name <br />";
                         echo "Email: $email <br />";
                         echo "Gender: $gender <br />";
                         echo "Designation: $designation <br />";
                         echo "Department: $department <br />";

                         echo "<hr>";

                     } else {
                       // not patients
                       echo " ";
                     }


             }


         ?>
         <a href="superAdmin.php">Dashboard</a>

      </body>
  </html>
