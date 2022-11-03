<?php
include('header.php');
?>
<head>
    <style>
        body{
            background-image: url(images/bgShop.jpg);
        }
        main section{
            height: auto;
            padding: 2%;
            margin: 10%;
            background-color: white;
            color: black;
        }
        h1{
            margin-bottom: 5%;
        }
        tr{
            display: flex;
        }
        td{
            margin-right: 5%;
            display: block;
            padding: 3%;
            justify-content: flex-end;
            width: 100%;
        }
    </style>
</head>
<main>
    <section>
        <h1>SE CONNECTER</h1>
        <table>
            <tr>
                <td>ADRESSE MAIL :</td>
                <td><input type="text" name="mail" require></td>
            </tr>
            <tr>
                <td>MOT DE PASSE :</td>
                <td><input type="text" name="mdp" require></td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="S'IDENTIFIER" class="button">
                </td>
            </tr>
        </table>
    </section>
</main>
<?php
include('footer.php');
?>
