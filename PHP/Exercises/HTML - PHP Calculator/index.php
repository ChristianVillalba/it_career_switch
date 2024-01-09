<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

    <h2>Addition Calculator</h2>
    <form action="addition.php" method="GET">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" required>
        <br>
        <button type="submit">Add</button>
    </form>

    <h2>Division Calculator</h2>
    <form action="division.php" method="GET">
        <label for="num1">Dividend:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Divisor:</label>
        <input type="number" name="num2" required>
        <br>
        <button type="submit">Divide</button>
    </form>

</body>
</html>
