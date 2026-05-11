<!DOCTYPE html>
<html>
<head>

</head>

<body>

    <div class="box">

        <h1>String Manipulation</h1>

        <form method="POST">

            <input type="text" name="text" placeholder="Enter String">

            <br><br>

            <button type="submit">
                Click Here
            </button>

        </form>

        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $str = $_POST["text"];

            echo "<h2>Original String: " . $str . "</h2>";

            echo "<h2>Reverse String: " . strrev($str) . "</h2>";

            echo "<h2>String Length: " . strlen($str) . "</h2>";

            echo "<h2>Substring: " . substr($str,0,5) . "</h2>";
        }

        ?>

    </div>

</body>
</html>