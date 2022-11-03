<?php
include('header.php');
?>
    <head>
        <style>
            body{
                background-image: url(images/bgAbout.jpg);
            }
            main section{
                height: auto;
                padding: 2%;
                margin: 10%;
                background-color: white;
                color: black;
                display: flex;
                justify-content: space-between;
            }
            main section .presentation h1{
                text-align: center;
                margin-bottom: 5%;
            }
            main section .presentation{
                width: 65%;
                font-weight: bolder;
            }
            img{
                width: auto;
                height: 450px;
            }
        </style>
    </head>
        <main>
            <section>
                <img src="images/moi.jpg" alt="me">
                <div class="presentation">
                    <h1>PRÉSENTATION</h1>
                    <p>
                        Bonjour à toutes et à tous, bienvenue sur mon site web.<br><br>
                        Je me présente, je suis HEMERY Nathan, auteur de livres dont de l'univers Cryptosyse, ainsi que novelliste. Écrivain sur mon temps libre, je suis 
                        avant tout développeur diplomé d'un BTS SIO. <br><br>
                        Petit, j'ai toujours aimé lire ainsi qu'inventer différents mondes imaginaire. Aujourd'hui, avec l'expérience acquise, il m'est possible de poser des mots
                        sur ce qui fait voyager, et de le partager avec vous : mes histoires. <br><br>
                        Si c'est la première fois que vous visitez ce site ou que vous entendez parler de moi, je vous souhaite la bienvenue ! <br>
                    </p>
                    <br><br>
                    <p>
                        Biographie : Né à Le Mans en France en 2002
                    </p>
                </div>
            </section>
        </main>
<?php
include('footer.php');
?>