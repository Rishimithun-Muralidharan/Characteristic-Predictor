<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>
      Choices
    </title>
  </head>
  <body>
    <h1>Make Your Choice</h1>
    <p>
      This program can predict your characteristics based on your input
    </p>
    <p>
      Excited? SO AM I!
    </p>
    <p>Check the box to determine your gender</p>
    <form method="post" action="choices.php">
      Male:<input type="checkbox" name="inputone">
      <br>
      Female: <input type="checkbox" name="inputtwo">
      <br>
      Neither: <input type="checkbox" name="inputspecial">
      <br>
    <p>Check the box to determine your height</p>  
      You are tall: <input type="checkbox" name="inputthree">
      <br>
      You are short: <input type="checkbox" name="inputfour">
      <br>
      <p><input type="submit"></p>
    </form>
    <?php
    error_reporting(0);
    $isman = $_POST["inputone"];
    $isfemale = $_POST["inputtwo"];
    $istall = $_POST["inputthree"];
    $isshort = $_POST["inputfour"];
    $istrans = $_POST["inputspecial"];

    if ($isman && $istall) {
      echo "You are a male and tall";
    } 
    else if ($isman && !($istall)) {
      echo "You are a male and short";
    }
    else if ($isfemale && $istall){
      echo "You are a female and tall";
    }
    else if ($isfemale && !($istall)){
      echo "You are a female and short";
    }
    else if ($istrans && $istall) {
      echo "You are a transgender who is tall";
    }
    else {
      echo "You are a transgender who is short";
    }

    ?>
    
    </body>

</html>