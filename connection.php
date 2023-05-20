<?php 

    $fullname =$_POST['fullname'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $dateofbirth =$_POST['date of birth'];
    $gender =$_POST['gender'];
    $address =$_POST['address'];
    $address1 =$_POST['address1'];
    $country =$_POST['country'];
    $city =$_POST['city'];
    $region =$_POST['region'];
    $postal =$_POST['postal'];
    $parentname =$_POST['parent name'];
    $parentemail =$_POST['parent email'];
    $course =$_POST['course'];
    $parmanentaddress =$_POST['parmament address'];
    $parmanentaddress2 =$_POST['parmanent address2'];



    $servername ="localhost";
    $username  ="root";
    $password ="";
    $dbename ="form";
    $connect =  new mysqli($servername,$username,$password,$dbname);


    if(mysqli_connect_error())
    {
        
        die('connection error:('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else
    {
        $stmt = $connect->prepare("insert into registration1(fullname,email,phone,date of birth,gender,address,address1,country,city,region,postal,parent name,parent email,course,parmanentaddress,parmanentaddress2)
        value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiissssssisssss",$fullname, $email, $phone,$dateofbirth,$gender,$address,$address1,$country,$city,$region,$postal,$parentname,$parentemail,$course,$parmanentaddress,$parmanentaddress2);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $connect->close();
    }



?>