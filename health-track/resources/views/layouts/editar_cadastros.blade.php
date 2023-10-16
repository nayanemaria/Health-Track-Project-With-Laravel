<div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="UpdateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar informações</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="edit_data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="edit_nome" class="col-form-label">Nome Completo:</label>
                        <input type="text" class="form-control" name="nome" id="edit_nome" placeholder="Digite seu nome" maxlength="220" required />
                    </div>

                    <div class="mb-3">
                        <label for="edit_email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="edit_email" placeholder="example@example.com" maxlength="220" required />
                    </div>

                    <div class="mb-3">
                        <label for="edit_mensagem" class="col-form-label">Mensagem:</label>
                        <input type="text" class="form-control" name="mensagem" id="edit_mensagem" placeholder="Sua mensagem" maxlength="255" required />
                    </div>

                    <div class="mb-3">
                        <label for="edit_peso" class="col-form-label">Peso:</label>
                        <input type="text" class="form-control" name="peso" id="edit_peso" placeholder="00.00" required />
                    </div>

                    <div class="mb-3">
                        <label for="edit_altura" class="col-form-label">Altura:</label>
                        <input type="text" class="form-control" name="altura" id="edit_altura" placeholder="0.00" required />
                    </div>

                    <div class="mb-3">
                        <label for="edit_telefone" class="col-form-label">Telefone:</label>
                        <input type="text" class="form-control" name="telefone" id="edit_telefone" placeholder="(xx) xxxxx-xxxx" maxlength="15" required />
                    </div>

                    <button type="submit" class="btn update">Alterar</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>