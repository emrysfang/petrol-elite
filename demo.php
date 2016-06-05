<?php
    $link = mysql_connect('localhost','root','password') or die (mysql_error());
    mysql_query('set names utf8');
    mysql_select_db('petrol_elite');
    var_dump($link);
    $station = isset($_POST['station'])?$_POST['station']:'';
    $timeslot = isset($_POST['time'])?$_POST['time']:'';
    $art = isset($_POST['art'])?$_POST['art']:'';
    $price = isset($_POST['price'])?$_POST:'';
    if($station =='' && $timeslot == '' && $art == ''){
      echo "Data is needed.";
      exit();
    }

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fn</title>
  <style type="text/css">
   .main {
     position: relative;
     margin-left: 500px;
     margin-top: 100px;
     font-size: 22px;

   }
   .container {
     margin: 0px;
     padding: 0px;
     height: 600px;
     width: auto;
     background-color: #2cf;
   }
   .header {
     text-align: center;
     padding: 5px;
   }
   .bar {
     height: 5px;
     width: auto;
     background-color: #333;
   }
  </style>
</head>
<body>
<div class="container">
  <div class="header">
    <h2>Petrol Elite</h2>
  </div>
  <div class="bar">

  </div>
  <div class="main">
    <form class="" action="index.php" method="post">
    <table>
      <tr>
        <td>Station:</td>
        <td><input type="text" name="station" value=""></td>
      </tr>
      <tr>
        <td>
          <label for="time">Time slot:</label>
        </td>
          <td>
            <select class="" name="time">
              <option value="">choose</option>
              <option value="">0:00</option>
              <option value="">2:00</option>
              <option value="">4:00</option>
              <option value="">6:00</option>
              <option value="">8:00</option>
              <option value="">10:00</option>
              <option value="">12:00</option>
              <option value="">14:00</option>
              <option value="">16:00</option>
              <option value="">18:00</option>
              <option value="">20:00</option>
              <option value="">22:00</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="">Art:</label></td>
        <td>
          <select class="" name="art">
            <option value="">choose</option>
            <option value="Diesel">Diesel</option>
            <option value="E10">E10</option>
            <option value="E5">E5</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Price:</td>
        <td><input type="text" name="price" value=""></td>
      </tr>
      <tr>
        <td> </td>
        <td>
          <input type="button" name="submit" value="submit">
        </td>
      </tr>


    </table>
  </form>
</div>
</div>

<?php
    $sql = "insert into"."$station"."(timeslot,'$art')" values('"$timeslot"','"$price"');
    mysql_query($sql) or die(mysql_error());
    header('location:index.php');
    ?>
  </body>
</html>
<?php
}
?>
