<?php
	$Fullname = $_POST['Fullname'];
	$Email = $_POST['Email'];
	$Servicereq = $_POST['Servicereq'];
	$Doubt = $_POST['Doubt'];

    //database connection
    $servername='localhost';
    $username='neevinte_vaibhav';
    $password='#Zaqwsx3';
    
    try {
    $conn = new PDO("mysql:host=$servername;dbname=neevinte_Contact Vaibhav", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
    $sql = 'INSERT INTO Services (Fullname, Email, Servicereq, Doubt)
        VALUES (?, ?, ?, ?)';
    $entry=$conn->prepare($sql);
    $entry->execute([$Fullname, $Email, $Servicereq, $Doubt]);
    
    header("Location: http://vaibhavprakash.in/ ");
    exit();
	
?>