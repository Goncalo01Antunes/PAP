<?php
// index.php ou outro nome que deseje para o ficheiro PHP
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoncasStore | Ecommerce</title>
    <link rel="stylesheet" href="styles/global.css">
</head>
<body>
    <div class="navbar">
        <div class="header-inner-content">
            <h1 class="logo">GONCA<span>STORE</span></h1>
            <nav>
                <ul>
                    <li><a href="paginicial.php">Home</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="conta.php">Conta</a></li>
                    <li><a href="privacidade.php">Política e Privacidade</a></li>
                </ul>
            </nav>
            <div class="nav-icon-container">
                <a href="carrinhocompras.php"><img src="images/cart.png" alt="Carrinho"/></a>
                <img src="images/menu.png" class="menu-button" alt="Menu"/>
            </div>
        </div>
    </div>

    <header>
        <div class="header--iner-content">
            <div class="header-bottom-side">
                <div class="header-bottom-side-left">
                    <h2>Dê Um Novo Estilo Ao Seu Trabalho</h2>
                    <p>
                        Sucesso nem sempre tem haver com grandeza. Tem haver com
                        consistência. Trabalho duro consistente supera o sucesso. A
                        grandeza virá.
                    </p>
                    <a href="computadorMSI.php"><button>Ver Agora &#8594;</button></a>
                </div>
                <div class="header-bottom-side-right"></div>
                <img src="images/gaming-msi-header.png" alt="MSI Header">
            </div>
        </div>
    </header>

    <main>
        <div class="gray-background">
            <div class="page-inner-content">
                <div class="cols cols-3">
                    <img src="images/products/product-1.png" alt="">
                    <a href="dell.php"><img src="images/products/dell.avif" alt=""></a>
                    <a href="lenovo.php"><img src="images/products/lenovo1.jpg" alt=""></a>
                </div>
            </div>
        </div>

        <div class="page-inner-content">
            <h3 class="section-title">Produtos Selecionados</h3>
            <div class="subtitle-underline"></div>
            <div class="cols cols-4">
                <!-- Produto 1 -->
                <div class="product">
                    <a href="produto1.php"><img src="images/products/product-4.png" alt=""></a>
                    <p class="product-name">Combo Gaming</p>
                    <p class="rate">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                    <p class="product-price">125€ <span>euros</span></p>
                </div>
                <!-- Produto 2 -->
                <div class="product">
                    <a href="rtx.php"><img src="images/products/rtx.jpg" alt=""></a>
                    <p class="product-name">Placa Gráfica</p>
                    <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                    <p class="product-price">2497€ <span>euros</span></p>
                </div>
                <!-- Produto 3 -->
                <div class="product">
                    <a href="produtoComandops5.php"><img src="images/products/product-6.png" alt=""></a>
                    <p class="product-name">Comando Ps5</p>
                    <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                    <p class="product-price">80€ <span>euros</span></p>
                </div>
                <!-- Produto 4 -->
                <div class="product">
                    <a href="cadeiragaming.php"><img src="images/products/product-7.png" alt=""></a>
                    <p class="product-name">Cadeira Gaming</p>
                    <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                    <p class="product-price">140€ <span>euros</span></p>
                </div>
            </div>
        </div>

        <div class="page-inner-content">
            <h3 class="section-title">Últimos Produtos</h3>
            <div class="subtitle-underline"></div>
            <div class="cols cols-4">
                <!-- Produtos individuais omitidos por brevidade, mas deve repetir a estrutura acima trocando .html por .php -->
                <!-- ... -->
            </div>
        </div>

        <div class="gray-background">
            <div class="header--iner-content">
                <div class="header-bottom-side exclusive-container">
                    <div class="header-bottom-side-left">
                        <h2>Smart Band 4</h2>
                        <p>
                            O Mi Smart Band 4 tem uma tela AMOLED 39.9% maior que o Mi Band
                            3, tela completamente digital com brilho ajustável, de tal modo
                            que tudo é claro ao máximo.
                        </p>
                        <a href="smartband.php"><button>Ver Agora &#8594;</button></a>
                    </div>
                    <div class="header-bottom-side-right"></div>
                    <img src="images/exclusive.png" alt="Smart Band">
                </div>
            </div>
        </div>
    </main>

    <script>
        const navbar = document.querySelector(".navbar");
        const menuButton = document.querySelector(".menu-button");

        menuButton.addEventListener('click', () => {
            navbar.classList.toggle("show-menu");
        });
    </script>
</body>
</html>
