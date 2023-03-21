<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('node_modules/@fortawesome/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/theme.css') ?>">

    <script src="<?= base_url('node_modules/jquery/dist/jquery.min.js') ?>"></script>

</head>

<body class="collapsed">
    <aside id="sidebar" class="position-fixed top-0 start-0 bottom-0 p-3 bg-white shadow-sm">
        <a href="<?= base_url() ?>" class="text-decoration-none text-dark text-center" style="line-height: 1;">
            <h5 class="m-0 fw-bold">
                <span class="title me-1">CodeIgniter</span>
                <span class="px-2 py-1 bg-theme rounded" style="font-size: 16px;">3</span>
            </h5>
        </a>
        <hr class="my-3" style="border-color: #C9C9C9;">
        <ul class="list-unstyled" id="menu-list">
            <li class="menu mb-2 active">
                <a type="button" class="d-flex px-3 py-2 rounded-3 text-decoration-none text-reset">
                    <div class="d-block my-auto" style="width: 2.25rem !important; line-height: 1;">
                        <i class="fa fa-dashboard" style="font-size: 20px;"></i>
                    </div>
                    <label class="title my-auto fw-semibold">Dashboard</label>
                </a>
            </li>
            <li class="menu mb-2">
                <a type="button" class="d-flex px-3 py-2 rounded-3 text-decoration-none text-reset">
                    <div class="d-block my-auto" style="width: 2.25rem !important; line-height: 1;">
                        <i class="fa fa-user" style="font-size: 20px;"></i>
                    </div>
                    <label class="title my-auto fw-semibold">User</label>
                </a>
            </li>
            <li class="menu mb-2">
                <a type="button" class="d-flex px-3 py-2 rounded-3 text-decoration-none text-reset">
                    <div class="d-block my-auto" style="width: 2.25rem !important; line-height: 1;">
                        <i class="fa fa-book" style="font-size: 20px;"></i>
                    </div>
                    <label class="title my-auto fw-semibold">Report</label>
                </a>
            </li>
            <li class="menu mb-2">
                <a type="button" class="d-flex px-3 py-2 rounded-3 text-decoration-none text-reset">
                    <div class="d-block my-auto" style="width: 2.25rem !important; line-height: 1;">
                        <i class="fa fa-wrench" style="font-size: 20px;"></i>
                    </div>
                    <label class="title my-auto fw-semibold">Setting</label>
                </a>
            </li>
        </ul>
    </aside>
    <main class="px-3">
        <nav class="navbar mt-3 px-3 bg-white rounded shadow-sm" style="height: 50px">
            <a type="button" id="toggle-sidebar" class="text-decoration-none my-auto text-dark" style="line-height: 1;"><i class="fa fa-bars" style="font-size: 20px;"></i></a>
        </nav>
    </main>
    <footer>
        <script>
            $(() => {
                $("body nav.navbar > #toggle-sidebar").on("click", () => $("body").toggleClass("collapsed"))
            })
        </script>
    </footer>
</body>

</html>