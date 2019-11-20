<body onload="listarPessoas()">
    <h1 class="titulo">Cadastro de Pessoa</h1>
        <div class="formulario">
            <form id="formPessoa">
                <input type="hidden" id="pId" name="pId"/>
                <div class="linha-form">
                    <div class="coluna-form">
                        <label>Nome:</label>
                    </div>
                    <div class="coluna-form">  
                        <input type="text" id="pNome" name="pNome"/>
                    </div>
                </div>
                <div class="linha-form">
                    <div class="coluna-form">
                        <label>Email:</label>
                    </div>
                    <div class="coluna-form">
                        <input type="text" id="pEmail" name="pEmail"/>
                    </div>
                </div>
                <div class="linha-form">
                    <div class="coluna-form">
                        <label>Cpf:</label>
                    </div>
                    <div class="coluna-form">
                        <input type="text" id="pCpf" name="pCpf" required="true"/>
                    </div>
                </div>
                <div class="linha-form">
                    <div class="coluna-form">
                        <label>Ativo:</label>
                    </div>
                    <div class="coluna-form">
                        <input type="checkbox" id="pAtivo" name="pAtivo" value="1" />
                    </div>
                </div>
                <div class="linha-form">
                    <div class="coluna-form">
                        <label>Tipo:</label>
                    </div>
                    <div class="coluna-form">
                        <input type="radio" id="pTipoR" name="pTipo" value="r" />Requerente
                        <input type="radio" id="pTipoT" name="pTipo" value="t" />Técnico
                    </div>
                </div>
                <div class="linha-form">
                    <center><input type="submit" class="btn-gravar" id="btn-gravarPessoa" value="Gravar"/></center>    
                </div>
            </form>
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