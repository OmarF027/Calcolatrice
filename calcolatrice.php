<?php
$_numero1 = $_GET["num1"];
$_numero2 = $_GET["num2"];
$operatore = $_GET["operatore"];

$massimo = max($_numero1, $_numero2);
$minimo = min($_numero1, $_numero2);
$array = array($_numero1, $_numero2);
$somma = array_sum($array);
$n_elementi = count($array);
$media = $somma/$n_elementi;

switch ($operatore) {
    case "piu":
        $ris = $_numero1 + $_numero2;
        $op_stp = ' + ';
        break;
    case "meno":
        $ris = $_numero1 - $_numero2;
        $op_stp = ' - ';
        break;
    case "per":
        $ris = $_numero1 * $_numero2;
        $op_stp = ' x ';
        break;
    case "diviso":
        $ris = $_numero1 / $_numero2;
        $op_stp = ' : ';
        break;
}

$ris = number_format($ris, 2, ",", ".");
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Calcolatrice</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fb;
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            padding: 30px;
            margin: 10px;
            text-align: center; /* Centra tutto il contenuto */
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 600;
        }

        .result {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .result p {
            margin: 10px 0; /* Distanza tra i paragrafi */
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            width: 100%;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        button a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="result">
            <h1>Il risultato di <?php echo $_numero1 . ' ' . $op_stp . ' ' . $_numero2 . ' = ' . $ris; ?></h1>
        </div>

        <div class="result">
            <p><strong>Massimo:</strong> <?php echo $massimo; ?></p>
            <p><strong>Minimo:</strong> <?php echo $minimo; ?></p>
            <p><strong>Media:</strong> <?php echo $media; ?></p>
        
            <p><strong>Round:</strong> <?php echo round(3.453, 2); ?></p>
            <p><strong>Ceil:</strong> <?php echo ceil(3.653); ?></p>
            <p><strong>Floor:</strong> <?php echo floor(3.753); ?></p>
        </div>

        <button><a href="calcolatrice.html">Torna alla Calcolatrice</a></button>
    </div>

</body>
</html>
