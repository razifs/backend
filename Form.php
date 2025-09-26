<?php
class Form{
    private $action;
    private $method;

    public function __construct($action, $method="POST") {
        $this->action = $action;
        $this->method = $method;
    }

    public function open() {
        echo "<form action='{$this->action}' method='{$this->method}'>";
    }

    public function close($value = "Submit") {
        echo "<input type='submit' value='$value'>";
        echo "</form>";
    }

    // Input text
    public function Text($name, $label, $value="") {
        echo "<label>$label: <input type='text' name='$name' value='$value'></label><br>";
    }

    // Radio button
    public function radio($name, $label, $options = []) {
        echo "<label>$label:</label><br>";
        foreach($options as $key => $text) {
            $val = is_int($key) ? $text : $key; 
            echo "<input type='radio' name='{$name}' value='" .
                htmlspecialchars($val, ENT_QUOTES, 'UTF-8') . "'> " .
                htmlspecialchars($text, ENT_QUOTES, 'UTF-8') . "<br>";
        }
    }

    // Checkbox
    public function checkbox($name, $label, $options = []) {
        echo "<label>$label:</label><br>";
        foreach($options as $key => $text) {
            $val = is_int($key) ? $text : $key; 
            echo "<input type='checkbox' name='{$name}[]' value='" .
                htmlspecialchars($val, ENT_QUOTES, 'UTF-8') . "'> " .
                htmlspecialchars($text, ENT_QUOTES, 'UTF-8') . "<br>";
        }
    }

    // Select / dropdown
    public function dropdown($name, $label, $options = []) {
        echo "<label>$label: <select name='$name'>";
        foreach($options as $key => $text) {
            // kalau key numerik, pakai $text juga untuk value
            $val = is_int($key) ? $text : $key;
            echo "<option value='" . htmlspecialchars($val, ENT_QUOTES, 'UTF-8') . "'>"
                . htmlspecialchars($text, ENT_QUOTES, 'UTF-8') . "</option>";
        }
        echo "</select></label><br>";
    }

    // Textarea
    public function Textarea($name, $label) {
        echo "<label>$label: <textarea name='$name'></textarea></label><br>";
    }

    //login
    public function Login($name, $label){
        echo "<label>$label: <input type='password' name='$name'> </label><br>";
    }

    
}

?>