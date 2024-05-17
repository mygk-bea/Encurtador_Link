<form action="" method="" class="forms col-12 d-flex flex-column align-items-end justify-content-center">
  <div class="mb-3 col-12 input-group-lg email">
    <h5 for="basic-url" class="form-label">Informe seu e-mail</h5>
    <input type="text" class="form-control" placeholder="endereco@dominio.com">
  </div>

  <div class="col-12 d-flex justify-content-end">
    <button type="button" class="forms__btn rounded" data-bs-theme="dark">
      <a href="{{ route('site.login') }}">Recuperar</a>
    </button>
  </div>
</form>