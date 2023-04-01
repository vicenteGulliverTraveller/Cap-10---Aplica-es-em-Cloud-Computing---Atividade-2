$(document).ready(function() {
    $('form').submit(function(event) {
      event.preventDefault();
      
      // Obter valores dos campos do formulário
      var nomeHotel = $('#nome').val();
      var precoDiaria = $('#preco').val();
      var estado = $('#estado').val();
      
      // Validar se o preço da diária é um número
      if(isNaN(precoDiaria)) {
        alert('Por favor, digite um valor numérico para o preço da diária.');
        return;
      }
      
      // Validar se o nome do hotel não contém números
      if(/\d/.test(nomeHotel)) {
        alert('Por favor, digite um nome de hotel válido, sem números.');
        return;
      }
      
      // Enviar requisição AJAX
      $.ajax({
        url: 'request.php',
        type: 'POST',
        data: {
          nome: nomeHotel,
          preco: precoDiaria,
          estado: estado
        },
        success: function(response) {
          // Exibir mensagem de sucesso ou erro, de acordo com a resposta do servidor
          if(response === 'success') {
            alert('Formulário enviado com sucesso!');
          } else {
            console.log(response);
          }
        },
        error: function() {
          alert('Houve um erro ao enviar o formulário. Por favor, tente novamente mais tarde.');
        }
      });
    });
  });