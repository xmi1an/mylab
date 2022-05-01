<nav class="navbar navbar-expand-lg bg-navbar-theme">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)"><img src="img/mainlogo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-6">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-ex-6">
            <div class="navbar-nav me-auto">
                <a class="nav-item nav-link active" href="javascript:void(0)">Home</a>
                <a class="nav-item nav-link" href="javascript:void(0)">About</a>
                <a class="nav-item nav-link" href="javascript:void(0)">Contact</a>
            </div>
            <ul class="navbar-nav ms-lg-auto">
            <?php if (isset($_SESSION['labid'])) {
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="tf-icons navbar-icon bx bx-user"></i> Profile</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="tf-icons navbar-icon bx bx-cog"></i> Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="tf-icons navbar-icon bx bx-lock-open-alt"></i> Logout</a>
                </li>
                <?php } else { ?>
                    <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="tf-icons navbar-icon bx bx-lock-open-alt"></i> Logout</a>
                </li> 
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>