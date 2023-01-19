<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Balises META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS custom -->
    <link rel="stylesheet" href="/css/main.css">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/0c87a70838.js"></script>

    <!-- Font CSS -->
    <link href="//db.onlinewebfonts.com/c/6aa06a9a432b8417171f60d8351aa310?family=Torus+Notched" 
        rel="stylesheet" 
        type="text/css"/>

    <!-- Onglet de la page -->
    <title>SNake - Accueil</title>
</head>
<body>
    <!-- Ongle coté -->
    <div class="onglet-side">
        <a href="#sec1" class="active"></a>
        <a href="#sec2"></a>
        <a href="#sec3"></a>
        <a href="#sec4"></a>
    </div>

    <!-- Header - Barre de navigation -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="/img/logo-SNake.png" alt="" class="Snake">
            </div>
            <div class="onglets">
                <ul>
                    <li><a class="hover-underline-animation" href="#sec1">Accueil</a></li>
                    <li><a class="hover-underline-animation" href="#sec2">À propos</a></li>
                    <li><a class="hover-underline-animation" href="#sec3">Systèmes Numériques</a></li>
                    <li><a class="hover-underline-animation" href="#sec4">Activités</a></li>
                    <li class="compte"><a href="connexion.php">Compte</a></li>
                </ul>
            </div>
            <div class="logo">
                <img src="img/menu.png" alt="menu hamburger" class="menu-hamburger">
            </div>
        </div>
    </header>

    <!-- Section 1 - Accueil -->
    <div class="sec1" id="sec1">
        <div class="container">
            <h1>Systèmes<br>Numériques</h1>
            <a href="#sec2">
                <button>
                En savoir plus
                <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
            </button></a>
            <div class="bg-responsive">
                <img src="/img/15.png" alt="">
            </div>
        </div>
    </div>

    <!-- Section 2 - À propos -->
    <div class="sec2" id="sec2">
        <div class="container">
            <div class="title">
                <h1>À propos</h1>
            </div>
            <div class="content content-top">
                <div class="left">
                    <div class="titre">
                        <h2>Projet SNake</h2>
                    </div>
                    <div class="separateur"></div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non suscipit corrupti repellat pariatur, laboriosam omnis dolor, maxime soluta maiores expedita porro labore recusandae ea, illo tempora aperiam odit perspiciatis sequi.
                    </p>
                </div>
                <div class="right">
                    <img src="/img/ordinateur-dessin.png" alt="">
                </div>
            </div>
            <div class="content content-bottom">
                <div class="left">
                    <img src="/img/travail-dessin.png" alt="">
                </div>
                <div class="right">
                    <div class="titre">
                        <h2>Mise en oeuvre</h2>
                    </div>
                    <div class="separateur"></div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non suscipit corrupti repellat pariatur, laboriosam omnis dolor, maxime soluta maiores expedita porro labore recusandae ea, illo tempora aperiam odit perspiciatis sequi.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3 - Systèmes Numériques -->
    <div class="sec3" id="sec3">
        <section>
            <div class="down">
                <img src="/img/pique-down.svg" alt="">
            </div>
            <div class="container">
                <div class="title">
                    <h1>Systèmes Numériques</h1>
                </div>
                <div class="content">
                    <div class="left">
                        <div class="titre">
                            <h2>Fillière</h2>
                        </div>
                        <div class="separateur"></div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non suscipit corrupti repellat pariatur, laboriosam omnis dolor, maxime soluta maiores expedita porro labore recusandae ea, illo tempora aperiam odit perspiciatis sequi.
                        </p>
                    </div>
                    <div class="right">
                        <div class="titre">
                            <h2>Débouchés</h2>
                        </div>
                        <div class="separateur"></div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non suscipit corrupti repellat pariatur, laboriosam omnis dolor, maxime soluta maiores expedita porro labore recusandae ea, illo tempora aperiam odit perspiciatis sequi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="up">
                <img src="/img/pique-up.svg" alt="">
            </div>
        </section>
    </div>
    <!-- Section 4 - Autres -->
    <div class="sec4" id="sec4">
        <div class="container">
            <div class="title">
                <h1>Activités</h1>
            </div>
        </div>
    </div>

    <!-- Pied de page -->
    <footer>
        <div class="container">
            
        </div>
    </footer>
</body>

<script>
    const menuHamburger = document.querySelector(".menu-hamburger")
    const navLinks = document.querySelector(".onglets")

    menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu')
    })
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript">
    $(document).on("click", ".onglet-side a", function () {
        $(this).addClass("active").siblings().removeClass("active")
    })
</script>

</html>