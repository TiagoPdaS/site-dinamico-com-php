<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A simple PHP site">
    <meta name="keywords" content="PHP, site, dashboard example, palavras chaves do meu site aqui, SEO">
    <title>site dimanico</title>
</head>
<body>
    <header>
        <div class="center">
        <div class="logo">logomarca</div><!-- Logo da empresa -->
        <nav class="desktop">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="sobre.php">Serviços</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        <nav class="mobile">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="sobre.php">Serviços</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
            </div>
        </header>

        <section class="banner-principal">
            <div class="center">
            <form action="">
                <h2>Qual o seu melhor e-mail</h2>
                <input type="email" name="email" placeholder="Digite seu e-mail" required>
                <input type="submit" name="acao" value="Cadastrar">
            </form>
            </div>
        </section>

        <section class="descricao-autor">
            <div class="center">
            <div class="w50">
            <h2>Tiago PdaS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                  ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="w50">
            <h2>Tiago PdaS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                  ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="w50">
                <img src="images/bg-img.png" alt="">
            </div>
            </div>
        </section>
    
        <section class="especialidades">
            
            <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="box-especialidade">
                <h3>icone 1</h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="box-especialidade">
                <h3>icone 1</h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="box-especialidade">
                <h3>icone 1</h3>
                <h3>JS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

        </section>


        <section class="extras">
            <div class="center">
                <div class="w50">
                    <h2 class="title">Depoimentos</h2>
                    <div class="depoimento-single">
                        <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p class="nome-autor">Tiago PdaS</p>
                    </div>

                    <div class="depoimento-single">
                        <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p class="nome-autor">Tiago PdaS</p>
                    </div>

                    <div class="depoimento-single">
                        <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p class="nome-autor">Tiago PdaS</p>
                    </div>
                </div>

                <div class="w50">
                    <h2 class="title">Serviços</h2>
                    <div class="servicos">

                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Nemo totam possimus quidem eius nihil, voluptate obcaecati dolore expedita necessitatibus,
                             quod fuga eaque sit facilis ad eligendi quisquam assumenda laborum ducimus!
                        </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Nemo totam possimus quidem eius nihil, voluptate obcaecati dolore expedita necessitatibus,
                             quod fuga eaque sit facilis ad eligendi quisquam assumenda laborum ducimus!
                        </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Nemo totam possimus quidem eius nihil, voluptate obcaecati dolore expedita necessitatibus,
                             quod fuga eaque sit facilis ad eligendi quisquam assumenda laborum ducimus!
                        </li>
                    </ul>
                    </div>
                </div>

            </div>
        </section>

        <footer>
            div.center
            <p>Todos os direitos reservados - Tiago PdaS</p>
        </footer>
</body>
</html>