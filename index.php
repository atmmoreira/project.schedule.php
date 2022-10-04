<?php include_once('./templates/header.php'); ?>

<div class="container">
  <h2 class="text-center my-4 text-uppercase"> Agenda de Contatos</h2>
  <?php if (isset($printMessage) && $printMessage != '') : ?>
    <div class="alert alert-warning"><?= $printMessage; ?></div>
  <?php endif; ?>

  <?php if (count($getAllContacts) > 0) : ?>
    <ul class="list-group list-group-numbered">
      <?php foreach ($getAllContacts as $contact) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold"><?= $contact['name']; ?></div>
            <i class="ph-phone-bold"> <?= $contact['phone']; ?> </i>
          </div>
          <a href="./edit.php?id=<?= $contact['id']; ?>" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Editar">
            <i class="ph-pencil-simple-line-bold"></i>
          </a>
          <form action="./config/crud.php" method="POST">
            <input type="hidden" name="type" value="delete">
            <input type="hidden" name="id" value="<?= $contact['id']; ?>">
            <button class="text-danger deletebtn" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Deletar">
              <i class="ph-trash-bold"></i>
            </button>
          </form>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php else : ?>
    <div class="alert alert-warning text-center">Ainda não tem contatos na sua agenda. <br />
      <a href="../register.php" class="btn btn-sm btn-primary mt-2 text-uppercase">Cadastre Contatos</a>
    </div>
  <?php endif; ?>
</div>

<?php include_once('./templates/footer.php'); ?>