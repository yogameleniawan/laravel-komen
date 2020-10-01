<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset("css/blog-home.css") }}" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">About Me</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about')}}">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="col-md-8">

        <h1 class="my-4">About Me
          <small>Biodata Saya</small>
        </h1>

        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Biodata</h2>
            <p class="card-text">Nama : Yoga Meleniawan Pamungkas</p>
            <p class="card-text">NIM : 1931710083</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on September 17, 2020 by
            <a href="#">Yoga Meleniawan Pamungkas</a>
          </div>
        </div>
    </div>

    <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>    
    </body>
</html>