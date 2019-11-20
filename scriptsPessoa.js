function teste(){
    var form =  new FormData($("#formPessoa")[0]);

        console.log(form.get('pAtivo'));
}


$(document).ready(function(){    
    $("#btn-gravarPessoa").click(function(){

        //Este método serve para inserir e atualizar, assim como o servico em PHP

        var form =  new FormData($("#formPessoa")[0]);

        var ret = '';

        if(form.get('pAtivo') != 1){
            form.set('pAtivo', 0);
        }
        
        
        /*
        var id = $("#pId").val();
        var nome = $("#pNome").val();
        var email = $("#pEmail").val();
        var cpf = $("#pCpf").val();

        if($("#pAtivo").is(':checked')){
            var ativo = 1;
        }else{
            var ativo = 0;
        }

        if($("#pTipoR").is(':checked')){
            var tipo = 'r';
        }else if($("#pTipoT").is(':checked')){
            var tipo = 't';
        }
        */

    
        $.ajax({
            url:'service/pessoa/salvar.PessoaService.php',
            type:'post',
            dataType:'json',
            cache:false,
            processData:false,
            contentType:false,
            data:form,
            success:function(retorno){
                ret = retorno;    
            }
        });

        listarPessoas(); 

        if(ret != null){              
            window.location.href = "?p=cadpessoa";  
            return false;  
                  
        }

        
        
    });
});

function listarPessoas(){
    var url = 'service/pessoa/listar.PessoaService.php';
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
                
                $ati = dados[i].ativo == 1 ? "Sim" : "Não";
                $tip = dados[i].tipo == "r" ? "Requerente" : "Técnico"; 

                itens += "<tr>";
                itens += "<td>"+ dados[i].id +"</td>";
                itens += "<td>"+ dados[i].nome +"</td>";
                itens += "<td>"+ dados[i].email +"</td>";
                itens += "<td>"+ dados[i].cpf +"</td>";
                itens += "<td>"+ $ati +"</td>";
                itens += "<td>"+ $tip +"</td>";
                itens += "<td>"+"<button onclick='selecionarPessoa("+dados[i].id+")'>Editar</button>"+"</td>";
                itens += "</tr>";
            }

            $("#tabPessoas tbody").html(itens);
            
        }
    });
}

function selecionarPessoa(id){

    $.ajax({
        url : "service/pessoa/buscaId.PessoaService.php",
        type: "post",
        dataType: "json",
        data: {'id': id},
        success:function(retorno){

            var dados = retorno;

            $("#pId").val(dados.id);
            $("#pNome").val(dados.nome);
            $("#pCpf").val(dados.cpf);
            $("#pEmail").val(dados.email);
            
            if(dados.ativo == 1){
                $("#pAtivo").prop("checked", true);    
            }else{
                $("#pAtivo").prop("checked", false);    
            }

            if(dados.tipo == "t"){
                $("#pTipoT").prop("checked", true);
                $("#pTipoR").prop("checked", false);
            }else if(dados.tipo == "r"){
                $("#pTipoR").prop("checked", true);
                $("#pTipoT").prop("checked", false);
            }
            
        }
    });

}

function listarRequerentes(){
    var url = 'service/pessoa/listarReq.PessoaService.php';
    var itens = '';

    $.ajax({
        type:"GET",
        url:url,
        dataType:"json",
        cache:false,
        error:function(){
            alert("Erro ao alimentar campo select de requerentes!");
        },
        success:function(retorno){

            var dados = retorno;

            itens += "<option>Selecione</option>";

            for(var i = 0; i < dados.length; i++){
                
                itens += "<option value='"+ dados[i].id +"'>"+ dados[i].nome +"</option>";
                
            }

            $("#selectReq").html(itens);
            
        }
    });
}

function listarTecnicos(){
    var url = 'service/pessoa/listarTec.PessoaService.php';
    var itens = '';

    $.ajax({
        type:"GET",
        url:url,
        dataType:"json",
        cache:false,
        error:function(){
            alert("Erro ao alimentar campo select de técnicos!");
        },
        success:function(retorno){

            var dados = retorno;

            itens += "<option>Selecione</option>";

            for(var i = 0; i < dados.length; i++){
                
                itens += "<option value='"+ dados[i].id +"'>"+ dados[i].nome +"</option>";
                
            }

            $("#selectTec").html(itens);
            
        }
    });
}

function carregarCampos(){
    listarRequerentes();
    listarTecnicos();
}