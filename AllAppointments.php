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

                <h2>  All Appointments</h2>



          <?php

             $allAppointments = scandir("db/Appointments/");
             $countAllAppointments = count($allAppointments);



             for ($counter = 2; $counter < $countAllAppointments ; $counter++) {

                   $currentAppointment = $allAppointments[$counter];

                     $AppointmentString = file_get_contents("db/Appointments/".$currentAppointment);
                     $AppointmentObject = json_decode($AppointmentString);


                     if ($AppointmentObject == true) {
                       // show patients only
                         $id = $AppointmentObject->id;
                         $Fullname = $AppointmentObject->FullName;
                         $email = $AppointmentObject->Email;
                         $Date = $AppointmentObject->Date;
                         $Time = $AppointmentObject->Time;
                         $Nature = $AppointmentObject->Nature;
                         $Complaint = $AppointmentObject->Complaint;
                         $department = $AppointmentObject->department;

                         echo "<b>ID:</b> $id <br />";
                         echo "<b>FirstName:</b> $Fullname <br />";
                         echo "<b>Email:</b> $email <br />";
                         echo "<b>Date:</b> $Date <br />";
                         echo "<b>Time:</b> $Time <br />";
                         echo "<b>Nature:</b> $Nature <br />";
                         echo "<b>Initial Complaint:</b> $Complaint <br />";
                         echo "<b>Department:</b> $department <br />";

                         echo "<hr>";

                     } else {
                       // no Appointment
                       echo "No Appointment Available";
                     }


             }


         ?>
         <a href="medical.php">Dashboard</a>

      </body>
  </html>
