    <?php 
$val1 = $_GET['val1'];
$val2 = $_GET['val2'];
$format = $_GET['format'];

if (is_numeric($val1) && is_numeric($val2)) {
    switch ($format) {
        case 'plus':
            $res = $val1 + $val2;
            echo "<p style='color: green;'>Result of addition: $res</p>";
            break;
        case 'minus':
            $res = $val1 - $val2;
            echo "<p style='color: blue;'>Result of subtraction: $res</p>";
            break;
        case 'mul':
            $res = $val1 * $val2;
            echo "<p style='color: purple;'>Result of multiplication: $res</p>";
            break;
        case 'sub':
            if ($val2 != 0) {
                $result = $val1 / $val2;
                echo "<p style='color: orange;'>Result of division: $result</p>";
            } else {
                echo "<p style='color: red;'>Division by zero is not allowed</p>";
            }
            break;
        default:
            echo "<p style='color: gray;'>Operation not recognized</p>";
            break;
    }
} else { 
    echo "<p style='color: red;'>ERROR: Please enter valid numeric values</p>";
}
?>