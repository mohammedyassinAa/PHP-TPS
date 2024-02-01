<!-- Q1 -->
<?php
function afficherResultat($x)
{
    if ($x === true) {
        echo "VRAI";
    } elseif ($x === false) {
        echo "FAUX";
    } else {
        echo "Non reconnu";
    }
}

$a = "0";
$b = "VRAI";
$c = false;
$d = ($a || $b);
$e = ($a && $c);
$f = ($a xor $b);

afficherResultat($a);
echo "<br>";
afficherResultat($b);
echo "<br>";
afficherResultat($c);
echo "<br>";
afficherResultat($d);
echo "<br>";
afficherResultat($e);
echo "<br>";
afficherResultat($f);
?>
<!-- Q2 -->

<?php
echo "<br>";
$n = 6; 

for ($i = 1; $i <= $n; $i++) {
    echo str_repeat('* ', $i) . "<br>";
}

for ($i = $n ; $i >= 1; $i--) {
    echo str_repeat('* ', $i) . "<br>";
}
?>
<!-- Q3 -->

<!DOCTYPE html>
<html>

<head>
    <style>
    table {
        width: 400px;
        height: 400px;
        border: 2px solid black;
        border-collapse: collapse;
    }

    td {
        width: 50px;
        height: 50px;
    }

    .white {
        background-color: white;
    }

    .black {
        background-color: black;
    }
    </style>
</head>

<body>
    <table>
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo '<tr>';
            for ($col = 1; $col <= 8; $col++) {
                if (($row + $col) % 2 === 0) {
                    echo '<td class="white"></td>';
                } else {
                    echo '<td class="black"></td>';
                }
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>