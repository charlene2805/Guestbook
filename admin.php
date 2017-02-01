<?
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Guestbook</title>
        <script type="text/javascript" src="admin.js"></script>
          <a href="index.php">Guestbook</a>

    </head>

    <body>

      <h3>Admin Page</h3>

    <?

    foreach ($_SESSION['data'] as $key=> $value) {
      echo "<strong>$key: </strong>" . "$value" . "\n <br>";
    }

    echo '<form><input type="button" value="Delete" onclick="deleteEntry(this)"></form><br>';
    ?>

  
