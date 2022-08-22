<!doctype html>
<html>
<head>
  <title></title>
  <meta charset = "utf-8">
</head>
<body>
<?php
  $sMode = $_GET['mode'];
  if($sMode != "test") {
    echo "잘못된 경로로 접속되었다.";
    exit;
  }
?>
  <table border="1">
    <form action="process.php" method="POST">
      <tr>
        <td>Name</td>
        <td><input type="text" name="name" maxlength="20"></td>
      </tr>
      <tr>
        <td>Pass</td>
        <td><input type="password" name="Pass" maxlength="20"></td>
      </tr>
      <tr>
        <td>Sex</td>
        <td>
          <input type="radio" name="sex" value="Male">Male
          <input type="radio" name="sex" value="Female">Female
        </td>
      </tr>
      <tr>
        <td>Car</td>
        <td>
          <select name="car">
            <option value="lonic5">lonic5</option>
            <option value="SM5" selected>SM5</option>
            <option value="Accent">Accent</option>
        </td>
      </tr>
      <tr>
        <td>Interests</td>
        <td>
         <input type="checkbox" name="interests[]" value="Car">Car
         <input type="checkbox" name="interests[]" value="Housing">Housing
         <input type="checkbox" name="interests[]" value="Laptop">Laptop
        </td>
      </tr>
      <tr>
        <td>Opinions</td>
        <td><textarea rows="5" cols="50" name="opinions"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="Submit this form">
          <input type="reset" value="Cancel This Form">
        </td>
      </tr>
    </form>
  </table>
</body>
</html>
