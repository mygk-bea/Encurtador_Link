<form action="" method="" class="forms col-6 d-flex flex-column justify-content-center align-items-end">
    <h1 class="title">Envie uma Mensagem 😎</h1>
    <div class="col-12 d-flex flex-column justify-content-between">
            <div class="mb-3 field email">
            <label for="basic-url" class="form-label">E-mail</label>
            <input type="text" class="form-control" placeholder="endereco@dominio.com">
        </div>
            <div class="mb-3 field nome">
            <label for="basic-url" class="form-label">Nome</label>
            <input type="text" class="form-control" placeholder="Insira seu nome">
        </div>
        <div class="form-group field mensagem">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" rows="3"></textarea>
        </div>
        <div class="form-group field motivo">
            <label for="motivo" class="form-label">Motivo</label>
            <select class="form-control">
                <option selected hidden>Escolha...</option>
                <option>Suporte</option>
                <option>Reclamação</option>
                <option>Sugestão</option>
            </select>
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button type="button" class="forms__btn rounded" data-bs-theme="dark">
                <a href="{{ route('site.index') }}">Enviar</a>
            </button>
        </div>
    </div>
</form>
