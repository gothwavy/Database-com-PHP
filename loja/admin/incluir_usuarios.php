<html>
    <!-- incluir_usuarios.php -->
   <head>
       <title>Inclusão de Usuarios</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   </head>

   <body>
      <?php
        include 'menu.php';
      ?>
      <div class="container">
      <h4>Inclusão de Usuários</h4>
      <!-- tag form = formulário do html, action vai enviar os dados para outra página  -->
      <form action="_incluir_usuarios.php" method="post">
          <label>Nome</label>
          <input type="text" name="nome_usuario" class="form-control" required>
          <label>E-mail</label>
          <input type="email" name="email_usuario" class="form-control" required>  
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>                   
          <!-- input é entrada de dados. required, torna obrigatória a digitação -->
          <button type="submit" id="botao" class="btn btn-primary">Cadastrar</button>
      </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>     
   </body>
</html>