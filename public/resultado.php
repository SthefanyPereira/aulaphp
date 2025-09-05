<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado do Cadastro</title>
</head>
<body>

  <h2>Cadastro realizado!</h2>
  <p>Nome: <?php echo htmlspecialchars($_POST['nome']); ?></p>
  <p>E-mail: <?php echo htmlspecialchars($_POST['email']); ?></p>

</body>
</html>
