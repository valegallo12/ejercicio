<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $primer = (int)$_GET["primernumero"];
        echo("<h1>En grados Kelvin son: ".($primer + 273.15)."</h1>");
        echo("<h1>En grados Fahrenheit: ".($primer * 9/5 + 32)."</h1>");
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>