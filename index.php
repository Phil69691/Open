<!DOCTYPE html>
<html>
<head>
    <title>Index Page</title>
</head>
<body>
<?php
    
    include('class_lib.php');

    $person1 = new person();

 
    $person1->set_name("John Doe");

   
    echo "<h2>Name: " . $person1->get_name() . "</h2>";
?>
</body>
</html>
