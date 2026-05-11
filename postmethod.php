<!DOCTYPE html>
<html>
<head>
    <title>Project Competition Registration</title>

    <style>
        body{
            font-family: Arial;
            background-color: lightblue;
            text-align: center;
        }

        .form-box{
            background-color: white;
            width: 400px;
            margin: 50px auto;
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

<div class="form-box">

    <h1>Project Competition Registration</h1>

    <form method="POST">

        <input type="text" name="name" placeholder="Enter Name" required>

        <input type="text" name="college" placeholder="Enter College Name" required>

        <input type="text" name="project" placeholder="Enter Project Title" required>

        <textarea name="details" placeholder="Project Details"></textarea>

        <button type="submit">
            Submit
        </button>

    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST['name'];
        $college = $_POST['college'];
        $project = $_POST['project'];
        $details = $_POST['details'];

        echo "<h2>Submitted Details</h2>";

        echo "Name: " . $name . "<br><br>";

        echo "College: " . $college . "<br><br>";

        echo "Project Title: " . $project . "<br><br>";

        echo "Project Details: " . $details;
    }

    ?>

</div>

</body>
</html>