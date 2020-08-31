<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT COUNT(*) FROM mydatabase";
$result = mysqli_query($conn, $sql);
$count = mysqli_fetch_assoc($result)['COUNT(*)'];
?>
<form method="POST">
<select id="status" name="numpage" class="custom-select" style="
    width: 5%;
">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value=<?php echo "'$count'";?>>show all</option>
                      </select>
  <br><br>
  <input type="submit" value="SHOW ITEM" name='page'>
</form>