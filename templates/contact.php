<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact</title>
</head>

<body>
    <header>
        <h1>Contact</h1>
        <?php include '../templates/inc/banniere.php' ?>
        <?php include '../templates/inc/menu.php'; ?>
    </header>

    <main>
        <!-- <div class="sticky">I am sticky!</div> -->
        <h2>Pour nous contacter</h2>
        <img class="firstPicMain" src="img/contacts.jpg" alt="contact.png">

        <p class="text">Pour nous laisser un commentaire ou obtenir un renseinement complémentaire, remplissez le
            formulaire ci-dessous :</p>
        <form>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="votre nom" required>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre Prenom" required>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Votre Email" required>
            <label for="message">Message :</label>
            <textarea id="message" name="message" placeholder="Votre Message" required></textarea>
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>

</html>