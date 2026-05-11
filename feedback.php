<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>

    <style>
        body{
            text-align: center;
            font-family: Arial;
            background-color: lightblue;
            margin-top: 50px;
        }

        .box{
            background-color: white;
            width: 400px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
        }

        input, textarea{
            width: 90%;
            padding: 10px;
            margin: 10px;
        }

        button{
            padding: 10px 20px;
            background-color: darkblue;
            color: white;
            border: none;
        }
    </style>
</head>

<body>

<div class="box">

    <h1>Feedback Form</h1>

    <form method="POST">

        <input type="text" name="name" placeholder="Enter Name" required>

        <textarea name="feedback" placeholder="Enter Feedback"></textarea>

        <button type="submit">
            Submit
        </button>

    </form>

    <?php

    date_default_timezone_set("Asia/Kolkata");

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];

        $feedback = $_POST["feedback"];

        echo "<h2>Submitted Details</h2>";

        echo "Name: " . $name . "<br><br>";

        echo "Feedback: " . $feedback . "<br><br>";

        echo "Current Date: " . date("d-m-Y") . "<br><br>";

        echo "Current Time: " . date("h:i:s A");
    }

    ?>

</div>

</body>
</html>