<?php include_once('./templates/header.php'); ?>

<div class="container">
  <h2 class="text-center my-4 text-uppercase"> Agenda de Contatos</h2>
  <ul class="list-group list-group-numbered">
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Anderson Martins</div>
        <i class="ph-phone-bold"> (21) 99289-0362 </i>
      </div>
      <a href="" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Editar">
        <i class="ph-pencil-simple-line-bold"></i>
      </a>
      <a href="" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Deletar">
        <i class="ph-trash-bold"></i>
      </a>
    </li>
  </ul>
</div>

<?php include_once('./templates/footer.php'); ?>