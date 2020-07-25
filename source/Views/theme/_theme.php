<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Foda</title>

    <link rel="stylesheet" href="<?= url(CSS . "style.css")?>">
</head>
<body>
    <div class="container">
        <header>
            <div class="w25">
                <img src="<?= url(ASSETS . "img/logo_carrinho.png")?>" alt="Logo do projeto" class="logo">
            </div>
            <div class="w75">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Produtos</a></li>
                    <li><a href="">Casa</a></li>
                    <li><a href="">Contate-nos</a></li>
                </ul>
            </div>
        </header>
        <section class="body">
            <?= $v->section("content")?>
        </section>
        <footer>
        
        </footer>
    </div>
    
</body>
</html>