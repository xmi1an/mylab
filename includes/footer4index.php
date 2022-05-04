<style>
    .btn-icon {
        padding: 0;
        width: calc(2.309375rem + 2px);
        height: calc(2.309375rem + 2px);
        display: inline-flex;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
    }

    .btn-label-facebook {
        color: #3b5998;
        border-color: transparent;
        background: #3b599847;
    }

    .btn-label-gmail {
        color: #dd4b39;
        border-color: transparent;
        background: #dd4b3926;
    }

    .btn-label-twitter {
        color: #0077b5;
        border-color: transparent;
        background: #d6e9f3;
    }

    .btn-instagram {
        color: #e1306c;
        border-color: transparent;
        background: #ebb4df69;
    }
</style>
<footer class="footer bg-light">
    <div class="container-fluid container-p-x pt-5 pb-4">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-4 mb-sm-0">
                <h4 class="fw-bolder mb-3"><a href="./" target="_blank" class="footer-text">MyLab </a></h4>
                <span>Get ready for better world</span>
                <div class="demo-inline-spacing">
                    <button type="button" class="btn btn-icon btn-label-facebook"><i class="tf-icons bx bxl-facebook fa-2x"></i></button>
                    <button type="button" class="btn btn-icon btn-label-twitter"><i class="tf-icons bx bxl-twitter fa-2x"></i></button>
                    <button type="button" class="btn btn-icon btn-instagram"><i class='bx bxl-instagram-alt  fa-2x'></i></button>
                    <button type="button" class="btn btn-icon btn-label-gmail">
                        <i class="bx bxl-gmail fa-2x"></i>
                    </button>

                </div>

                <p class="pt-4">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © MyLab
                </p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4 mb-md-0">
                <h5>Test</h5>
                <ul class="list-unstyled">
                    <li><a href="new-user-testing.php" class="footer-link d-block pb-2">Book Test</a></li>
                    <li>
                        <a href="patient-search-report.php" class="footer-link d-block pb-2">Track Report</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4 mb-sm-0">
                <h5>Lab Manager</h5>
                <ul class="list-unstyled">
                    <li><a href="laboratory\lablogin.php" class="footer-link d-block pb-2">Login</a></li>
                    <li><a href="laboratory\labsignup.php" class="footer-link d-block pb-2">Signup</a></li>
                    <li><a href="#" class="footer-link d-block pb-2">Contact Lab</a></li>
                    <li><a href="#" class="footer-link d-block pb-2">FAQs</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Our Labs & Network</a></li>
                    <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Privacy & Policy</a></li>
                    <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Terms &amp; Conditions</a></li>
                    <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Help</a></li>
                    <li><a href="javascript:void(0)" class="footer-link d-block pb-2">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <span class="badge bg-label-primary">Total Visitors : <?php include('includes/counter.php');
                                                                    echo $counter; ?></span>
        </div>

    </div>
</footer>