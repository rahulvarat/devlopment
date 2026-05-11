<!DOCTYPE html>
<html>
<head>
    <title>Search Roll Number</title>

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

        input{
            padding: 10px;
            width: 80%;
        }

        button{
            padding: 10px 20px;
            margin-top: 10px;
            background-color: darkblue;
            color: white;
            border: none;
        }
    </style>
</head>

<body>

<div class="box">

    <h1>Search Roll Number</h1>

    <form method="POST">

        <input type="number" name="roll" placeholder="Enter Roll Number">

        <br><br>

        <button type="submit">
            Search
        </button>

    </form>

    <?php

    $students = array(101,102,103,104,105);

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $roll = $_POST["roll"];

        if(in_array($roll, $students))
        {
            echo "<h2>Roll Number Found</h2>";
        }
        else
        {
            echo "<h2>Roll Number Not Found</h2>";
        }
    }

    ?>

</div>

</body>
</html>