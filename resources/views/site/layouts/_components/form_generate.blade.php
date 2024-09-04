<form action="" method="" class="forms col-12 d-flex flex-column align-items-end justify-content-center">
  @csrf
  <div class="mb-3 col-12 input-group-lg">
    <div class="row d-flex">
        <label>http:localhost/</label>
        <input type="text" class="form-control" placeholder="insira sua rota">
    </div>
    <div class="row d-flex">
        <label>minha url</label>
        <input type="text" class="form-control" placeholder="insira o link completo">
    </div>
  </div>

  <div class="col-12 d-flex justify-content-end">
    <button type="button" class="forms__btn rounded" data-bs-theme="dark">
      <a href="{{ route('app.list') }}">Gerar Link Encurtado</a>
    </button>
  </div>
</form>