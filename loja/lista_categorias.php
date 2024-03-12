<html>

<head>
  <title>lista categorias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  include('menu.php');
  include 'conexao.php';
  ?>
  <a href="incluir_categorias.php"><button type="button" id="btnincluir" class="btn btn-dark">Incluir</button></a>
  <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID. Categoria</th>
        <th>Item</th>
        <th>Descrição</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "select * from categorias";
      $busca_categoria = mysqli_query($conexao, $sql);
      while ($array = mysqli_fetch_array($busca_categoria)) {
        $id_categoria = $array['id_categoria'];
        $item_categoria = $array['item_categoria'];
        $desc_categoria = $array['desc_categoria'];
        ?>
        <tr>
          <td>
            <?php echo $id_categoria ?>
          </td>
          <td>
            <?php echo $item_categoria ?>
          </td>
          <td>
            <?php echo $desc_categoria ?>
          </td>
          <td <a href="btn btn-primary"><a href="editar_categoria.php?id_categoria=
              <?php echo $id_categoria ?>"><button type="button" class="btn btn-dark">Alterar</button></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>