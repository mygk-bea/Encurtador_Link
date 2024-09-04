<form action="{{ route('site.contact') }}" method="post" class="forms col-6 d-flex flex-column justify-content-center align-items-end">
    @csrf
    <h1 class="title">Envie uma Mensagem 😎</h1>
    <div class="col-12 d-flex flex-column justify-content-between">
            <div class="mb-3 field email">
            <label for="basic-url" class="form-label">E-mail</label>
            <input type="text" class="form-control" placeholder="endereco@dominio.com" name="email">
        </div>
            <div class="mb-3 field nome">
            <label for="basic-url" class="form-label">Nome</label>
            <input type="text" class="form-control" placeholder="Insira seu nome" name="nome">
        </div>
        <div class="form-group field mensagem">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" rows="3" name="mensagem"></textarea>
        </div>
        <div class="form-group field motivo">
            <label for="motivo" class="form-label">Motivo</label>
            <select class="form-control" name="motivo">
                <option selected hidden>Escolha...</option>
                <option>Suporte</option>
                <option>Reclamação</option>
                <option>Sugestão</option>
            </select>
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="forms__btn rounded" data-bs-theme="dark">
                <a href="#">Enviar</a>
                {{-- <a href="{{ route('site.index') }}">Enviar</a> --}}
            </button>
        </div>
    </div>
</form>
