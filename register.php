<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>S'enregistrer</title>
        <link rel="stylesheet" href="css/register.css">
        <link rel="icon" href="img/logo/escominimal.png" type="image/x-icon">

    </head>
    <body>


        <form action="database.php" method="POST">
        <h2>S'enregistrer </h2>

            <input type="hidden" name="form" value="ajout">


            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo">

            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            <label for="password">Password</label>
            <input type="text" name="password" id="password">

            <button type="submit">Envoyer</button>

            

        </form>





    </body>


    </html>