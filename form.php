<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['text'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        $hobbies= $_POST['hobbies'];
        $dob= $_POST['dob'];
        $resume= $_POST['resume'];
        $experience = $_POST['experience'];
        
     }
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
        </head>
        <body>

        <table border="1" width="200px" background-color="darkgrey">
            <tr>
            <th>field</th>
            <th>Data Submitted</th>
            </tr>
            <tr>
            <td>Name</td>
            <td><?php echo $name ?></td>
            </tr>
          <tr>
          <tr>
            <td>Email</td>
            <td><?php echo $email?></td>
          </tr> 
          <tr>
            <td>Password</td>
            <td><?php echo$password?></td>
          </tr> 
          <tr>
            <td>Age</td>
            <td><?php echo$age?></td>
          </tr>
          <tr>
            <td>Country</td>
            <td><?php echo$country?></td>
            </tr> 
            <tr>
            <td>Hobbies</td>
            <td><?php echo$hobbies?></td>
            </tr> 
            <tr>
            <td>Date Of Birth</td>
            <td><?php echo$dob?></td>
            </tr> 
            <tr>
            <td>Resume</td>
            <td><?php echo$resume?></td>
            </tr> 
            <tr>
            <td>Experience</td>
            <td><?php echo$experience?></td>
            </tr> 
     </table>
     </body>
     </html>
     
     