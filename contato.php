<h1>Fale consco:</h1>
<?php
if($_POST):
?>
<div class="panel panel-success form-horizontal">
    <div class="panel-heading panel-title">
        Sua mensagem foi enviada com sucesso com os dados abaixo!
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-2 text-right">Nome:</label>
            <div class="col-sm-10 col-md-8"><?=$_POST['nome']?></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 text-right">Email:</label>
            <div class="col-sm-10 col-md-8"><?=$_POST['email']?></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 text-right">Assunto:</label>
            <div class="col-sm-10 col-md-8"><?=$_POST['assunto']?></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 text-right">Mensagem:</label>
            <div class="col-sm-10 col-md-8 text-justify"><?=$_POST['mensagem']?></div>
        </div>
    
            <div class="form-group">
                <div class="control-label col-sm-2"></div>
                <div class="col-sm-10 col-md-8">
                    <a href="<?=$url?>/contato" class="btn btn-success form-control"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a>
                </div>
            </div>
        </div>
</div>
<?php
else :
?>
<div class="panel panel-default">
    <div class="panel-heading panel-title">
        Deixe aqui o seu recado!
    </div>

    <form class="form-horizontal" action="<?=$url?>/contato" method="post">
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Nome:</label>
                <div class="col-sm-10 col-md-8">
                    <input name="nome" id="nome" class="form-control" type="text" placeholder="Nome Sobrenome" data-error="Digite um nome aqui" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10 col-md-8">
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input name="email" id="email" class="form-control" type="email" placeholder="seuemail@dominio.com" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="assunto">Assunto:</label>
                <div class="col-sm-10 col-md-8">
                    <input name="assunto" id="assunto" class="form-control" type="text" placeholder="Assunto" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="mensagem">Mensagem:</label>
                <div class="col-sm-10 col-md-8">
                    <textarea name="mensagem" id="mensagem" class="form-control" rows="3" placeholder="Descriçao do assunto" required></textarea>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="form-group">
                <div class="control-label col-sm-2"></div>
                <div class="col-sm-10 col-md-8">
                    <button type="submit" class="btn btn-primary form-control">Enviar <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
endif;