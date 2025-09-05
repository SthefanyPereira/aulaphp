<?php
if (isset($_POST['numero'])) {
    $num = $_POST['numero'];

    echo "<h3>Tabuada do $num<?h3> <br>";

    for ($i = 1; $i <= 10; $i++) {
        $resul = $num * $i;
        echo "$num x $i = $resul <br>";
    }
}
?>

<form method="post" action="">
    <label>Digite um número:</label>
    <input type="number" name="numero" require>
    <input type="submit" value="Gerar Tabuada">
</form>