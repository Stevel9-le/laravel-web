<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Laravel App</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font (Anime Style) -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            font-family: 'Zen Tokyo Zoo', cursive;
            color: #2c2c2c;
        }
        .navbar {
            background-color: #ff6b81;
        }
        .navbar-brand {
            font-family: 'Press Start 2P', cursive;
            color: #fff !important;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
            background: #fff;
        }
        .anime-header {
            font-size: 2rem;
            font-family: 'Press Start 2P', cursive;
            text-align: center;
            margin-top: 20px;
            color: #ff4757;
        }
        .list-group-item {
            font-family: 'Press Start 2P', cursive;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">AnimeApp</a>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Header -->
        <h1 class="anime-header">Selamat Datang, {{ $username }}!</h1>
        <p class="text-center">Login terakhir: {{ $last_login }}</p>

        <!-- Card Data -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-3">
                    <h4 class="text-center">List Pendidikan</h4>
                    <ul class="list-group">
                        @foreach($list_pendidikan as $item)
                            <li class="list-group-item text-center">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
