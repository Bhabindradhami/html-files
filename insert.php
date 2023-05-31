<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HTML Forms </title>
     <link rel ="stylesheet" href ="style1.css">
    <style>
        input[type=text], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    color:blue;
    box-sizing: border-box;
        }
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        input[type=number], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    color:blue;
    box-sizing: border-box;
        }
        input[type=email], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    color:blue;
    box-sizing: border-box;
        }
        input[type=submit], select {
    width: 20%;
    padding: 10px 10px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid black;
    border-radius: 4px;
    cursor: pointer;
    color:blue;
    box-sizing: border-box;
        }
        input[type=reset], select {
    width: 20%;
    padding: 10px 10px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid black;
    border-radius: 4px;
    cursor: pointer;
    color:blue;
    box-sizing: border-box;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        input[type=reset]:hover {
           background-color: #45a049;
        }

     </style>
     </head>
     <body>
     <h2 style="color: red; text-align:center;">Submits the required details in following blank space!!</h2>
     <form method="post" action="process.php">
        <label for="name">Name</label>
        <div>
            <input type="text" name="Name" id="name" placeholder="yourname...">
        </div>
        <br>

        <label for="university">University</label>
        <div>
            <input type="text" name="University" id="university" placeholder="your-university...">
        </div>
        <br>

        <label for="register">Registration_Number</label>
        <div>
            <input type="number"  name="Registration_Number" id="register" placeholder="your-Registration-num...">
        </div>
        <br>


        <label for="age">Age</label>
        <div>
            <input type="number"  name="Age" id="age" placeholder="yourage...">
        </div>
        <br>
        <label for="email">E_mail</label>
        <div>
            <input type="email" name="E_mail" id="email" placeholder="yourEmail...">
        </div>
        <br>
        <label for="eligible">Are You Eligible?</label>
        <div>
            <input type="checkbox" name="myEligibility" id="eligible" checked>
        </div>
        <br>
        <label for="gender">Gender</label>
        <div>
            Male<input type="radio" name="Gender" id="gender"> Female<input type="radio" name="mygender" id="gender"> Other<input type="radio" name="mygender" id="gender">

        </div> 
        <br>
        <label for="status">Maritial-Status</label>
        <div>
            UnMarried<input type="radio" name="Maritial_Status" id="status"> Married<input type="radio" name="mystatus" id="status"> Divorce<input type="radio" name="mystatus" id="status">
        </div> 
        <br>

        <div>
            Write About Yourself:<br>
            <textarea name="Write_About_Yourself" cols="200" rows="10"></textarea>
        </div>
        <br>
        <label for="car">Car:</label>
        <div>
            <select name="mycar" id="car">
            <option value="ind">Indica</option>
            <option value="swf">Swift</option>
            </select> 
        </div>
        <br>
        <div>
            <input type="submit" value="Submit Now">
            <br>
            <br>
            <input type="reset" value="Reset Now"
        </div>


        </form>
       <?php
     // define variables and set to empty values
        $Name = $University = $Registration_Number = $Age = $E_mail  = $Gender =$Maritial_Status =$Write_About_Yourself = "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $Name = test_input($_POST["Name"]);
     $University = test_input($_POST["University"]);
     $Registration_Number = test_input($_POST["Registration_Number"]);
     $Age = test_input($_POST["Age"]);
     $E_mail = test_input($_POST["E_mail"]);
     $Gender= test_input($_POST["Gender"]);
     $Maritial_Status = test_input($_POST["Maritial_Status"]);
       $Write_About_Yourself = test_input($_POST["Write_About_Yourself"]);
     }

     function test_input($data) {
      $data = trim($data);
     $data = stripslashes($data);
      $data = htmlspecialchars($data);
       return $data;
     }
     ?>

     <?php
     echo "<h2>Your Input:</h2>";
     echo $Name;
     echo "<br>";
     echo $University;
     echo "<br>";
     echo $Registration_Number;
     echo "<br>";
     echo $Age;
     echo "<br>";
     echo $E_mail;
     echo "<br>";
     echo $Gender;
     echo "<br>";
     echo $Maritial_Status;
     echo "<br>";
     echo $Write_About_Yourself; 
      echo "<br>";
      ?>

        </body>
        </html>
        












