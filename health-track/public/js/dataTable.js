$(document).ready(function(){
    $('#table').DataTable({
          "language": {
              "lengthMenu": "Exibindo _MENU_ registros por página",
              "zeroRecords": "Nenhum registro encontrado.",
              "info": "Exibindo página _PAGE_ de _PAGES_",
              "infoEmpty": "Nenhum registro disponível",
              "infoFiltered": "(pesquisa filtrada de _MAX_ registros no total)",
              "paginate": {
              "previous": "Anterior",
              "next": "Próximo",
              },
              "search": "Procurar: "
          }
      });
});
