<?php

$intnumero1 = 0;
$intnumero2 = 0;
$txtResult = "";



if (
    isset($_POST["btnSuma"])
    || isset($_POST["btnResta"])
    || isset($_POST["btnMultiplicar"])
    || isset($_POST["btnDividir"])
    || isset($_POST["btnFactorial"])

) {
    $intnumero1 = intval($_POST["intnumero1"]);
    $intnumero2 = intval($_POST["intnumero2"]);

    if (isset($_POST["btnSuma"])) {
        $txtResult = "La suma de " . $intnumero1 . " + " . $intnumero2 . "  = " . ($intnumero1 + $intnumero2) . "";
    } elseif (isset($_POST["btnResta"])) {
        $txtResult = "La resta de " . $intnumero1 . " - " . $intnumero2 . "  = " . ($intnumero1 - $intnumero2) . "";
    } elseif (isset($_POST["btnMultiplicar"])) {
        $txtResult = "La Multiplicacion de " . $intnumero1 . " x " . $intnumero2 . "  = " . ($intnumero1 * $intnumero2) . "";
    } elseif (isset($_POST["btnDividir"])) {
        $txtResult = "La Division de " . $intnumero1 . " ÷ " . $intnumero2 . "  = " . ($intnumero1 / $intnumero2) . "";
    } elseif (isset($_POST["btnFactorial"])) {
        if ($intnumero1 + $intnumero2 > 1) {
            for ($i = 1; $i <= $intnumero1 + $intnumero2; $i++) {
                $txtResult = "La Factorial de " . $intnumero1 . "+" . $intnumero2 . "=" .  $i;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
</head>

<body>
    <section>
        <h1>Calculadora Simple</h1>
        <form action="calculadora_simple.php" method="POST">
            <label for="intnumero1">numero 1</label>
            <input type="number" name="intnumero1" id="intnumero1" value="<?php echo $intnumero1; ?>" />
            <br />
            <label for="intnumero2">numero 2</label>
            <input type="number" name="intnumero2" id="intnumero1" value="<?php echo $intnumero2; ?>" />
            <br />
            <hr />
            <button type="submit" name="btnSuma">Suma</button>
            <button type="submit" name="btnResta">Resta</button>
            <button type="submit" name="btnMultiplicar">Multiplicar</button>
            <button type="submit" name="btnDividir">Dividir</button>
            <button type="submit" name="btnFactorial">Factorial</button>
        </form>
    </section>
    <hr />

    <section>
        <?php
        echo $txtResult;
        ?>
    </section>

</body>

</html>