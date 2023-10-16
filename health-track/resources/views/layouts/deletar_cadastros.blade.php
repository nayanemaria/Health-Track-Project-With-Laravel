<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tem certeza que deseja excluir esse registro?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
        <div class="modal-body">
           <p>Após a ação, a exclusão não poderá ser desfeita.</p>
        </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <form action="#" method="post" id="delete_data">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn delete" data-bs-dismiss="modal">Excluir registro</button>
        </form>
        </div>
        </div>
    </div>
</div>
