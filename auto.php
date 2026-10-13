<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }


        label {
            display: inline-block;
            width: 190px;
        }


        td {
            vertical-align: top;
        }
    </style>
    <?php
        $marca = $_POST["marca"];
        $modello = $_POST["modello"];
        $stato = $_POST["stato"];
        $anno = $_POST["anno"];
        $cilindrata = $_POST["cilindrata"];
        $cavalli = $_POST["cavalli"];
        $prezzo = $_POST["prezzo"];
        $targa = $_POST["targa"];
        if (isset($_POST["accessori"])) {
            $accessori = implode(", " , $_POST['accessori']);
        } else {$accessori = "Nulla";}
        $descrizione = $_POST["descrizione"];


        $nf="F_AUTO.DAT";
        $file = fopen($nf, "a");


        if($file) {
            $record = $marca;
            $record .= "; ";
            $record .= $modello;
            $record .= "; ";
            $record .= $stato;
            $record .= "; ";
            $record .= $anno;
            $record .= "; ";
            $record .= $cilindrata;
            $record .= "; ";
            $record .= $cavalli;
            $record .= "; ";
            $record .= $prezzo;
            $record .= "; ";
            $record .= $targa;
            $record .= "; ";
            $record .= $accessori;
            $record .= "; ";
            $record .= $descrizione;
            $record .= "\n";


        fwrite($file, $record);
        fclose($file);
        }
    ?>


    <table>
        <tr>
            <td style="background-color: lightblue;">
                <b>Marca</b>
            </td>
            <td>
                <?php echo $marca; ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: lightblue;">
                <b>Modello</b>
            </td>
            <td>
                <?php echo $modello; ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: lightblue;">
                <b>Stato</b>
            </td>
            <td>
                <?php echo $stato; ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: lightblue;">
                <b>Anno</b>
            </td>
            <td>
                <?php echo $anno; ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: lightblue;">
                <b>Cilindrata</b>
            </td>
            <td>
                <?php echo $cilindrata; ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: lightblue;">
                <b>Cavalli</b>
            </td>
            <td>
                <?php echo $cavalli; ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: lightblue;">
                <b>Prezzo</b>
            </td>
            <td>
                <?php echo $prezzo; ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: lightblue;">
                <b>Targa</b>
            </td>
            <td>
                <?php echo $targa; ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: lightblue;">
                <b>Accessori</b>
            </td>
            <td>
                <?php echo $accessori; ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: lightblue;">
                <b>Descrizione</b>
            </td>
            <td>
                <?php echo $descrizione; ?>
            </td>
        </tr>
    </table>
</body>
</html>
