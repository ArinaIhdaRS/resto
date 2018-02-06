<?php
session_start();
$host = "localhost";
$username = "root";
$password = "170897";
$database = "restoran";
$message = "";
try
{
     $connect = new PDO('mysql:host=localhost; dbname=restoran', 'root', '170897');
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if(isset($_POST["login"]))
     {
          if(empty($_POST["username"]) || empty($_POST["password"]))
          {
               $message = '<label>All fields are required</label>';
          }
          else
          {
               $query = "SELECT * FROM meja WHERE username = :username AND password = :password";
               $statement = $connect->prepare($query);
               $statement->execute(
                    array(
                         'username'     =>     $_POST["username"],
                         'password'     =>     $_POST["password"]
                    )
               );
               $count = $statement->rowCount();
               if($count > 0)
               {
                    $_SESSION["username"] = $_POST["username"];
                    header("location:http://localhost/new/resto/new");
               }
               else
               {
                    $message = '<label>Nomor meja atau password salah!</label>';
               }
          }
     }
}
catch(PDOException $error)
{
     $message = $error->getMessage();
}
?>
