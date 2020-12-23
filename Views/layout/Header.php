<!DOCTYPE HTML>  
<html>
  <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="/Views/public/css/styles.css"/>
  </head>
  <body>
    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark pink scrolling-navbar">
        <a class="navbar-brand" href="#"><strong>MVC</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Opinions</a>
            </li>
          </ul>
          <button class="btn btn-danger navbar-btn" type="submit">
            <a class="logout-button" href="/auth/logout">Logout</a>
          </button>
        </div>
      </nav>
    </header>
  </body>
</html>