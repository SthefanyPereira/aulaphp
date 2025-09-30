
<!DOCTYPE html>
<html>
<head>
    <title>Verificar Par ou Ímpar</title>
</head>
<body>
    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero % 2 == 0) {
            echo "<p>O número $numero é <strong>par</strong>.</p>";
        } else {
            echo "<p>O número $numero é <strong>ímpar</strong>.</p>";
        }
    }
    ?>
</body>
</html>
