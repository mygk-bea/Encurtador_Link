<form action="" method="" class="forms ps-3 col-6">
  <h1 class="title">Bem-vindo!</h1>
  <div class="mb-3 col-10 field email">
    <label for="basic-url" class="form-label">E-mail</label>
    <input type="text" class="form-control" placeholder="endereco@dominio.com">
  </div>
  <div class="mb-3 col-10 field password">
    <label for="basic-url" class="form-label">Senha</label>
    <input type="text" class="form-control" placeholder="Insira sua senha">
  </div>

  <div class="col-10 d-flex justify-content-between">
    <a href="{{ route('site.recover') }}">Esqueci a senha</a>
    <!-- <a href="{{ route('site.register') }}">Registrar-se</a> -->
    <button type="button" class="forms__btn rounded" data-bs-theme="dark">
      <a href="{{ route('site.index') }}">Entrar</a>
    </button>
  </div>
</form>