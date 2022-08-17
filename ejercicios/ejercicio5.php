<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $primer = (int)$_GET["primernumero"];
        echo("<h1>El area es: ".(3.14 * $primer ** 2)."</h1>");
        echo("<h1>El perimetro es: ".(2 * 3.14 * $primer)."</h1>");
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>