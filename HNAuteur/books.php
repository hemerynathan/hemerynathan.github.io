<?php
include('header.php');
?>
    <head>
        <style>
            body{
                background-image: url(images/bgBooks.jpeg);
            }
            main section{
                height: auto;
                padding: 2%;
                margin: 10%;
                background-color: white;
                color: black;                
            }
            .promo{
                display: flex;
                justify-content: space-around;
                background-image: url(images/bgIndex.jpg);
                background-repeat: no-repeat;
                background-color: aqua;
                color: white;
                font-size: xx-large;
                padding: 1%;
                margin: -2.7%;
                margin-bottom: 2%;
                height: 250px;
                width: auto;
            }
            .toutLesLivres, .toutesLesNouvelles{
                display: flex;
                justify-content: space-around;
                align-items: center;
                flex-wrap: wrap;
            }
            .livre{
                border: 1px black solid;
                margin: 2%;
                padding: 1%;
                text-align: center;
            }
            img{
                width: 200px;
                height: auto;
            }
            .promo img{
                width: auto;
                height: 400px;
            }
            .promo h1{
                color: cyan;
                background: linear-gradient(to right, cyan 0%, yellow 100%);
	            -webkit-background-clip: text;
	            -webkit-text-fill-color: transparent;
            }
        </style>
    </head>
        <main>
            <section>
                <div class="promo">
                    <h1>CRYPTOSYSE</h1>
                    <img src="images/livre/mokup-Cryptosyse.png" alt="Mokup de Cryptosyse">
                </div>
                <h1>Livres</h1>
                <div class="toutLesLivres">
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-template.png" alt="Couverture">
                        <h3>Nom du livre</h3>
                    </div>
                </div>
                <h1>Nouvelles</h1>
                <div class="toutesLesNouvelles">
                    <div class="livre">
                        <img src="images/mokup-nouvelle.png" alt="Couverture">
                        <h3>L'usine de NoHell</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-nouvelle.png" alt="Couverture">
                        <h3>La petite Planète</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-nouvelle.png" alt="Couverture">
                        <h3>Une Boîte de Raviolie</h3>
                    </div>
                    <div class="livre">
                        <img src="images/mokup-nouvelle.png" alt="Couverture">
                        <h3>Le Chasseur et la Louve</h3>
                    </div>
                </div>
            </section>
        </main>
<?php
include('footer.php');
?>