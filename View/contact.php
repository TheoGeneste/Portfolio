<?php include_once "../Controller/formulaire.php"; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mon CV</title>
        <meta name="description" content="Ma Deuxieme page">
        <link rel="stylesheet" href="../CSS/contact.css">
        <link rel="stylesheet" href="../CSS/nav.css">
    </head>

    <body>
    <nav id="nav">
            <ul>
                <li id="accueil"><a href="../index.php">Accueil</a></li>
                <li id="cv"><a href="../View/PageTheo.php">CV</a></li>
                <li id="veilleTechnologique"><a href="../View/veilleTechnologique.php">Veille Technologique</a></li>
                <li id="contact"><a href="../View/contact.php">Contact</a></li>
            </ul>
    </nav>
        <form  class=formulaire id="sondage" method="post" action="../Controller/formulaire.php">
                <fieldset><legend>Informations personnelles</legend>
                    <p>
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom" />
                    </p>
                    <p>
                        <label for="prenom">Prénom :</label>
                        <input type="text" id="prenom" name="prenom" /></p>
                    <p>
                        <label for="adresseMail">Adresse Mail:</label>
                        <input type="email" id="email" name="email" /></p>
                    <p>
                        <label for="ville">Ville :</label>
                        <input type="text" id="ville" name="ville" /></p>
                    <p>
                        <label for="message">Message</label>
                        <textarea id="message" name="message" cols="40" rows="5"></textarea>
                    </p>
                </fieldset>
        
                <div style="text-align:center;"><input type="submit" name="envoie" value="Envoyer !!" /></div>
            </form>
    </body>
</html>

