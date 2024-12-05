<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- lien CDN de Font Awesome - font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--lien vers un fichier CSS personnalisé - custom css file link -->
    <link rel="stylesheet" href="restaurant1/styles.css">  

</head>

<body>


    

<?php include 'connection.php';
include 'demandesql.php'; 
$plats = get_plats();
?>


    <!-- début de la section d'en-tête - header section starts  -->
    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Maison Sakura 桜ハウス</a>


        <nav class="navbar">
            <a class="active" href="#home">Accueil</a>
            <a href="#dishes">Plats</a>
            <a href="#about">à propos</a>
            <a href="#menu">Catégorie</a>
            <a href="#review">revue</a>
            <a href="#order">commande</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header>



    <!-- formulaire de recherche - search form-->

    <form action="search.php" method="POST" id="search-form">
            <input type="search" placeholder="Search here . . ." name="search_query" id="search-box" required>
            <button type="submit" id="search-button">
                <i class="fas fa-search"></i>
            </button>
            <button type="button" id="close-button" onclick="clearSearch()">
                <i class="fas fa-times"></i>
            </button>
        </form>
    </div>


    <!--début de la section d'accueil - home section starts-->

    <section class="home" id="home">


        <div class="swiper-container home-slider">

            <div class="swiper-wrapper wrapper">
                <div class="slide">
                    <div class="content">
                        <span>Notre plat spécial</span>
                        <h3> Maki </h3>
                        <p> Du riz, du concombre, du poisson et de l'avocat enroulés dans une algue nori. </p>
                        <a href="#" class="btn">commandez maintenant</a>
                    </div>
                    <div class="image">
                        <img src="img/maki.webp" alt="">
                    </div>
                </div>

                <div class="swipper-slide slide">
                    <div class="content">
                        <span>Notre plat spécial</span>
                        <h3> Uramaki </h3>
                        <p> Sushi inversé avec le riz à l'extérieur et le nori à l'intérieur. </p>
                        <a href="#" class="btn">commandez maintenant</a>
                    </div>
                    <div class="image">
                        <img src="img/Uramaki.webp" alt="">
                    </div>
                </div>

                <div class="slide">
                    <div class="content">
                        <span>Notre plat spécial</span>
                        <h3> Sashimi </h3>
                        <p> Tranches fines de poisson cru, principalement du saumon, du thon ou du poulpe. </p>
                        <a href="#" class="btn">commandez maintenant</a>
                    </div>
                    <div class="image">
                        <img src="img/Sashimi.jpg" alt="">
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>
    </section>


    <!--début de la section des plats - dishes section starts-->

    <section class="dishes" id="dishes">

        <h3 class="sub-heading"> Nos plats </h3>
        <h1 class="heading"> Plats populaires </h1>

        <div class="box-container">

<?php foreach($plats as $plat):
?>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/<?php echo $plat->image ;?>" alt="">
                <h3> <?php echo $plat->libelle ;?>  </h3>
                <h4> <?php echo $plat->description ;?> </h4>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span> <?php echo $plat->prix ;?>€</span>
                <a href="#" class="btn"> Ajouter au panier </a>
            </div>

            <?php endforeach; ?>

    

        </div>
    </section>




    <!-- début de la section à propos - about section starts -->

    <section class="about" id="about">

        <h3 class="sub-heading"> à propos de nous </h3>
        <h1 class="heading"> Pourquoi nous choisir? </h1>

        <div class="row">

            <div class="image">
                <img src="img/sushimix.png" alt="">
            </div>

            <div class="content">
                <h3> la meilleure nourriture du pays </h3>
                <p> Sushi - saveur japonaise </p>
                <p> Le sushi est l'un des plats japonais les plus populaires, préparé avec du poisson frais et des fruits de mer. 
                    Dans notre restaurant, vous pouvez déguster des Maki, Uramaki, uramaki, Sashimi et d'autres variantes classiques, 
                    tous préparés avec des ingrédients de la plus haute qualité. Rafraîchissez vos papilles et savourez un sushi 
                    qui combine avec succès les traditions japonaises et les saveurs modernes. </p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-bicycle"></i>
                        <span> livraison gratuite </span>
                    </div>

                    <div class="icons">
                        <i class="fas fa-euro-sign"></i>
                        <span> paiements faciles </span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i> 
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn"> En savoir plus </a>
            </div>

        </div>
    </section>



    <!-- début de la section Catégorie - Category section starts-->

    <section class="menu" id="menu">

        <h3 class="sub-heading"> Catégorie </h3>
        <h1 class="heading"> Catégorie  </h1>

        
        <div class="box-container">
            <?php
            $categorys = get_categorys();
            foreach($categorys as $categore):                
            ?>            
            <div class="box">
                <a href="plats.php?id=<?php echo $categore->id;?>">
                    <div class="image">
                        <img src="img/<?php echo $categore->image;?>" alt="">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3> <?php echo $categore->libelle;?></h3>
                    </div>
                </a>                
            </div>
            <?php endforeach;?>
        </div>
    </section>
    <!-- début de la section des avis - review section starts -->

    <section class="review" id="review">

        <h3 class="sub-heading"> Avis des clients </h3>
        <h1 class="heading"> Ce qu'ils disent </h1>

        <div class="swiper-container review-slide">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/tina.jpg" alt="">
                        <div class="user-info">
                            <h3> Tina </h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p> Bonjour, je suis un peu pauvre, mais je ne suis pas indifférent à vos plats, tout est délicieux, merci. </p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/ryan.jpg" alt="">
                        <div class="user-info">
                            <h3> Ryan</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Bonjour, j'apprécie chacun de vos plats, et tous mes collègues travaillant dans les compagnies aériennes 
                        en sont ravis. Nous commandons toujours chez vous lorsque nous ne sommes pas en vol.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/grogu.webp" alt="">
                        <div class="user-info">
                            <h3> Dudu</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p> Bonjour, merci de rendre votre nourriture aussi délicieusement horrible. </p>
                </div>

            </div>

        </div>

    </section>



    <!--début de la section à propos - about section starts-->

    <section class="order" id="order">

        <h3 class="sub-heading"> Commandez maintenant </h3>
        <h1 class="heading"> Gratuit et rapide </h1>

        <form action="">

            <div class="inputBox">
                <div class="input">
                    <span> Votre nom </span>
                    <input type="text" placeholder="enter your name">
                </div>
                <div class="input">
                    <span> Votre numéro </span>
                    <input type="text" placeholder="enter your name">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span> Votre commande </span>
                    <input type="text" placeholder="enter food name">
                </div>
                <div class="input">
                    <span> Nourriture supplémentaire </span>
                    <input type="test" placeholder="extra with food">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span> Combien </span>
                    <input type="number" placeholder="how many orders">
                </div>
                <div class="input">
                    <span> Date et heure de fin </span>
                    <input type="datetime-local">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span> Votre adresse </span>
                    <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span> Votre message </span>
                    <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <input type="submit" value="order now" class="btn">

        </form>

    </section>



    <!--début de la section pied de page - footer selection starts-->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3><i class="fas fa-map-marker-alt"> Adresse </i>
                <a href="#"> 🇯🇵 Tokyo - Japon </a>
                <a href="#"> 🇹🇭 Bangkok - Thaïlande </a>
                <a href="#"> 🇺🇸 Washington - États-Unis </a>
                <a href="#"> 🇬🇪 Tbilissi - Géorgie </a>
                <a href="#"> 🇫🇷 Paris - France </a>
            </div>

            <div class="box">
                <h3>liens rapides</h3>
                <a href="#">Accueil</a>
                <a href="#">Plats</a>
                <a href="#">à propos"</a>
                <a href="#">Catégorie</a>
                <a href="#">Revue</a>
                <a href="#">Commande</a>
            </div>

            <div class="box">
                <h3>Informations de contact</h3>
                <a href="#">+33 12 34 56 78 </a>
                <a href="#">+33 12 31 23 12</a>
                <a href="#">duduofficiell@gmail.com</a>
                <a href="#">catastrophe@gmail.com</a>
                <a href="#">30 Rue de Poulainville, 80000 Amiens</a>
            </div>

            <div class="box">
                <h3>Suivez-nous</h3>
                <a href="#" class="logo">
                <i class="fab fa-telegram-plane"></i> Telegram
                </a>
                <a href="#" class="logo">
                <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="#" class="logo">
                <i class="fab fa-facebook-messenger"></i> Messenger
                </a>
                <a href="#" class="logo">
                <i class="fab fa-discord"></i> Discord
                </a>
                <a href="#" class="logo">
                <i class="fab fa-twitter"></i> Twitter
                </a>
               
               
                
        
            </div>

        </div>
        

        <div class="credit">roits d'auteur @ 2024 by <span>duduofficiell</span></div>

    </section>

    
    

    <!-- partie du chargeur - loader part 
<div class="loader-container">
    <img src="images/loader.gif" alt="">
    
</div>

<div class="swiper-pagination"></div>

    </div> -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!--fichier JS personnalisé - custom js file-->
    <script src="restaurant1/script.js"></script> 

</body>

</html>