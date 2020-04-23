<?php require_once('Lib/header.php');?>
    <title>All Staffs</title>


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

<?php require_once('Lib/footer.php');?>
