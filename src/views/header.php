<header>
    <style>
        .sidebarBtn {
            width: 40px;
            height: 35px;
            background: transparent;
            box-sizing: border-box;
            outline: none;
            border: none;
        }

        .sidebarBtn span {
            display: block;
            width: 30px;
            height: 3px;
            background-color: white;
            position: absolute;
            top: 24px;
        }

        .sidebarBtn span:before {
            content: '';
            position: absolute;
            top: -10px;
            left: 0px;
            background-color: white;
            width: 100%;
            height: 3px;
        }

        .sidebarBtn span:after {
            content: '';
            position: absolute;
            left: 0px;
            top: 10px;
            background-color: white;
            width: 100%;
            height: 3px;
        }

        .sidebar {
            position: fixed;
            top: 60px;
            left: -250px;
            width: 250px;
            height: 100%;
        }

        .active {
            left: 0;
        }

        .sidebarBtn.toggle span {
            background: transparent;
        }

        .sidebarBtn.toggle span:before {
            top: 0;
            transform: rotate(45deg);
        }

        .sidebarBtn.toggle span:after {
            top: 0;
            transform: rotate(-45deg);
        }
    </style>
    <script>
        $(function() {
            $(".sidebarBtn").click(function() {
                $(".sidebar").toggleClass('active');
                $(".sidebarBtn").toggleClass('toggle');
            });
        });
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="sidebarBtn">
            <span></span>
        </button>
        <a class="navbar-brand" href="index.php" id="logo">Logo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <form action=""></form>
            <div class="input-group container-sm" style="margin: 0; padding:0;">
                <div class="input-group-prepend" style="width:100px;">
                    <?php include("categories.php"); ?>
                </div>
                <input type="text" class="form-control input-group-prepend" placeholder="Chercher">
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