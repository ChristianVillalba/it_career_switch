<html>
<body>
<!--Your code goes here-->
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    $result = $num1 + $num2;
    echo "<p>The sum of $num1 and $num2 is: $result</p>";
} else {
    echo "<p>Error: Please provide valid numbers.</p>";
}
?>
<a href="index.php">Reset</a>
</body>
</html>