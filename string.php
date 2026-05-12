<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>

    <style>

        body{
            text-align: center;
            font-family: Arial;
            background-color: lightblue;
            margin-top: 50px;
        }

        .box{
            background-color: white;
            width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
        }

        input{
            width: 80%;
            padding: 10px;
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

    <h1>PHP String Operations</h1>

    <form method="POST">

        <input type="text" name="text" placeholder="Enter String">

        <br><br>

        <button type="submit">
            Submit
        </button>

    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $str = $_POST["text"];

        echo "<h2>Original String: " . $str . "</h2>";

        // a) Uppercase
        echo "<h2>Uppercase: " . strtoupper($str) . "</h2>";

        // b) Lowercase
        echo "<h2>Lowercase: " . strtolower($str) . "</h2>";

        // c) First Character Uppercase
        echo "<h2>First Character Uppercase: " . ucfirst($str) . "</h2>";

        // d) First Character of All Words Uppercase
        echo "<h2>All Words Capital: " . ucwords($str) . "</h2>";

        // e) Remove Leading Zeroes
        echo "<h2>Without Leading Zeroes: " . ltrim($str,'0') . "</h2>";

        // f) Reverse String
        echo "<h2>Reverse String: " . strrev($str) . "</h2>";

        // Length
        echo "<h2>String Length: " . strlen($str) . "</h2>";

        // Substring
        echo "<h2>Substring: " . substr($str,0,5) . "</h2>";
    }

    ?>

</div>

</body>
</html>
