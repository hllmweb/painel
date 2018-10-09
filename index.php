<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel</title>

    <!--css-->
    <link rel="stylesheet" href="css/painel.css?v=<?= time(); ?>">

    <!--plugins-->
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
    <div id="main" data-role="main">
        <div id="sidebar-menu">
            
            <nav id="navegation">
                <ul class="navegation-list" data-role="navegation">
                    <li>
                        <a href="">
                            <span class="icon-menu"><i class="fas fa-tachometer-alt"></i></span> 
                            <span class="text-menu">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon-menu"><i class="fas fa-users"></i></span> 
                            <span class="text-menu">Clientes</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon-menu"><i class="fas fa-archive"></i></span> 
                            <span class="text-menu">Produtos</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon-menu"><i class="fas fa-edit"></i></span> 
                            <span class="text-menu">Pedidos</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon-menu"><i class="fas fa-cogs"></i></span>
                            <span class="text-menu">Administração</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon-menu"><i class="fas fa-reply"></i></span>
                            <span class="text-menu">Sair</span>
                        </a>
                    </li>                
                </ul>
            </nav>
        </div>



        <div id="content">
            <div id="header-top"> 
                <a href="#" class="btn-menu"><i class="fas fa-align-left"></i></a>
                <form id="formBusca"> 
                    <input type="text" class="input-busca" placeholder="Pesquisar...">
                    <button type="submit" class="btn-busca"><i class="fas fa-search"></i></button>
                </form>
                <ul class="top-menu">
                    <li>Nome da Pessoa</li>
                </ul>
            </div>
            <div class="row grid grid-col-3">
                <div class="widget">bloco #01</div>
                <div class="widget">bloco #02</div>
                <div class="widget">bloco #03</div>
            </div>
            <div class="grid grid-col-2">
                <div class="widget">bloco #04</div>
                <div class="widget">bloco #05</div>
            </div>           
            <p>Aqui vai o resto do conteudo</p>
            <p>Aqui vai o resto do conteudo</p>
            <p>Aqui vai o resto do conteudo</p>
            <p>Aqui vai o resto do conteudo</p>
            <p>Aqui vai o resto do conteudo</p>
        </div>
    </div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/js.js?v=<?= time(); ?>"></script>
</body>
</html>