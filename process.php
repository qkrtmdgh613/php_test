<?php
function print_for() {
    for($i=0; $i<count($_POST['interests']); $i++) {
      $all = $_POST['interests'];
      echo $all[$i];
    }
}
?>
<table border="1">
  <tr>
    <td>Name</td>
    <td><?php echo $_POST['name'];?></td>
  </tr>
  <tr>
    <td>Pass</td>
    <td><?php echo $_POST['Pass'];?></td>
  </tr>
  <tr>
    <td>Sex</td>
    <td><?php echo $_POST['sex'];?></td>
  </tr>
  <tr>
    <td>Car</td>
    <td>
      <?php
        if($_POST['car'] == 'SM5') {
          echo "<a href=https://en.wikipedia.org/wiki/Renault_Samsung_SM5>SM5</a>";
        } else {
          echo $_POST['car'];
        }
      ?>
    </td>
  </tr>
  <tr>
    <td>Interests</td>
    <td>
      <?php print_for();?>
    </td>
  <tr>
    <td>Opinions</td>
    <td><?php echo $_POST['opinions'];?></td>
  </tr>
</table>
