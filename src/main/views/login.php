<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/loginStyles.css" rel="stylesheet">
    <?php include("import_files.php"); ?>
    <title>Connecter</title>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
                <h1>Se Connecter</h1>
            </div>
            <form>
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="E-mail">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de Passe">
                <button type="submit" class="fadeIn fourth" id="button">Se Connecter</button>
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="#">pas de compte? <br>Créer un Compte</a>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
    <?php include("sidebar.php"); ?>
</body>
</html>