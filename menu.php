<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-foundation-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">Foundation01</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-foundation-1">
            <ul class="nav navbar-nav">
                <li <?= ($uri=="home")?"class='active'":false; ?>><a href="<?=$url?>/home">Home</a></li>
                <li <?= ($uri=="empresa")?"class='active'":false; ?>><a href="<?=$url?>/empresa">Empresa</a></li>
                <li <?= ($uri=="produto")?"class='active'":false; ?>><a href="<?=$url?>/produto">Produtos</a></li>
                <li <?= ($uri=="servico")?"class='active'":false; ?>><a href="<?=$url?>/servico">Serviços</a></li>
                <li <?= ($uri=="contato")?"class='active'":false; ?>><a href="<?=$url?>/contato">Contato</a></li>
            </ul>
            <a class="btn btn-primary navbar-btn navbar-right" href="logout">Sair <span class="glyphicon glyphicon-log-out"></span></a>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>