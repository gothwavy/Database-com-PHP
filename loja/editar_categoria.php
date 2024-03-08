<?php
include("conexao.php");
$id_categoria = $_GET ['id_categoria'];
?>
<html>
  <head>
    <title>Editar categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Editar categoria</h1>
    <form action="_editar_categoria.php" method="post">
      <?php
      $sql = "SELECT * FROM categorias WHERE id_categoria = $id_categoria";
      $buscar = mysqli_query($conexao, $sql);
      while ($array = mysqli_fetch_array($buscar)) {
        $id_categoria = $array['id_categoria'];
        $desc_categoria = $array['desc_categoria'];
        ?>
      <input type="hidden" name="id_categoria" value="<?php echo $id_categoria ?>">
      <label>Descrição</label>
      <input type="text" name="desc_categoria" value="<?php echo $desc_categoria ?>">
      <button type="submit" class="btn btn-outline-primary">Atualizar</button>
      <?php } ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  </body>
</html>