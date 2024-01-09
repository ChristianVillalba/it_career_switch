<html>
<body>
<!--Your code goes here-->
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    if ($num2 != 0) {
        $result = $num1 / $num2;
        echo "<p>The result of dividing $num1 by $num2 is: $result</p>";
    } else {
        echo "<p>Error: Cannot divide by zero.</p>";
    }
} else {
    echo "<p>Error: Please provide valid numbers.</p>";
}
?>
<a href="index.php">Reset</a>
</body>
</html>