<?php include_once('./templates/header.php'); ?>

<div class="container">
  <h2 class="text-center my-4 text-uppercase"> Editar de Contatos</h2>
  <form action="./config/crud.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $getContactById['id']; ?>">

    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="<?= $getContactById['name']; ?>" required />
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Telefone</label>
      <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" value="<?= $getContactById['phone']; ?>" required />
    </div>
    <div class="mb-3">
      <label for="observation" class="form-label">Observação</label>
      <input type="text" class="form-control" id="observation" name="observation" aria-describedby="observationHelp" value="<?= $getContactById['observation']; ?>" required />
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Atualizar</button>
    <a href="./index.php" class="btn btn-success btn-sm">Voltar</a>
  </form>
</div>

<?php include_once('./templates/footer.php'); ?>