<?php include_once('./templates/header.php'); ?>

<div class="container">
  <h2 class="text-center my-4 text-uppercase"> Cadastro de Contatos</h2>
  <form>
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="email" class="form-control" id="nome" aria-describedby="nomeHelp">
      <small id="nomeHelp" class="form-text text-danger">Campo obrigatório</small>
    </div>
    <div class="mb-3">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="tel" class="form-control" id="telefone" aria-describedby="telefoneHelp">
      <small id="telefoneHelp" class="form-text text-danger">Campo obrigatório</small>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>

<?php include_once('./templates/footer.php'); ?>