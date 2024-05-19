<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body>
    <div class="container-fluid">
        <div class="container wrapper mt-4">
            <h3>Cart</h3>
            <table class="table table-striped-columns table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col" style="width:5%">#Id</th>
                    <th scope="col" style="width:15%">Image</th>
                    <th scope="col" style="width:40%">Product Name</th>
                    <th scope="col" style="width:15%">Price</th>
                    <th scope="col" style="width:25%">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><img src="./img/apple.jpg" alt="" width="100px" height="100px"></td>
                    <td>Apple</td>
                    <td>£ 10</td>
                    <td>
                        <div class="action ms-2">
                            <a href="#"><i class="bi bi-pencil-square text-dark"> edit</i></a>
                            <a href="#"><i class="bi bi-trash text-danger ps-2"> delete</i></a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><img src="./img/apple.jpg" alt="" width="100px" height="100px"></td>
                    <td>Mango</td>
                    <td>£ 11</td>
                    <td>
                        <div class="action ms-2">
                            <a href="#"><i class="bi bi-pencil-square text-dark"> edit</i></a>
                            <a href="#"><i class="bi bi-trash text-danger ps-2"> delete</i></a>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
        <div class="cartFooter container-fluid">
            <div class="container">
                <div class="total mt-1">
                    <p>Total: £ 21</p>
                </div>
                <div class="checkout ms-auto">
                    <button class="btn btn-dark btn-sm">Checkout (2)</button>
                </div>
            </div>
            
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </body>
</html>