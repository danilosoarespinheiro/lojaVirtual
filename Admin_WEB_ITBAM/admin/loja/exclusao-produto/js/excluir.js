function excluir(idProduto)
{
  swal({
    title: "Tem certeza?",
    text: "Deseja excluir este Produto?",
    type: "success",
    showCancelButton: true,
    confirmButtonClass: 'btn-success',
    confirmButtonText: 'Excluir!',
    cancelButtonText: "Cancelar!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm) {
                if ((isConfirm) ) {

                    $.ajax({
                       type: "POST",
                       url: "routes/excluir.php",
                       data: 'idProduto='+idProduto,
                       success: function(result)
                       {
                         var response = jQuery.parseJSON(result);
                          if(response.status){
                            swal("Concluído!", "O Produto foi excluído", "success");

                            // $.gritter.add({
                            //     title: 'Confirmado',
                            //     text: response.mensagem,
                            //     image: '../../../libs/color_admin_intranet/assets/img/websigas.png',
                            //     sticky: false,
                            //     time: '3000'
                            //   });
                            refreshTable();
                       }
                     }
                   });
                }

                else {
                    swal("Não Concluído", "O produto não foi excluído", "error");
                }
            });
}
