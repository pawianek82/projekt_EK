<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <!--Link CSS Getbootstrap.com-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
  <body>
    <?php include 'header.php'; ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown link
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
      <h1>Login</h1>
      <form>
        <div class="form-group">
          <label for="username">Benutzername:</label>
          <input
            type="text"
            class="form-control"
            id="username"
            placeholder="Enter username"
          />
        </div>
        <div class="form-group">
          <label for="password">Passwort:</label>
          <input
            type="password"
            class="form-control"
            id="password"
            placeholder="Enter password"
          />
        </div>
        <button type="submit" class="btn btn-primary">Einloggen</button>
      </form>
    </div>
    <!--Link JS getbootstrap.com-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

  <footer class="container py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-body-secondary">Home</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-body-secondary">Features</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-body-secondary">Pricing</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-body-secondary">FAQs</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-body-secondary">About</a>
      </li>
    </ul>
    <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
  </footer>
</html>