<?
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Guestbook</title>
        <a href="index.php">Guestbook</a>

        <?
        $login = isset($_POST["submitted1"]);
        $pass = isset($_POST["pass"]);
        ?>

    </head>

    <body>

      <p><h3>Admin Page</h3></p>

         <form action = "admin.php" method = "POST">
         Password: <input type="text" name="pass">
         <input type="submit" value="submit" name="submitted1"><br><br>

         <?
          

          if ($pass == "pass") {
          //redirects to admin page
          }
         ?>
