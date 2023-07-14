<!DOCTYPE html>
<html>

<head>
    <title>Cabeçalho com Fundo de Imagem</title>
    <style>
        /* Estilos para o cabeçalho */
        header {
            width: 100%;
            max-height: 40vh;
            background-image: url('palhoca/palhoca3.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Estilos para o conteúdo do cabeçalho */
        .header-content {
            padding: 40px;
            color: #fff;
        }

        /* Estilos para o menu horizontal */
        ul.menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        ul.menu li {
            float: left;
        }

        ul.menu li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.menu li a:hover {
            background-color: #111;
        }

        /* Estilos para o menu de hambúrguer */
        .menu-hamburguer {
            display: none;
            background-color: #333;
            overflow: hidden;
        }

        .menu-hamburguer a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Estilos para o botão de hambúrguer */
        .hamburguer-btn {
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            padding: 15px 20px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        /* Estilos para o menu responsivo */
        @media screen and (max-width: 600px) {
            ul.menu li:not(:first-child) {
                display: none;
            }

            ul.menu li.hamburguer-icon {
                display: block;
                float: right;
            }

            .menu-hamburguer.responsive {
                position: relative;
                display: block;
            }

            .menu-hamburguer.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="header-content">
            <h1>Sala do Empreendedor</h1>
            <p>Texto de descrição ou informações adicionais.</p>
        </div>

        </head>

        <body>
            <ul class="menu">
                <li><a href="index.php">Início</a></li>
                <li><a href="saladigital.php">Sala Digital</a></li>
                <li><a href="contato.php">Contato</a>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="agenda2023.php">Agenda 2023</a></li>
                <li><a href="empregapalhoca.php">Emprega Palhoça</a></li>
                <li><a href="licitacoes.php">Licitações</a></li>
                <li><a href="gestaoemfinancas.php">Gestão em Finanças</a></li>
                <li><a href="notafiscalnacional.php">Nota Fiscal Nacional</a></li>
                <li class="hamburguer-icon">
                    <a href="javascript:void(0);" class="hamburguer-btn" onclick="toggleMenu()">☰</a>
                </li>
            </ul>

            <div class="menu-hamburguer" id="menuHamburguer">
                <a href="index.php">Início</a>
                <a href="saladigital.php">Sala Digital</a>
                <a href="contato.php">Contato</a>
                <a href="sobre.php">Sobre Nós</a>
                <a href="agenda2023.php">Agenda 2023</a>
                <a href="empregapalhoca.php">Emprega Palhoça</a>
                <a href="licitacoes.php">Licitações</a>
                <a href="gestaoemfinancas.php">Gestão em Finanças</a>
                <a href="notafiscalnacional.php">Nota Fiscal Nacional</a>
            </div>

            <script>
                function toggleMenu() {
                    var menu = document.getElementById("menuHamburguer");
                    if (menu.className === "menu-hamburguer") {
                        menu.className += " responsive";
                    } else {
                        menu.className = "menu-hamburguer";
                    }
                }
            </script>
        </body>

</html>

</header>

<!-- Resto do conteúdo da página -->
</body>

</html>