function salvarChamado(){
    //Este método serve para inserir e atualizar, assim como o servico em PHP
    var id = $("#cId").val();
    var titulo = $("#cTitulo").val();
    var data = $("#cData").val();
    var urgencia = $("#cUrgencia").val();
    var descricao = $("#cDescricao").val();
    var requerente = $("#selectReq").val();
    var tecnico = $("#selectTec").val();
 
    $.post(
        'service/chamado/salvar.ChamadoService.php',
        {id: id, titulo: titulo, data: data, urgencia: urgencia, descricao: descricao, idRequerente: requerente, idTecnico: tecnico},
        function(retorno){
            if(retorno != null){
                alert(retorno);
                listarChamados();
                window.location.href = "?p=relatorio";
            }
        }
    );

}

function listarChamados(){
    var url = 'service/chamado/listar.ChamadoService.php';
    var itens = '';

    $.ajax({
        type:"GET",
        url:url,
        dataType:"json",
        cache:false,
        error:function(){
            alert("Erro ao carregar tabela!");
        },
        success:function(retorno){

            var dados = retorno;

            for(var i = 0; i < dados.length; i++){

                itens += "<tr>";
                itens += "<td>"+ dados[i].id +"</td>";
                itens += "<td>"+ dados[i].titulo +"</td>";
                itens += "<td>"+ dados[i].data +"</td>";
                itens += "<td>"+ dados[i].urgencia +"</td>";
                itens += "<td>"+ dados[i].descricao +"</td>";
                itens += "<td>"+ dados[i].nomeReq +"</td>";
                itens += "<td>"+ dados[i].nomeTec +"</td>";
                itens += "<td>"+"<button onclick='deletarChamado("+dados[i].id+")'>Deletar</button>"+"</td>";
                itens += "</tr>";
            }

            $("#tabChamados tbody").html(itens);
            
        }
    });
}

function deletarChamado(id){

    $.ajax({
        url : "service/chamado/deletar.ChamadoService.php",
        type: "post",
        dataType: "text",
        data: {'id': id},
        success:function(retorno){

            alert(retorno);
            listarChamados();
            
        }
    });
}