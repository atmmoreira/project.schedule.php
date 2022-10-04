<?php include_once('./templates/header.php'); ?>

<div class="container">
  <h2 class="text-center my-4 text-uppercase"> Cadastro de Contatos</h2>
  <form action="./config/crud.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required />
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Telefone</label>
      <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" required />
    </div>
    <div class="mb-3">
      <label for="observation" class="form-label">Observação</label>
      <input type="text" class="form-control" id="observation" name="observation" aria-describedby="observationHelp" required />
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
    <a href="./index.php" class="btn btn-success btn-sm">Voltar</a>
  </form>
</div>

<?php include_once('./templates/footer.php'); ?>