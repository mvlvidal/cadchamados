<body onload="listarPessoas()">
    <h1 class="titulo">Cadastro de Pessoa</h1>
        <div class="formulario">
            <input type="hidden" id="pId" />
            <div class="linha-form">
                <div class="coluna-form">
                    <label>Nome:</label>
                </div>
                <div class="coluna-form">  
                    <input type="text" id="pNome"/>
                </div>
            </div>
            <div class="linha-form">
                <div class="coluna-form">
                    <label>Email:</label>
                </div>
                <div class="coluna-form">
                    <input type="text" id="pEmail"/>
                </div>
            </div>
            <div class="linha-form">
                <div class="coluna-form">
                    <label>Cpf:</label>
                </div>
                <div class="coluna-form">
                    <input type="text" id="pCpf"/>
                </div>
            </div>
            <div class="linha-form">
                <div class="coluna-form">
                    <label>Ativo:</label>
                </div>
                <div class="coluna-form">
                    <input type="checkbox" id="pAtivo">
                </div>
            </div>
            <div class="linha-form">
                <div class="coluna-form">
                    <label>Tipo:</label>
                </div>
                <div class="coluna-form">
                    <input type="radio" id="pTipoR" name="pTipo">Requerente</input>
                    <input type="radio" id="pTipoT" name="pTipo">Técnico</input>
                </div>
            </div>
            <div class="linha-form">
                <center><button onclick="salvarPessoa();" class="btn-gravar">Gravar</button></center>    
            </div>
        </div>
        <table id="tabPessoas" class="tabela">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Ativo</th>
                <th>Tipo</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
</body>