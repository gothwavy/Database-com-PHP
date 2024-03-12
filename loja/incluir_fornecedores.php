<html>

<head>
  <title>Inclusão de fornecedores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  include('menu.php');
  ?>
  <h1>Inclusão de fornecedores</h1>
  <form class="fornecedor" action="_incluir_fornecedores.php" method="post">
    <label>Nome / Razão social</label>
    <input class="inputbreak" type="text" name="nome_fornecedor" required>
    <label>CPF / CNPJ</label>
    <input class="inputbreak" type="text" name="cpf_cnpj" pattern="{11}" required>
    <label>CEP</label>
    <input class="inputbreak" type="text" name="cep" required>
    <label>Logradouro</label>
    <input class="inputbreak" type="text" name="logradouro" required>
    <label>Número</label>
    <input class="inputbreak" type="text" name="numero" required>
    <label>Complemento</label>
    <input class="inputbreak" type="text" name="complemento">
    <label>Bairro</label>
    <input class="inputbreak" type="text" name="bairro" required>
    <label>Cidade</label>
    <input class="inputbreak" type="text" name="cidade" required>
    <label>UF</label>
    <input class="inputbreak" type="text" name="uf" required>
    <label>Email</label>
    <input class="inputbreak" type="email" name="email" required>
    <label>Celular</label>
    <input class="inputbreak" type="number" name="celular" required>
    <button type="submit" class="btn btn-outline-primary">Incluir</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>