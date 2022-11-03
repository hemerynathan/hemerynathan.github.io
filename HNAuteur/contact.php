<?php
include('header.php');
?>
    <head>
        <style>
            body{
                background-image: url(images/bgContact.jpg);
            }
            main section{
                font-size: large;
                height: auto;
                padding: 2%;
                margin: 10%;
                background-color: white;
                color: black;
            }
            main section h2{
                margin-bottom: 5%;
            }
            .reseaux{
                margin-top: 5%;
                display: flex;
                justify-content: space-around;
            }
        </style>
    </head>
        <main>
            <section>
                <h2>POUR ME CONTACTER</h2>
                <ul>
                    <li>- <a href="mailto:azerly.hn@gmail.com" target="_blank">Pour m'écrire par MAIL</a></li>
                    <li>- <a href="tel:+33783578958" target="_blank">Pour m'appeller</a></li>
                    <br>
                    <li><p>Je suis aussi présent sur Discord, Instagram et Amazon, pour un contact moins professionel et plus amical ! Rejoins ma communautée autours de la lecture juste ici
                        pour trouver gens avec qui partager tes passions ! <br> 
                    </p></li>
                </ul>
                <div class="reseaux">
                    <a href="https://www.instagram.com/?hl=fr" target="_blank"><img src="images/instagram.svg" alt="Instagram" width="100px" height="auto"></a>
                    <a href="https://discord.com" target="_blank"><img src="images/discord.svg" alt="Discord" width="100px" height="auto"></a>
                    <a href="https://www.amazon.fr" target="_blank"><img src="images/amazon.svg" alt="amazon" width="100px" height="auto"></a>
                </div>
                
            </section>
        </main>
<?php
include('footer.php');
?>