<?php

class StringUtils {
    public static function secondCase($string) {
        if (empty($string)) {
            return '';
        }

        $firstChar = strtoupper(substr($string, 0, 1));
        $restOfString = strtolower(substr($string, 1));

        return $firstChar . $restOfString;
    }
}

class Pajamas {
    private $owner;
    private $fit;
    private $color;

    public function __construct($owner = "Unknown", $fit = "Regular", $color = "Blue") {
        $this->owner = StringUtils::secondCase($owner);
        $this->fit = $fit;
        $this->color = $color;
    }

    public function describe() {
        return "These pajamas are owned by {$this->owner}. They are {$this->fit} fit and have a {$this->color} color.";
    }

    public function setFit($fit) {
        $this->fit = $fit;
    }
}

class ButtonablePajamas extends Pajamas {
    private $button_state = "unbuttoned";

    public function describe() {
        return parent::describe() . " They are currently {$this->button_state}.";
    }

    public function toggleButtons() {
        $this->button_state = ($this->button_state === "buttoned") ? "unbuttoned" : "buttoned";
    }
}

// Test the StringUtils class
echo StringUtils::secondCase("Q") . PHP_EOL; // should print "q"
echo StringUtils::secondCase("") . PHP_EOL;  // should print an empty string

// Create an instance of Pajamas
$chicken_PJs = new Pajamas("CHICKEN", "Loose", "Green");
echo $chicken_PJs->describe() . PHP_EOL;

// Tighten up the fit of chicken's PJs
$chicken_PJs->setFit("Tight");
echo $chicken_PJs->describe() . PHP_EOL;

// Create an instance of ButtonablePajamas
$moose_PJs = new ButtonablePajamas("moose", "Regular", "Red");
echo $moose_PJs->describe() . PHP_EOL;

// Toggle buttons on Moose's PJs
$moose_PJs->toggleButtons();
echo $moose_PJs->describe() . PHP_EOL;

// Toggle buttons again
$moose_PJs->toggleButtons();
echo $moose_PJs->describe() . PHP_EOL;
