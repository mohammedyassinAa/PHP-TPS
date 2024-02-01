<?php

class FormControl {
    private $type;
    private $name;
    private $label;
    private $value;

    public function __construct($type, $name, $label, $value = '') {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    public function render() {
        echo '<label for="' . $this->name . '">' . $this->label . '</label>';
        echo '<input type="' . $this->type . '" name="' . $this->name . '" value="' . $this->value . '">';
    }
}

class Form {
    private $controls = [];

    public function addControl(FormControl $control) {
        $this->controls[] = $control;
    }

    public function render() {
        echo '<form>';
        foreach ($this->controls as $control) {
            $control->render();
        }
        echo '<input type="submit" value="Submit">';
        echo '<input type="reset" value="Reset">';
        echo '</form>';
    }
}

// Exemple d'utilisation

$form = new Form();

$usernameControl = new FormControl('text', 'username', 'Username');
$passwordControl = new FormControl('password', 'password', 'Password');

$form->addControl($usernameControl);
$form->addControl($passwordControl);

$form->render();
?>