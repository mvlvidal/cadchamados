<body onload="carregarCampos()">
    <h1 class="titulo">Cadastro de Chamado</h1>
        <div class="formulario">
            <input type="hidden" id="cId" />
            <div class="linha-form">
                <div class="coluna-form">
                    <label>Titulo:</label>
                </div>
                <div class="coluna-form">  
                    <input type="text" id="cTitulo" required/>
                </div>
            </div>
            <div class="linha-form">
                <div class="coluna-form">
                    <label>Data:</label>
                </div>
                <div class="coluna-form">
                    <input type="date" id="cData"/>
                </div>
            </div>
            <div class="linha-form">
                <div class="coluna-form">
                    <label>Urgencia:</label>
                </div>
                <div class="coluna-form">
                    <select id="cUrgencia">
                        <option>Selecione</option>
                        <option value="Baixa">Baixa</option>
                        <option value="Média">Média</option>
                        <option value="Alta">Alta</option>
                    </select>
                </div>
            </div>
            <div class="linha-form">
                <div class="coluna-form">
                    <label>Requerente:</label>
                </div>
                <div class="coluna-form">
                    <select id="selectReq">
                    </select>
                </div>
            </div>
            <div class="linha-form">
                <div class="coluna-form">
                    <label>Técnico:</label>
                </div>
                <div class="coluna-form">
                    <select id="selectTec">
                    </select>
                </div>
            </div>
            <div class="linha-form">
                <div class="coluna-form-textarea">
                    <label>Descrição:</label>
                </div>
                <div class="coluna-form-textarea">
                    <textarea id="cDescricao"></textarea>
                </div>
            </div>
            <div class="linha-form">
                <center><button onclick="salvarChamado()" class="btn-gravar">Gravar</button></center>    
            </div>
        </div>   
</body>