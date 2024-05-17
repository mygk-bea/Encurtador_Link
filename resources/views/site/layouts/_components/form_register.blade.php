<form action="" method="" class="forms ps-3 col-6">
  <h1 class="title">Cadastre-se</h1>
  <div class="mb-3 col-10 field email">
    <label for="basic-url" class="form-label">E-mail</label>
    <input type="text" class="form-control" placeholder="endereco@dominio.com">
  </div>
  <div class="mb-3 col-10 field password">
    <label for="basic-url" class="form-label">Senha</label>
    <input type="text" class="form-control" placeholder="Insira uma senha">
  </div>
  <div class="mb-3 col-10 field password__confirm">
    <label for="basic-url" class="form-label">Confirmar Senha</label>
    <input type="text" class="form-control" placeholder="Confirme a senha">
  </div>

  <div class="col-10 d-flex justify-content-end">
    <button type="button" class="forms__btn rounded" data-bs-theme="dark">
      <a href="{{ route('site.index') }}">Registrar</a>
    </button>
  </div>
</form>