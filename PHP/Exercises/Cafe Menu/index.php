<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Menu</title>
</head>
<body>

    <h1>Welcome to Our Cafe!</h1>

    <?php
        // 1 - Define drinks and pastries
        $drinks = [
            "Espresso" => 3.50,
            "Latte" => 4.00,
            "Cappuccino" => 4.50,
            "Mocha" => 5.00,
        ];

        $pastries = ["Croissant", "Danish", "Muffin", "Scone"];

        // 3 - foreach loop for drinks
    ?>
    <h2>Drinks</h2>
    <ul>
        <?php foreach ($drinks as $drink => $price) : ?>
            <li><?php echo "$drink - $" . number_format($price, 2); ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- 6 - for loop for pastries -->
    <h2>Pastries!</h2>
    <ul>
        <?php for ($i = 0; $i < count($pastries); $i++) : ?>
            <li><?php echo $pastries[$i]; ?></li>
        <?php endfor; ?>
    </ul>

</body>
</html>
