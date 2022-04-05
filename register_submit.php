<?php
   /* $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $name . "<br/>";
    echo $email . "<br/>";
    echo $password . "<br/>"; */

    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="studentregister";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo "Connection Failed !!".mysqli_connect_error();
        exit;
    }
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $cgpa=$_POST['cgpa'];
    $mnum=$_POST['mnum'];
    $address=$_POST['address'];



    $password=$_POST['password'];


    $sql="INSERT into students (fname,mname,lname,dob,cgpa,mnum,address,password) values ('$fname','$mname','$lname','$dob','$cgpa','$mnum','$address','$password')";

    $result=mysqli_query($conn,$sql);

    if(!$result)
    {
        echo "Data Not Inserted Into Database !!!".mysqli_error($conn);
        exit;
    }

    echo "REGISTRATION SUCCESSFULL !!!";
    mysqli_close($conn);


   // echo $email . "<br/>";
    //echo $password . "<br/>";

?>