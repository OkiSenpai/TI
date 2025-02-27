<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Galerie</title>
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
        <h2>Galerie et photos</h2>

        <table class="tableGalery">
            <tr>
                <td><img class="imgGalery" src="img/480px_Amsterdam_Begijnhof_2008.jpg" alt="Image 1"></td>
                <td><img class="imgGalery" src="img/480px_Amsterdam_Grachten.jpg" alt="Image 2"></td>
            </tr>
            <tr>
                <td><img class="imgGalery" src="img/480px_Boat.jpg" alt="Image 3"></td>
                <td><img class="imgGalery" src="img/480px_Prinsengracht.jpg" alt="Image 4"></td>
            </tr>
            <tr>
                <td><img class="imgGalery" src="img/480px_Villa_Weteringschans.jpg" alt="Image 5"></td>
                <td><img class="imgGalery" src="img/480px_Westerkerk.jpg" alt="Image 6"></td>
            </tr>
        </table>






    </main>

</body>

</html>