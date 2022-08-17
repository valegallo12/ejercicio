<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $primer = (int)$_GET["primernumero"];
        echo("<h1>En dólares son: ".($primer / 4.296)."</h1>");
        echo("<h1>En Euros son: ".($primer / 4.400)."</h1>");
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>