<?
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Guestbook</title>
        <a href="login.php">Admin login</a>
        <?


        $_SESSION['data'][]= $_POST;



//this doesn't seem to have any effect on execution of code
        $entry_success = isset($_POST["submitted"])
                         && isset($_POST["name"])
                         && isset($_POST["email"])
                         && isset($_POST["comment"]);



        ?>

    </head>
<body>

    <p><h3> Leave a comment </h3></p><br>

   <form action = "" method = "POST" id= "1">
     Name: <input type="text" name= "name" ><br>
     Email: <input type="text" name="email"><br>
     Comment: <input type="text" name= "comment"><br><br>
     <input type="submit" value="submit" name="submitted">
   </form><br><br>


   <?


   foreach($_SESSION['data'] as $entry) {
      if ($entry_success) {
       echo "<strong> Name:</strong> " . $entry['name'] . "\n<br>";
       echo "<strong>Comment:</strong> " . $entry['comment'] . "\n<br><br>";

     }
     elseif (!$entry_success) {
       echo "You must complete every field!";
     }
   }










   ?>
