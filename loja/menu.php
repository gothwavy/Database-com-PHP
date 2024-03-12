<!-- menu.php -->

<style>
  #navbar {
    margin-bottom: 20px;
  }

  #btnincluir {
    margin: 0 0 20px 20px;
    padding: 0.8em 3.5em;
  }

  .inputbreak {
    display: flex;
    margin-left: 1em;
  }

  .fornecedor label {
    margin-left: 1em;
  }

  .fornecedor button {
    margin: 1em 0 0 1em;
  }

  .valores th,
  .valores td {
    text-align: center;
  }
</style>

<nav id="navbar" class="navbar navbar-expand-lg navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Minha Database</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabelas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="lista_categorias.php">Categorias</a></li>
            <li><a class="dropdown-item" href="lista_fornecedores.php">Fornecedores</a></li>
            <li><a class="dropdown-item" href="#">Usuários</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>