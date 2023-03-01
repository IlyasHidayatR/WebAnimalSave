<!DOCTYPE html>
<html>
<head>
	<title>AnimalLove</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">AnimalLove</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Adopsi Hewan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Hubungi Kami</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="jumbotron">
		<div class="container">
			<h1 class="display-4">AnimalLove</h1>
			<p class="lead">Temukan teman baru untuk berbagi kasih sayang dan kebahagiaan.</p>
			<hr class="my-4">
			<a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Adopsi Sekarang</a>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-4">
				<div class="card">
					<img src="https://via.placeholder.com/350x200" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Kucing</h5>
						<p class="card-text">Kucing lucu yang siap menjadi temanmu.</p>
						<a href="#" class="btn btn-primary">Adopsi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Anjing</h5>
                        <p class="card-text">Anjing setia yang siap menemanimu.</p>
                        <a href="#" class="btn btn-primary">Adopsi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kelinci</h5>
                        <p class="card-text">Kelinci lucu yang siap menjadi temanmu.</p>
                        <a href="#" class="btn btn-primary">Adopsi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <h3>Kontak Kami</h3>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">&copy; 2023 Adopsi Hewan</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>