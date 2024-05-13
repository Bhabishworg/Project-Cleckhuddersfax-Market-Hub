<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="../CSS/header.css">
</head>

<body>


  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-navbar">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="#"><img src="../Image/Logo.png" alt="Logo" height="60" width="80"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 custom-nav-links">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link roleBasedRedirect" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link roleBasedRedirect" href="#">Contact Us</a>
            </li>
          </ul>



          <div class="login_register">
            <div class="container-fluid search_bar">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>

            <div class="login">
              <i class="fa-regular fa-user" style="color: white;"></i>
              <p class="user">LOGIN</p>
            </div>

            <div class="login">
              <i class="fa-solid fa-cart-shopping" style="color: white;"></i>
              <p class="user_cart">CART</p>
            </div>
            
            <div class="login">
            <i class="fa-regular fa-heart" style="color: white;"></i>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>



  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>