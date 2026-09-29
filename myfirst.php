<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Lab07 task 1" content="My first php file">
    <title>Using PHP Variables, arrays and operators</title>
    
</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
<?php
    $marks = array (85, 85, 95);  // declare and initialise array
    $marks[1] = 90;   // modify second element
    $ave = ($marks[0] + $marks[1] + $marks[2])/3;  // compute average
    if ($ave >= 50)
        $status = "PASSED";
    else
        $status = "FAILED";
    echo "<p>The average score is $ave. You $status.</p>";
?>

</body>
</html>