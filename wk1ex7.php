<html>
<body>
<?php
    $hourlyrate = 5.75;
    $hoursperweek = 40;
    $gross = $hourlyrate * $hoursperweek;
    $taxRate = 0.22; // 22% tax rate
    $net = $gross * (1 - $taxRate);
    echo $net;
?>
</body>
</html>
