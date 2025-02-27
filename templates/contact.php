<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact</title>
</head>

<body>
    <div class="bannereContainer">
        <h1>Amsterdam</h1>
        <?php include '../templates/inc/banniere.php' ?>
    </div>
    <header>

        <?php include '../templates/inc/menu.php'; ?>
    </header>

    <main>
        <!-- <div class="sticky">I am sticky!</div> -->
        <h2>Pour nous contacter</h2>
        <img class="firstPicMain" src="img/contacts.jpg" alt="contact.png">

        <p class="text">Pour nous laisser un commentaire ou obtenir un renseinement complémentaire, remplissez le
            formulaire ci-dessous :</p>
        <!-- <form>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="votre nom" required>
            <br>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre Prenom" required>
            <br>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Votre Email" required>
            <br>
            <label for="message">Message :</label>
            <textarea id="message" name="message" placeholder="Votre Message" required></textarea>
            <br>
            <input type="submit" value="Envoyer">
        </form> -->

        <form action="#" method="post">
            <div class="form-group">
                <label for="nom">NOM</label>
                <input type="text" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">PRENOM</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="ville">VILLE</label>
                <input type="text" id="ville" name="ville" required>
            </div>

            <div class="form-group">
                <label for="email">E-MAIL</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="commentaires">COMMENTAIRES</label>
                <textarea id="commentaires" name="commentaires" required></textarea>
            </div>

            <input type="submit" value="Envoyer votre message">

    </main>
</body>

</html>