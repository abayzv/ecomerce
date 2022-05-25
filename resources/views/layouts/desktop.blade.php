<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @livewireStyles
</head>

<body>

    {{-- navbar --}}
    <nav class="navbar py-3 navbar-expand-lg bg-primary">
        <div class="containers">
            <div class="d-flex justify-content-between w-100">
                <a class="navbar-brand text-white text-large flex-fill" href="#"><i class="bi bi-shop me-1"></i>
                    Mahesadev</a>
                <form class="d-flex bg-white p-1" style="width:840px;" role="search">
                    <input class="form-custom px-2 me-2 flex-grow-1" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-primary px-4" type="submit"><i class="bi bi-search"></i></button>
                </form>
                <div class="justify-content-center d-flex align-items-center  flex-fill">
                    <i class="bi bi-cart text-white text-large me-4"></i><a href="/" class="text-white me-2">Daftar</a>
                    <div class="text-white">|</div> <a href="/" class="ms-2 text-white">Login</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- banner --}}
    <div class="section-banner">
        <div class="containers banner-wrapper">
            <div class="full-banner">
                <div class="w-100 d-flex">
                    <div class="banner"
                        style="background-image: url('https://cf.shopee.co.id/file/45d06029182d7b54befa45a2dbf7ac7d_xhdpi'); background-size: cover; background-repeat: no-repeat;">
                    </div>
                </div>
            </div>
            <div class="child-banner">
                <div class="child w-100 d-flex">
                    <div class="banner"
                        style="background-image: url('https://cf.shopee.co.id/file/4cd78257a9c2a74662dd848b74dae52a_xhdpi'); background-size: cover; background-repeat: no-repeat;">
                    </div>
                </div>
                <div class="child child-2 w-100">
                    <div class="banner"
                        style="background-image: url('https://cf.shopee.co.id/file/45d06029182d7b54befa45a2dbf7ac7d_xhdpi'); background-size: cover; background-repeat: no-repeat;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>

</html>
