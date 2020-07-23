<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Logo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <div class="input-group container-sm">
                <div class="input-group-prepend">
                <?php include("categories.php"); ?>
                </div>
                <input type="text" class="form-control" placeholder="Chercher" style="margin: 0px;">
                <button class="btn btn-outline-success" type="button" style="border-radius: 0%;">
                    <i class='fas fa-search'></i>
                </button>
            </div>
            </form>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup">S'inscrir</a>
                </li>
            </ul>
        </div>
    </nav>
</header>