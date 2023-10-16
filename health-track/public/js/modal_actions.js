function setDataModalEdit(id) {
  $.get("/cadastros/" + id, function (userData) {
    try {
      let formulario = document.getElementById("edit_data");
      let nome = document.getElementById("edit_nome");
      let email = document.getElementById("edit_email");
      let telefone = document.getElementById("edit_telefone");
      let mensagem = document.getElementById("edit_mensagem");
      let peso = document.getElementById("edit_peso");
      let altura = document.getElementById("edit_altura");

      if (formulario && nome && email && telefone && mensagem && peso && altura) {
        formulario.action = "/cadastros/" + id;
        nome.value = userData.nome;
        email.value = userData.email;
        telefone.value = userData.telefone;
        mensagem.value = userData.mensagem;
        peso.value = userData.peso;
        altura.value = userData.altura;
      } else {
        throw new Error("Um ou mais elementos não foram encontrados.");
      }
    } catch (error) {
      console.error("Erro ao preencher o formulário de edição.", error);
    }
  });
}

function setDataModalDelete(id) {
  try {
    let formulario = document.getElementById("delete_data");
    if (formulario) {
      formulario.action = "/cadastros/" + id;
    } else {
      throw new Error("Elemento de formulário de exclusão não foi encontrado.");
    }
  } catch (error) {
    console.error("Erro ao configurar o formulário de exclusão.", error);
  }
}
