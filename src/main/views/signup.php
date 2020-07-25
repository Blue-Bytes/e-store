<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("import_files.php"); ?>
    <link href="./styles/loginStyles.css" rel="stylesheet">
    <title>s'inscrir</title>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="wrapper fadeInDown">
        <div id="formContent">
        <div class="fadeIn first">
            <h1>Créer un Compte</h1>
        </div>
            <form>
                <input class="form-control" type="text" id="first-name" class="fadeIn second" name="first-name" placeholder="prénom">
                <input class="form-control" type="text" id="last-name" class="fadeIn second" name="last-name" placeholder="nom">
                <input class="form-control" type="email" id="email" class="fadeIn second" name="email" placeholder="E-mail">
                <input class="form-control" type="date" id="date" class="fadeIn third" name="date" placeholder="date de naissance">
                <input class="form-control" type="password" id="password" class="fadeIn second" name="password" placeholder="mot de passe">
                <input class="form-control" type="text" id="address" class="fadeIn second" name="address" placeholder="adresse">
                <input class="form-control" type="text" id="city" class="fadeIn second" name="city" placeholder="ville">
                <button type="submit" class="fadeIn fourth" id="button">Créer</button>
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="#">Vous avez un compte ? <br>Se connecter</a>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
    <?php include("sidebar.php"); ?>
</body>
</html>