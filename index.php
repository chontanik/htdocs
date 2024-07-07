<?php include("app/app.configs.php") ?>
<?php include("app/curl/online_movie.php") ?>
<!DOCTYPE html>
<html lang="th" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title ?></title>
        <link href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/assets/fontawesome-free-6.5.2-web/css/all.min.css">
        <link rel="stylesheet" href="/assets/css/index.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="/"><?php echo $title ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">หนังมาแรง</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">หนังใหม่</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ซีรี่</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">หมวดหมู่</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <input type="search" id="txtSearch" name="txtSearch" class="form-control" placeholder="ค้นหา" aria-label="search" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary btn-dark" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                    <button class="btn btn-outline-primary ms-2">สมัครสมาชิก</button>
                    <button class="btn btn-primary ms-2">เข้าสู่ระบบ</button>
                </div>
            </div>
        </nav>

        <div class="container mt-3">
            <h5 class="mb-2">หลังออนไลน์</h5>
            <div class="row">
                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="col-2 px-1">
                        <div class="card border-0 w-100 position-relative shadow-sm">
                            <img src="<?php echo $movieImageArr[$i] ?>" class="rounded">
                            <!-- <div class="w-100 h-100 bg-black position-absolute rounded-3">
                                asdasd
                            </div> -->
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>