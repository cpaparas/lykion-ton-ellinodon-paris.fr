<!DOCTYPE html>
<html style="" lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="logo.ico">
        <title>Lykion ton Ellinidon de Paris - Nos costumes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta property="og:title" content="Nos costumes - Lykion ton Ellinidon de Paris">
        <meta property="og:site_name" content="Lykion ton Ellinidon de Paris">
        <meta property="og:description" content="Lykion ton Ellinidon de Paris">
        <meta property="og:image" content="http://www.lykion-ton-ellinidon-paris.fr/logo36x36.png">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="Lykion ton Ellinidon de Paris.">
        <meta name="keywords" content="Lykion, ton, Ellinidon, de, Paris, Grèce,Hellas,Danse grecque,Danse,Danses grecques,Patrimoine culturel hellénique,Patrimoine immatériel,Hellénisme,Philhellénisme,Philhellènes,Association,Association loi 1901 ,Greek dances,Costumes grecs,Danse traditionnelle,Danse folklorique,Danse traditionnelle grecque,Danse folklorique grecque,Lykion,Lykeio ton Hellinidon,Lykeio,Culture,Macédoine,Thrace,Crète,Îles grecques,Dodécanèse,Épire,Cyclades">
        <meta name="robots" content="index,follow">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/mobile.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.7&appId=215408588573769";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <header>
            <h1 class="hidden noDisplay">Nos costumes</h1>
            <img src="img/global/emotionheader.jpg" />
        </header>
        <nav>
            <a class="mobile-nav" title="Ouvrir/fermer la navigation">Ouvrir/fermer la navigation</a>
            <ul class="nav nav--fit nav--block greybox">
                <li><a href="/">Accueil</a></li>
                <li><a href="presentation.html">Présentation</a></li>
                <li><a href="historique.html">Historique</a></li>
                <li><a href="cours.html">Cours de danse</a></li>
                <li><a href="evenements.html">Manifestations</a></li>
                <li class="current"><a href="costumes.html">Nos costumes</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="liens.html">Liens</a></li>
            </ul>
        </nav>
        <section class="content_full">
            <article>
                <h2>NOS COSTUMES</h2>
                <div class="home_mea">
                    <p>
                        La collection d’authentiques costumes grecs, de leurs bijoux et accessoires que possède le <strong>LE LYKION TON ELLINIDON DE PARIS</strong> est le fruit d’années de travail dans le domaine de la découverte, de la conservation et de la transmission du folklore national grec. 
                    </p>
                    <br/>
                    <p>
                        Les costumes ne sont pas uniquement destinés à être étudiés afin d’en saisir leur signification ni à devenir des pièces de musée : Le LYKION TON ELLINIDON leur permet de prendre corps, de leur donner une âme au moment des grands spectacles organisés chaque année en France dont les thèmes sont toujours issus de la tradition populaire.
                    </p>
                    <br/>
                    <p>
                        Tous les trésors de sa collection furent présentés par  le LYKION TON ELLINIDON PARIS en 2010 à l’UNESCO à l’occasion du centenaire de la création du Lykion d’Athènes. Avec beaucoup d'émotion, les danseurs ont porté ces costumes uniques, évoquant non seulement la richesse, la diversité et la spécificité des tenues traditionnelles grecques mais aussi en rendant hommage aux dizaines de femmes bénévoles qui ont travaillé sans relâche durant toutes ces années et contribué ainsi à la sauvegarde de la culture populaire  grecque.
                    </p>
                </div>
                <div id="costumes">
                    <?php
                        $json_source = file_get_contents('http://refonte.lykion-ton-ellinidon-paris.dev/costumes.json');

                        $json_data = json_decode($json_source);
                        if ($json_data) {
                            foreach($json_data as $v){
                               
                               echo '<div id="single_costume">
                                    <img class="img--round" src="img/costumes/'.$v->img_src.'" title="'.$v->img_title.'" alt="'.$v->img_title.'" />'.$v->img_title.'
                                </div>';
                            }
                        }
                    ?>
                </div>
            </article>
        </section>
        <section id="slide" class="slideshow">
            <img class="img--round" src="" title="" alt="" />
        </section>
        <!--section class="leftside">
            <article>
                <div class="fb-page" data-href="https://www.facebook.com/Lykion-Ton-Ellinidon-Paris-1461200997535180" data-tabs="journal" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Lykion-Ton-Ellinidon-Paris-1461200997535180" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Lykion-Ton-Ellinidon-Paris-1461200997535180">Lykion Ton Ellinidon Paris</a></blockquote></div>
            </article>
        </section-->
        <footer>
            <ul class="nav nav--fit nav--block greybox">
                <li>
                    <a title="© Λύκειο των Ελληνίδων ΠΑΡΙΣΙ" href="http://www.lykion-ton-ellinidon-paris.fr/">© Lykion ton Ellinidon de Paris <span id="year"></span></a>
                </li>
            </ul>
        </footer>
    </body>
</html>