function editar(idProduto, nomeProduto, marcaProduto, valorProduto)
{
    $("#IdEditarProduto").val(idProduto);
    $("#nomeEditar").val(nomeProduto);
    $("#marcaEditar").val(marcaProduto);
    $("#valorEditar").val(valorProduto);

}

$("#btnEditar").click(function(){

    var idProduto          = $("#IdEditarProduto").val();
    var nomeProduto        = $("#nomeEditar").val();
    var marcaProduto       = $("#marcaEditar").val();
    var valorProduto       = $("#valorEditar").val();

      if(validationEditar(nomeProduto, marcaProduto, valorProduto)){

        editarProduto(idProduto, nomeProduto, marcaProduto, valorProduto);

      }else{

  }

    return false;
});


function editarProduto(idProduto, nomeProduto, marcaProduto, valorProduto)
{
  $.ajax({
      type: "POST",
      url: "routes/editar.php",
      data:'idProduto='+idProduto+'&nomeProduto='+nomeProduto+'&marcaProduto='+marcaProduto+'&valorProduto='+valorProduto,

      success: function( result )
      {
          var response = jQuery.parseJSON(result);
          if(response.status){

            $('#modalEditar').modal('hide');
            // $.gritter.add({
            //     title: 'Confirmado',
            //     text: response.mensagem,
            //     image: '../../../libs/color_admin_intranet/assets/img/websigas.png',
            //     sticky: false,
            //     time: '3000'
            //   });
            refreshTable();
            limpacamposEditar();
          }else{

          }
      }
  });
}


function validationEditar(nomeProduto, marcaProduto, valorProduto)
{
    if ((!nomeProduto.length) ) {
        $.gritter.add({
          title: 'Erro na Edição!',
          text: 'Informe um nome para o Produto!',
          image: '../../../libs/color_admin_intranet/assets/img/websigas.png',
          sticky: false,
          time: '3000'
        });
        return false;
    }
    else if ((!marcaProduto.length) ) {
        $.gritter.add({
          title: 'Erro na Edição!',
          text: 'Informe uma Marca para o Produto!',
          image: '../../../libs/color_admin_intranet/assets/img/websigas.png',
          sticky: false,
          time: '3000'
        });
        return false;
    }
    else if ((!valorProduto.length) || (valorProduto == '0,00') ) {
        $.gritter.add({
          title: 'Erro na Edição!',
          text: 'Informe um Valor para o Produto!',
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

function limpacamposEditar(){

  $("#nomeEditar").val("");
  $("#marcaEditar").val("");
  $("#valorEditar").val("");

}
