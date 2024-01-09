<?php
$name = "";
$raw_name = "";
$character = "";
$raw_character = "";
$email = "";
$raw_email = "";
$birth_year = 1969;
$raw_birth_year = "";
$validation_error = "";
$existing_users = ["admin", "guest"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $raw_name = htmlspecialchars(trim($_POST["name"]));
    $raw_character = $_POST["character"];
    $raw_email = $_POST["email"];
    $raw_birth_year = $_POST["birth_year"];

    // Validate name
    if (in_array($raw_name, $existing_users)) {
        $validation_error .= "This name is taken. <br>";
    } else {
        $name = $raw_name;
    }

    // Validate character
    if (!in_array($raw_character, ["wizard", "mage", "orc"])) {
        $validation_error .= "You must pick a wizard, mage, or orc. <br>";
    } else {
        $character = $raw_character;
    }

    // Validate email
    if (!filter_var($raw_email, FILTER_VALIDATE_EMAIL)) {
        $validation_error .= "Invalid email. <br>";
    } else {
        $email = $raw_email;
    }

    // Validate birth year
    $options = [
        "options" => [
            "min_range" => 1900,
            "max_range" => date("Y")
        ]
    ];

    if (filter_var($raw_birth_year, FILTER_VALIDATE_INT, $options) === false) {
        $validation_error .= "That can't be your birth year. <br>";
    } else {
        $birth_year = $raw_birth_year;
    }
}
?>
<h1>Create your profile</h1>
<form method="post" action="">
    <p>
        Select a name: <input type="text" name="name" value="<?= $name; ?>" >
    </p>
    <p>
        Select a character:
        <input type="radio" name="character" value="wizard" <?= ($character=='wizard')?'checked':'' ?>> Wizard
        <input type="radio" name="character" value="mage" <?= ($character=='mage')?'checked':'' ?>> Mage
        <input type="radio" name="character" value="orc" <?= ($character=='orc')?'checked':'' ?>> Orc
    </p>
    <p>
        Enter an email: <input type="text" name="email" value="<?= $email; ?>" >
    </p>
    <p>
        Enter your birth year: <input type="text" name="birth_year" value="<?= $birth_year; ?>">
    </p>
    <p>
        <span style="color:red;"><?= $validation_error;?></span>
    </p>
    <input type="submit" value="Submit">
</form>
  
<h2>Preview:</h2>
<p>
    Name: <?=$name;?>
</p>
<p>
    Character Type: <?=$character;?>
</p>
<p>
    Email: <?=$email;?>
</p>
<p>
    Age: <?=date("Y")-$birth_year;?>
</p>
