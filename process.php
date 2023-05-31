<?php
include 'insert.php';
if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $University=$_POST['University'];
    $Registration_Number=$_POST['Registration_Number'];
    $Age=$_POST['Age'];
    $E_mail=$_POST['E_mail'];
    $Gender=$_POST['mygender'];
    $Maritial_Status=$_POST['Maritial_Status'];
    $Write_About_Yourself=$_POST['Write_About_Yourself'];

    $sql="insert into students(Name,University,Registration_Number,Age,E_mail,Gender,Maritial_Status,Write_About_Yourself)
         values('$Name','$University','$Registration_Number','$Age','$E_mail','$Gender','$Maritial_Status','$Write_About_Yourself')";

    if(mysqli_query($con,$sql)) 
    {
        echo "<script>alert('new record inserted')</script>";
    }
    else
    {
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}
?>