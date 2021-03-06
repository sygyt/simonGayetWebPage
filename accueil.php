<?php
    require_once 'localisation.php';

?>

<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <!--font awesome 5.css-->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU'
        crossorigin='anonymous'>
    <!--website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <div id="header">
        <nav class="nav-wrapper teal lighten-2 ">
            <div class="container">
                <a href="#!" class="brand-logo white-text">SG</a>
                <a href="#" data-target="mobile-links" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="white-text" href="accueil.html">Acceuil</a></li>
                    <li><a class="white-text" href="experiencePro.html">Experience Pro</a></li>
                    <li><a class="btn-floating btn-small teal">
                            <i class="fab fa-facebook"></i> Sign in with facebook</a>
                        </a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-links">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
        <div class="row teal lighten-3">
            <br>
            <div class="container valign-wrapper">
                <div class="col s12 center-align">
                    <img src="ressources/images/photoCv.png" alt="Photo de profil" width="300" height="300" class="circle responsive-img z-depth-1">
                    <!-- notice the "circle" class -->
                </div>
                <div class="col s12 ">
                    <h4 class="white-text">
                        <strong>Simon GAYET</strong>
                    </h4>
                    <h6 class="grey-text text-lighten-4">
                        Diplomant Ingenieur Informatique et Gestion
                    </h6>
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m8 offset-m1 l8 offset-l2 ">


            <div id="presentation" class="section scrollspy">
                <h3 class="header light hide-on-small-only">Presentation</h3>
                <h3 class="header light center-align hide-on-med-and-up">Presentation</h3>
                <br>
                <div class="">
                    <div class="card-panel " style="max-width: 550px">
                        <div class="row">
                            <div class="col s12 m6 l4">
                                <span>
                                    <strong>Age : </strong>20 ans
                                </span>
                            </div>
                            <br class="hide-on-med-and-up">
                            <br class="hide-on-med-and-up">
                            <div class="col s12 m6 l4">
                                <span>
                                    <strong>Nationalité : </strong>Francais
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <p>
                                    <strong>Adresse : </strong>4 rue Émile Bonnet, 34090 MONTPELLIER, FRANCE
                                </p>
                            </div>
                        </div>


                        <div class="row  hide-on-med-and-down">
                            <button class="waves-effect waves-light btn-flat tooltipped" onclick="copyToClipboard('#phoneNumber')"
                                data-position="bottom" data-tooltip="Copier vers le presse papier">
                                <i class="material-icons left">smartphone</i><span type="text" id="phoneNumber">06
                                    21 66 44 41</span></button>
                            <a href="#" class="waves-effect waves-teal btn-flat tooltipped" data-position="bottom"
                                data-tooltip="contacter"><i class="material-icons left">mail</i>gayetsimon@gmail.com</a>
                        </div>
                        <div class="hide-on-large-only ">
                            <div class="row ">
                                <button class="waves-effect waves-teal btn-flat tooltipped" onclick="copyToClipboard('#phoneNumber')"
                                    data-position="top" data-tooltip="Copier vers le presse papier">
                                    <i class="material-icons left">smartphone</i><span type="text" id="phoneNumber">06
                                        21 66 44 41</span></button>
                            </div>
                            <div class="row ">
                                <a href="#" class="waves-effect waves-teal btn-flat tooltipped" data-position="bottom"
                                    data-tooltip="contacter"><i class="material-icons left">mail</i>gayetsimon@gmail.com</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div id="formation" class="section scrollspy">
                <div>
                    <h3 class="header light hide-on-small-only">Formation</h3>
                    <h3 class="header light center-align hide-on-med-and-up">Formation</h3>
                    <div>
                        <ul>
                            <li>
                                <div class="hide-on-med-and-up">
                                    <div class="center align teal lighten-3"><span class="white-text">2017 - 2020</span></div>
                                </div>
                                <div class="row valign-wrapper">
                                    <div class="col s4 m2 l2 center-align">
                                        <a href="http://www.polytech-montpellier.fr/"><img src="ressources/images/polytechMtpLogoBottom.jpeg"
                                                width="40" height="40" alt="" class="hide-on-large-only circle"></a>
                                        <a href="http://www.polytech-montpellier.fr/"><img src="ressources/images/polytechMtpLogoBottom.jpeg"
                                                width="60" height="60" alt="" class="hide-on-med-and-down circle"></a>
                                    </div>
                                    <div class="col s8 m6 l5 ">
                                        <h5>Polytech Montpellier</h5>
                                        <p>Formation Ingenieur informatique et gestion
                                        </p>
                                    </div>
                                    <div class="hide-on-small-only col m3 l4">
                                        <span class="badge">2017-2020</span>
                                    </div>
                                    <div class="col m1 l1 ">

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hide-on-med-and-up">
                                    <div class="center align teal lighten-3"><span class="white-text">2015 - 2017</span></div>
                                </div>
                                <div class="row valign-wrapper">
                                    <div class="col s4 m2 l2 center-align">
                                        <a href="https://www.polytech.univ-savoie.fr/"><img src="ressources/images/LogoPolytechChambeBottom.jpeg"
                                                width="40" height="40" alt="" class="hide-on-large-only circle"></a>
                                        <a href="https://www.polytech.univ-savoie.fr/"><img src="ressources/images/LogoPolytechChambeBottom.jpeg"
                                                width="60" height="60" alt="" class="hide-on-med-and-down circle"></a>
                                    </div>
                                    <div class="col s8 m6 l5 ">
                                        <h5>Polytech Annecy Chambery</h5>
                                        <p>Preparation ecole d'ingenieur cursus PEIP
                                        </p>
                                    </div>
                                    <div class="hide-on-small-only col m3 l4">
                                        <span class="badge">2015-2017</span>
                                    </div>
                                    <div class="col m1 l1 ">

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="hide-on-med-and-up">
                                    <div class="center align teal lighten-3"><span class="white-text">2012 - 2015</span></div>
                                </div>
                                <div class="row valign-wrapper">
                                    <div class="col s4 m2 l2 center-align">
                                        <a href="http://carriat.elycee.rhonealpes.fr/"><img src="ressources/images/LogoLyceeCarriat.jpeg"
                                                width="40" height="30" alt="" class="hide-on-med-and-up"></a>
                                        <a href="http://carriat.elycee.rhonealpes.fr/"><img src="ressources/images/LogoLyceeCarriat.jpeg"
                                                width="60" height="40" alt="" class="hide-on-small-only hide-on-large-only"></a>
                                        <a href="http://carriat.elycee.rhonealpes.fr/"><img src="ressources/images/LogoLyceeCarriat.jpeg"
                                                width="80" height="60" alt="" class="hide-on-med-and-down"></a>
                                    </div>
                                    <div class="col s5 m6 l5 ">
                                        <h5>Lycée Carriat</h5>
                                        <p>Filiare S SVT
                                        </p>
                                    </div>
                                    <div class="hide-on-small-only col m3 l4">
                                        <span class="badge ">2012-2015</span>
                                    </div>
                                    <div class="col s3 m1 l1 ">
                                        <div class="left-align">
                                            <a class="modal-trigger btn-flat btn-small" href="#modal1"><i class="small material-icons teal-text lighten-3-text">school</i></a>
                                        </div>
                                        <div id="modal1" class="modal">
                                            <div class="modal-content">
                                                <h4><i class="material-icons">star</i> Obtetion Baccalauréat </h4>
                                                <p>Filaire S SVT Option Physique-Chimie avec mention Bien</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Quitter</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <br>
            <div id="competence" class="section scrollspy">
                <div>
                    <h3 class="header light hide-on-small-only">Compétence informatique
                    </h3>
                    <h3 class="header light center-align hide-on-med-and-up">Compétence informatique
                    </h3>
                    <br>
                    <div class="row">
                        <div class="col l6">
                            <img class="responsive-img" src="ressources/images/aprenderroPgramacionWeb.jpg">
                            <ul class="collapsible z-depth-0 ">
                                <li>
                                    <div class="collapsible-header hoverable">
                                        <h6>Langage de programmation</h6>
                                    </div>
                                    <div class="collapsible-body">
                                        <div class="row">

                                            <div class="col s4 m4 l4 right-align">
                                                Javascript
                                            </div>
                                            <div class="col s8 m6 l7">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 80%"></div>
                                                </div>
                                            </div>


                                            <div class="col s4 m4 l4  right-align">
                                                Python
                                            </div>
                                            <div class="col s8 m6 l7">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 70%"></div>
                                                </div>
                                            </div>


                                            <div class="col s4 m4 l4 right-align">
                                                Php
                                            </div>
                                            <div class="col s8 m6 l7">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 70%"></div>
                                                </div>
                                            </div>

                                            <div class="col s4 m4 l4 right-align">
                                                SQL
                                            </div>
                                            <div class="col s8 m6 l7">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 80%"></div>
                                                </div>
                                            </div>


                                            <div class="col s4 m4 l4 right-align">
                                                PLSQL
                                            </div>
                                            <div class="col s8 m6 l7">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 30%"></div>
                                                </div>
                                            </div>

                                            <div class="col s4 m4 l4 right-align">
                                                Ada
                                            </div>
                                            <div class="col s8 m6 l7">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 40%"></div>
                                                </div>
                                            </div>


                                            <div class="col s4 m4 l4 right-align">
                                                Ocaml
                                            </div>
                                            <div class="col s8 m6 l7">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 30%"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <img class="responsive-img" src="ressources/images/outilBureautique.jpg">
                            <ul class="collapsible z-depth-0">
                                <li>
                                    <div class="collapsible-header hoverable">
                                        <h6>Outil bureautique</h6>
                                    </div>
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s12 center-align">Pack office</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 center-align">Outil apple</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 center-align">Outil Google</div>

                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="col l6">

                            <img class="responsive-img" src="ressources/images/outilsCollaboratifsCloud.jpg">
                            <ul class="collapsible z-depth-0">
                                <li>
                                    <div class="collapsible-header hoverable">
                                        <h6>Outil collaboratif</h6>
                                    </div>
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s12 center-align">Slack</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 center-align">Zotero</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 center-align "><a class="black-text waves-effect waves-light"
                                                    onclick="M.toast({html: '@gayetsimon', classes: 'rounded teal lighten-3'})">
                                                    Trello</a></div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 center-align">Google G Suit</div>
                                        </div>
                                        <div class="row ">
                                            <div class="col s12 center-align"> <a href="https://github.com/sygyt" class="black-text waves-effect waves-light tooltipped"
                                                    data-position="bottom" data-tooltip="Voir sur gitHub">Git</a></div>

                                        </div>
                                </li>
                            </ul>
                            <img class="responsive-img" src="ressources/images/outilWeb.jpg">
                            <ul class="collapsible z-depth-0">
                                <li>
                                    <div class="collapsible-header hoverable">
                                        <h6>Outil Web</h6>
                                    </div>
                                    <div class="collapsible-body">
                                        <div class="row">
                                            Framework CSS-JS : <div class="center-align">Materialise<br>Bootstrap<br>Jquery
                                            </div>
                                        </div>
                                        <div class="row">
                                            Conception, deploiement, maintient et analyse : <div class="center-align">Google
                                                sites<br>Google cloud platform<br>Google analytics<br>heroku<br>wordpress
                                            </div>
                                        </div>
                                        <div class="row">
                                            Base de donne : <div class="center-align">Oracle<br>Postgre
                                            </div>
                                        </div>
                                        <div class="row">
                                            Visuel : <div class="center-align">Gimp<br>Canva
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div id="langues" class="section scrollspy">
                <div>
                    <h3 class="header light hide-on-small-only">Langues</h3>
                    <h3 class="header light center-align hide-on-med-and-up">Langues</h3>
                    <br>
                    <div class="row">
                        <div class="col s12 m6">
                            <h4 class="center-align header light teal-text lighten-3-text">Anglais</h4>
                            <p><strong>Niveau : </strong>B2
                            </p>
                            <p><strong>Experience : </strong>6 semaine de stage en Irlande au sein d'une entreprise de
                                conseil en B2B. <br>
                                <strong>Aquis :</strong> Formation au business des pays anglosaxon, devellopement de
                                mon
                                anglais profesionnel.
                            </p>
                        </div>
                        <div class="col s12 m6">
                            <h4 class="center-align header light teal-text lighten-3-text">Espagnol</h4>
                            <p><strong>Niveau : </strong>A2
                            </p>
                            <p><strong>Experience : </strong>Nombreux voyage en espagne<br>
                                <strong>Aquis :</strong> Pricipalement l'espagnol pour des situation courrante.

                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <br>
            <div id="contact" class="section scrollspy">
                <div>
                    <h3 class="header light hide-on-small-only">Contacter</h3>
                    <h3 class="header light center-align hide-on-med-and-up">Contacter</h3>

                    <br>
                </div>
                <div class="row">
                    <form class="col s12" action="sendMail.php" method="POST">
                        <div class="row">
                            <div class="input-field col s11 m6">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="validate" name="email">
                                <label for="email">Votre adresse email</label>
                                <span class="helper-text" data-error="wrong" data-success="right"></span>
                            </div>
                            <div class="input-field col s10 offset-s1 m6">
                                <input id="input_text" type="text" class="validate" data-length="50" name="sujet">
                                <label for="input_text">Sujet</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="textarea2" class="materialize-textarea" class="validate" data-length="500" name="message"></textarea>
                                <label for="textarea2">Message</label>
                            </div>
                        </div>
                        <div class="right-align">
                            <button class="btn-flat waves-effect waves-teal" type="submit" name="action">Envoyer
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>


        <div class="col m3 l1 hide-on-small-only ">
            <div class="toc-wrapper pin-top" style="top: 0px;">
                <ul class="section table-of-contents ">
                    <li><a href="#presentation">Presentation</a></li>
                    <li><a href="#formation">Formation</a></li>
                    <li><a href="#competence">Comptence</a></li>
                    <li><a href="#langues">Langues</a></li>
                    <li><a href="#contact">Contacter</a></li>
                </ul>
            </div>
        </div>


    </div>

    <footer class="page-footer teal lighten-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">Made using Materialize framework.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                2018 Made by Gayet Simon
            </div>
        </div>
    </footer>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(
            function () {
                $('.sidenav').sidenav();

                $('.modal').modal();

                $('.collapsible').collapsible();

                $('.scrollspy').scrollSpy();

                $('.tooltipped').tooltip();
            }
        );
        $(document).ready(function () {
            $('input#input_text, textarea#textarea2').characterCounter();
        });


        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>
    <script>
        setTimeout(function () {
            var tocHeight = $('.toc-wrapper .table-of-contents').length
                ? $('.toc-wrapper .table-of-contents').height()
                : 0;
            var footerOffset = $('body > footer').first().length
                ? $('body > footer')
                    .first()
                    .offset().top
                : 0;
            var bottomOffset = footerOffset - tocHeight;

            if ($('#header').length) {
                console.log('Nav pushpin', $('#header').height());
                $('.toc-wrapper').pushpin({
                    top: $('#header').height(),
                    bottom: bottomOffset
                });
            } else if ($('#index-banner').length) {
                $('.toc-wrapper').pushpin({
                    top: $('#index-banner').height(),
                    bottom: bottomOffset
                });
            } else {
                $('.toc-wrapper').pushpin({
                    top: 0,
                    bottom: bottomOffset
                });
            }
        }, 100);
    </script>
</body>

</html>