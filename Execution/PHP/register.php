<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register With Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <link rel="stylesheet" href="../CSS/styles.css" />
</head>

<body>
    <img src="../Image/Logo.png" class="img-fluid rounded mx-auto d-block" height="50px" width="70px" alt="">
    <h2 class="fw-bolder text_center mt-3">REGISTER</h2>
    
    <div class="container border border-2 rounded color_white mt-5">
        <form method="post" id="registrationForm">
            <div class="login_container mt-4">
                <div class="input-container Username">
                    <i class="icon fas fa-user"></i>
                    <input type="text" class="text_box" placeholder="Username" name="username" />
                    <hr />
                </div>

                <div class="input-container Password">
                    <i class="icon fas fa-lock"></i>
                    <input type="password" class="text_box" placeholder="Password" name="upassword" />
                    <hr />
                </div>

                <div class="input-container ConfirmPassword">
                    <i class="icon fas fa-lock"></i>
                    <input type="password" class="text_box" placeholder="Confirm Password" name="cpassword" />
                    <hr />
                </div>

                <div class="input-container Email">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" class="text_box" placeholder="Email" name="email" />
                    <hr />
                </div>

                <div class="input-container age">
                    <i class="fa-solid fa-calendar-days"></i>
                    <select class="text_box" id="ageRange" name="ageRange">
                        <option value="" disabled selected>Select an age range</option>
                        <option value="1-14">1 - 14</option>
                        <option value="15-24">15 - 24</option>
                        <option value="25-64">25 - 64</option>
                        <option value="65-100">65 - 100</option>
                    </select>
                    <i class="fa-solid fa-caret-down"></i>
                    <hr />
                </div>

                <div class="input-container PhoneNum">
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" class="text_box" placeholder="Phone Number" name="phoneNum" />
                    <hr />
                </div>

                <label for="acceptTerms">
                    <input type="checkbox" name="acceptTerms" />
                    I accept the <a href="#">Terms and Conditions</a>
                </label>
            </div>

            <div id="error_container" class="error"></div>
            <div class="login_container mt-3">
                <button type="submit" class="btn btn-dark rounded-5" name="register">
                    Register
                </button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>