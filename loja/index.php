<html>

<head>
  <title>Nossa Loja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <?php
    include 'menu.php';
    include 'conexao.php';
    ?>
    <div>
      <a href="#">Cadastre-se</a> <a href="#">Login</a>
    </div>
    <br />
    <br />
    <div class="row align-items-start">
      <div class="col">
        <select>
        <?php
        $sql = "select * from categorias order by desc_categoria";
        $busca_categoria = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($busca_categoria)) {
          $id_categoria = $array['id_categoria'];
          $desc_categoria = $array['desc_categoria'];
          ?>
          <option value="<?php echo $id_categoria ?>"><?php echo $desc_categoria ?></option>
          <?php } ?>
          </select>
        </div>
        <div class="col">
          </br>
          <button type="submit" id="botao" class="btn btn-primary">Selecionar</button>
        </div>
    </div>
    <br />

    <?php
    $sql = "select * from produtos order by desc_produto";
    $busca_produto = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($busca_produto)) {
      $id_produto = $array['id_produto'];
      $desc_produto = $array['desc_produto'];
      $preco = $array['preco'];
      $imagem = $array['imagem'];
      ?>

      <div class="row align-items-start">
        <div class="col-4">
          <div class="card">
            <img src="images/<?php echo ("$imagem") ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $desc_produto ?>
              </h5>
              <p class="card-text">
                <?php echo number_format($preco, 2, ",", ".") ?>
              </p>
              <a href="#" class="btn btn-primary">Adicionar ao carrinho</a>
            </div>
          </div>
        </div>
      </div>

    <?php } ?>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>