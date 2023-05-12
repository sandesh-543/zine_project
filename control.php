<?php
$name=$_POST["name"];
$email= $_POST["email"];
$pass=$_POST["pass"];
try{
    $pdo= new PDO('mysql: host=192.168.1.4;dbname=login;port=3306','root','Lovebarca69');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if ($pdo!=0){
    
    // $stmt="insert into details.login('Name','Email','Password') values(:name,:email,:pass);";
    // echo $stmt;
    // $query=$pdo->prepare($stmt);
    // $query->bindParam(':name',$name,PDO::PARAM_STR);
    // $query->bindParam(':email',$email,PDO::PARAM_STR);
    // $query->bindParam(':pass',$pass,PDO::PARAM_STR);
    $pdo->exec("insert into details (Name,Email,Password) values('$name','$email','$pass');");
    include "login.html.php";
    }

    
    
    
}
catch (PDOException $e) {
    $output = 'Unable to connect to the database server: ' .$e->getMessage() . ' in ' .$e->getFile() . ':' . $e->getLine();
}
        
?>