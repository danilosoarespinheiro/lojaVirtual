$(function () {

      $( '#btnCadProduto' ).click(function(){

          var nome           = $("#nomeCadastro").val();
          var marca          = $("#marcaCadastro").val();
          var valor          = $("#valorCadastro").val();

          if(validation(nome, marca, valor)){

                cadastro(nome, marca, valor);
          }
          else{

          }

          return false;
      });

});


function cadastro(nome, marca, valor)
{
  $.ajax({
      type: "POST",
      url: "routes/cadastro.php",
      data: 'nome='+nome+'&marca='+marca+'&valor='+valor,
      success: function(data)
      {
          var response = jQuery.parseJSON(data);

          if(response.status){
              $.gritter.add({
                title: 'Sucesso!',
                text: response.mensagem,
                image: '../../../libs/color_admin_intranet/assets/img/websigas.png',
                sticky: false,
                time: '3000'
              });

              limpacampos();
              refreshTable();
          }else {
            $.gritter.add({
              title: 'Erro!',
              text: response.mensagem,
              image: '../../../libs/color_admin_intranet/assets/img/websigas.png',
              sticky: false,
              time: '3000'
            });
          }
      }
  });
}

function validation(nome, marca, valor)
{
    if (!nome.length) {
        $.gritter.add({
          title: 'Erro no Cadastro!',
          text: 'Informe um Nome para o Produto!',
          image: '../../../libs/color_admin_intranet/assets/img/websigas.png',
          sticky: false,
          time: '3000'
        });
        return false;
    }
    else if (!marca.length) {
        $.gritter.add({
          title: 'Erro no Cadastro!',
          text: 'Informe uma marca para o Produto!',
          image: '../../../libs/color_admin_intranet/assets/img/websigas.png',
          sticky: false,
          time: '3000'
        });
        return false;
    }
    else if ((!valor.length) || (valor == '0.00')) {
        $.gritter.add({
          title: 'Erro no Cadastro!',
          text: 'Informe um valor para o Produto!',
          image: '../../../libs/color_admin_intranet/assets/img/websigas.png',
          sticky: false,
          time: '3000'
        });
        return false;
    }
    else{
        return true;
    }
}


function limpacampos()
{
  $("#nomeCadastro").val('');
  $("#marcaCadastro").val('');
  $("#valorCadastro").val('');
}
