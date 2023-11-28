<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    {{--Navbar--}}
    <nav class="navbar navbar-expand-lg bg-danger" data-bs-theme="dark">
        <div class="container-fluid mx-4">
          <a class="navbar-brand" href="#">tiMovie</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">WatchList</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      {{--Navbar--}}

      {{--Content--}}

      @yield('content')


      {{--Content--}}

      {{--Footer--}}

      <footer class="bg-danger text-white text-center py-2 mt-4">
        <div class="text-center">
            <p>Copyright {{ date ("Y")}}&copy; | by Tri Suci Ramadani Pulungan | 2201082018 |</p>
        </div>
       </footer>
      {{--Footer--}}

      <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
