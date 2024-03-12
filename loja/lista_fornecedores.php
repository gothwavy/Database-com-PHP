<html>

<head>
  <title>lista categorias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- <style>
    #navbar{
      margin-bottom: 20px;
    }
    #btnincluir{
      margin: 0 0 20px 20px;
      padding: 0.8em 3.5em;
    }
  </style> -->
    
</head>

<body>
  <?php
  include('menu.php');
  include 'conexao.php';
  ?>
  <a href="incluir_fornecedores.php"><button type="button" id="btnincluir" class="btn btn-dark">Incluir</button></a>
  <br>
  <table class="table table-hover">
    <thead>
      <tr class="valores">
        <th>ID. Fornecedor</th>
        <th>Nome Fornecedor</th>
        <th>CPF / CNPJ</th>
        <th>CEP</th>
        <th>Logradouro</th>
        <th>Número</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>UF</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "select * from fornecedores";
      $busca_fornecedor = mysqli_query($conexao, $sql);
      while ($array = mysqli_fetch_array($busca_fornecedor)) {
        $id_fornecedor = $array['id_fornecedor'];
        $nome_fornecedor = $array['nome_fornecedor'];
        $cpf_cnpj = $array['cpf_cnpj'];
        $cep = $array['cep'];
        $logradouro = $array['logradouro'];
        $numero = $array['numero'];
        $complemento = $array['complemento'];
        $bairro = $array['bairro'];
        $cidade = $array['cidade'];
        $uf = $array['uf'];
        $email = $array['email'];
        $celular = $array['celular'];
        ?>
        <tr class="valores">
          <td>
            <?php echo $id_fornecedor ?>
          </td>
          <td>
            <?php echo $nome_fornecedor ?>
          </td>
          <td>
            <?php echo $cpf_cnpj ?>
          </td>
          <td>
            <?php echo $cep ?>
          </td>
          <td>
            <?php echo $logradouro ?>
          </td>
          <td>
            <?php echo $numero ?>
          </td>
          <td>
            <?php echo $complemento ?>
          </td>
          <td>
            <?php echo $bairro ?>
          </td>
          <td>
            <?php echo $cidade ?>
          </td>
          <td>
            <?php echo $uf ?>
          </td>
          <td>
            <?php echo $email ?>
          </td>
          <td>
            <?php echo $celular ?>
          </td>
          <td <a href="btn btn-primary"><a href="editar_categoria.php?id_categoria=
              <?php echo $id_fornecedor ?>"><button type="button" class="btn btn-dark">Alterar</button></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>