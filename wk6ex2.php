<?php

    $servername = "localhost";
    $username = "username";
    $password = "password"; 
    $database = "database";

    $connection = mysqli_connect($servername, $username, $password, $database);


    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM test";
    $result = mysqli_query($connection, $sql);


    mysqli_close($connection);
?>

<html>
<body>

<?php
   
    if ($result && mysqli_num_rows($result) > 0) {
      
        while ($row = mysqli_fetch_assoc($result)) {
       
            echo "<a href=\"wk6ex2action.php?id={$row['name']}\">{$row['name']}</a><br/>";
        }
    } else {
      
        echo "No records found";
    }
?>
</body>
</html>
