$('#email-subscription').submit(function(e) {
    e.preventDefault();
    var formulario = $(this);
    var retorno = inserirEmail(formulario);
})

function inserirEmail(dados) {
    $.ajax({
        type: "POST",
        data: dados.serialize(),
        url: "inserir_email.php" + location.search,
        async: false
    }).done (function(data){
            $sucesso = $.parseJSON(data)["sucesso"];
            $mensagem = $.parseJSON(data)["mensagem"];
            
            if ($sucesso) {
                $('#mensagem').html($mensagem);
                $("#email-subscription").trigger('reset'); //limpa o conteúdo do campo após apresentar a mensagem.
            } else {
                $('#mensagem').html($mensagem);
            }
    }).fail (function(){
        $('#mensagem').html("Erro no sistema. Tente mais tarde.");
    }).always (function(){
        $('#mensagem').show();
    });
}