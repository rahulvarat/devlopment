<!DOCTYPE html>
<html>
<head>
    <title>Student Marks</title>

    <style>
        body{
            text-align: center;
            font-family: Arial;
            background-color: lightblue;
            margin-top: 100px;
        }

        .box{
            background-color: white;
            width: 400px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<div class="box">

    <h1>Student Marks Details</h1>

    <?php

    $marks = array(85, 90, 78, 88, 95);

    echo "<h2>Marks: </h2>";

    foreach($marks as $m)
    {
        echo $m . " ";
    }

    $total = array_sum($marks);

    $percentage = $total / count($marks);

    $max = max($marks);

    echo "<h2>Total Marks: " . $total . "</h2>";

    echo "<h2>Percentage: " . $percentage . "%</h2>";

    echo "<h2>Maximum Marks: " . $max . "</h2>";

    ?>

</div>

</body>
</html>