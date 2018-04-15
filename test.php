<?php
    session_start();
    $_SESSION["sessname"] = "xyzzy";
?>
<!DOCTYPE html>
<html>
<body>

<?php
    include "commfunc.php";
    echo "test2 " . $_SESSION["sessname"] . "<br>";
    $sql = "SELECT username, firstname, lastname FROM users";
    $result = mysqli_query($conn, $sql);
  
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) 
        {
            echo "username: " . $row["username"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
?>

</body>
</html>