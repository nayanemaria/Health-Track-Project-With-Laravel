document.getElementById('telefone').addEventListener('input', function (e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
});

document.getElementById('edit_telefone').addEventListener('input', function (e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
});

$(document).ready(function () {
    $('#peso').inputmask('999.99', { placeholder: '0' });
    $('#edit_peso').inputmask('999.99', { placeholder: '0' });
    $('#altura').inputmask('9.99', { placeholder: '0' });
    $('#edit_altura').inputmask('9.99', { placeholder: '0' });
});
