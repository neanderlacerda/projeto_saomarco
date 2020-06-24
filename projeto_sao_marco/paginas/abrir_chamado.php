<div class="row justify-content-md-center">

    <div class="col-8">
        <img src="logo.png" alt="falha ao carregar logo" align="left" width="38" height="62">

        <h1>Novo Chamado</h1>

        <p>Preencha o formulário abaixo:</p>

        <form action="?pagina=processar_formulario" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" name="nome" required placeholder="Digite seu nome" />
            </div>
            <div class="form-group">
                <label>E-mail:</label>
                <input type="email" class="form-control" name="email" required placeholder="Digite seu e-mail" />
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Selecione seu setor:</label>
                <select class="form-control" id="setor" name="setor">
                    <option>- Selecione -</option>
                    <option>Administração</option>
                    <option>Almoxarifado</option>
                    <option>Ambulatório</option>
                    <option>CCQ</option>
                    <option>Compras</option>
                    <option>Contas a pagar</option>
                    <option>Contas a receber</option>
                    <option>CQ</option>
                    <option>Custos</option>
                    <option>Embalagem</option>
                    <option>Engenharia</option>
                    <option>Expedição</option>
                    <option>Faturamento</option>
                    <option>Fieiras</option>
                    <option>Fiscal</option>
                    <option>Importação</option>
                    <option>Informática</option>
                    <option>Manutenção</option>
                    <option>Melhoria Contínua</option>
                    <option>PCP</option>
                    <option>Portaria</option>
                    <option>Produção</option>
                    <option>Química</option>
                    <option>Recebimento</option>
                    <option>Restaurante</option>
                    <option>RH</option>
                    <option>Segurança</option>
                    <option>SGI</option>
                    <option>Vendas</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Qual dispositivo apresenta problema:</label>
                <select class="form-control" id="dispositivo" name="dispositivo">
                    <option>- Selecione -</option>
                    <option>Computador</option>
                    <option>Impressora colorida</option>
                    <option>Impressora de etiquetas</option>
                    <option>Impressora preta</option>
                    <option>Projetor</option>
                </select>
            </div>
            <div class="form-group">
                <label>Informe o problema:</label>
                <textarea name="mensagem" class="form-control" required placeholder="Faça um resumo do problema..."></textarea>
            </div>
            <button type="submit" class="btn btn-Dark">Enviar</button>
        </form>

    </div>

</div>