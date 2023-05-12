<?php
$username=$_POST["user"];
$pass=$_POST["pass"];
$pdo= new PDO('mysql: host=192.168.1.4;dbname=login;port=3306','root','Lovebarca69');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$result= $pdo->query("Select * from details");

    while ($row = $result->fetch()) {
        $user[] = $row['Email'];
        $pwd[]=$row['Password'];
        }
        for ($i=0;$i<=count($user);$i++)
    {    
        {
            if ($username==$user[$i]){
                $cur= $pdo->query("Select Name from details where Email = '$username';");
                $name=$cur->fetch();
                if($pass==$pwd[$i]){
                    include 'main.html.php'; 
                    break;
                }
            }
        }
    }
?>