<?php
include('header.php');
?>
<head>
    <style>
        body{
            background-image: url(images/bgRegister.jpg);
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
        }
    </style>
</head>
<main>
    <section>
        <h1>S'ENREGISTRER</h1>
        <table>
            <tr>
                <td>NOM :</td>
                <td><input type="text" name="nom" require></td>
            </tr>
            <tr>
                <td>PRENOM :</td>
                <td><input type="text" name="prenom" require></td>
            </tr>
            <tr>
                <td>AGE :</td>
                <td><input type="text" name="age" require></td>
            </tr>
            <tr>
                <td>ADRESSE MAIL :</td>
                <td><input type="text" name="mail" require></td>
            </tr>
            <tr>
                <td>PSEUDONYME :</td>
                <td><input type="text" name="pseudo"></td>
            </tr>
            <tr>
                <td>MOT DE PASSE :</td>
                <td><input type="text" name="mdp" require></td>
            </tr>
            <tr>
                <td>CONFIRMER MOT DE PASSE :</td>
                <td><input type="text" name="validerMDP" require></td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="S'ENREGISTRER" class="button">
                </td>
            </tr>
        </table>
    </section>
</main>
<?php
include('footer.php');
?>
