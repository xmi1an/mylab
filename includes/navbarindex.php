<nav id="navbar" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="img/mainlogo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu text-muted"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>

                <?php if (isset($_SESSION['labid'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="laboratory/labdashboard.php">Dashboard</a>
                    </li>
                <?php } else { ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Laboratory <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="nav-link" href="laboratory/labsignup.php">Signup</a></li>
                            <li><a class="nav-link" href="laboratory/lablogin.php">Login</a></li>
                            <li><a class="nav-link" href="laboratory/labhelp.php">Help</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new-user-testing.php">Test Now</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <!--end navbar-nav-->
            <ul class="list-inline mb-0 ps-lg-4 ms-2">
                <li class="list-inline-item">
                    <a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="primary-link"><i class="mdi mdi-instagram"></i></a>
                </li>
            </ul>
        </div>
        <!--end collapse-->
    </div>
    <!--end container-->
</nav>