<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">

        <?php include './../views/components/header.php'; ?>

        <?php include './../views/components/sideBar.php'; ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"><?= $pageName ?></h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $pageName ?> </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?= BootstrapUI::table($ObjectList) ;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="dashboard/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dashboard/assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dashboard/dist/js/waves.js"></script>
    <script src="dashboard/dist/js/sidebarmenu.js"></script>
    <script src="dashboard/dist/js/custom.min.js"></script>
</body>

</html>