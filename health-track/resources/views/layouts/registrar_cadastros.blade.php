<div class="modal fade" id="CreateModal" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cadastrar Informações</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/create" method="post">

          @csrf

          <div class="mb-3">
            <label for="nome" class="col-form-label">Nome Completo:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" maxlength="220" required />
          </div>

          <div class="mb-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" maxlength="220" required />
          </div>

          <div class="mb-3">
            <label for="mensagem" class="col-form-label">Mensagem:</label>
            <input type="text" class="form-control" name="mensagem" id="mensagem" placeholder="Sua mensagem" maxlength="255" required />
          </div>

          <div class="mb-3">
              <label for="peso" class="col-form-label">Peso:</label>
              <input type="text" class="form-control" name="peso" id="peso" placeholder="00.00" required />
          </div>

          <div class="mb-3">
              <label for="altura" class="col-form-label">Altura:</label>
              <input type="text" class="form-control" name="altura" id="altura" placeholder="0.00" required />
          </div>

          <div class="mb-3">
            <label for="telefone" class="col-form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx" maxlength="15" required />
          </div>

          <button type="submit" class="btn add">Cadastrar</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>