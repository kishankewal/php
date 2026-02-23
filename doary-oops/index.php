<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auth Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="auth-card">
            <div id="loginForm" class="form-section ">
                <h2 class="text-center mb-4">Login</h2>
                <form>
                    <div class="mb-3">
                        <input type="email" id="loginEmail" name="loginEmail" class="form-control" placeholder="Email">
                        <div class="alert alert-danger display-none mt-2" id="loginEmailWarning">
                            Please provide a valid email. Ex john@gmail.com
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="password" id="loginPassword" name="loginPassword" class="form-control" placeholder="Password" required>
                        <div class="alert alert-danger display-none mt-2" id="loginPasswordWarning">
                            Please provide a password. Min length 3.
                        </div>
                    </div>
                     <div class="alert alert-danger display-none mt-2">
                        Email or password is incorrect.
                    </div>
                    <button type="button" class="btn btn-danger w-100" id="login">Login</button>
                </form>

                <p class="text-center mt-3">
                    Don't have an account?
                    <a href="#" id="showSignup">Sign Up</a>
                </p>
            </div>

            <!-- Signup Form -->
            <div id="signupForm" class="form-section active">
                <h2 class="text-center mb-4">Sign Up</h2>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Full Name" required>
                        <div class="alert alert-danger display-none mt-2" id="nameWarning">
                            Please provide a valid name. Ex Kishan Kewal
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="signupEmail" placeholder="Email" required>
                        <div class="alert alert-danger display-none mt-2" id="signupEmailWarning">
                            Please provide a valid email. Ex john@gmail.com
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="signupPassword" placeholder="Password" required>
                        <div class="alert alert-danger display-none mt-2" id="signupPasswordWarning">
                            Please provide a valid password. Min length should be 3.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="repeatPassword" placeholder="Repeat Password" required>
                        <div class="alert alert-danger display-none mt-2" id="repeatPasswordWarning">
                            Password and Repeat are not matching
                        </div>
                    </div>
                    <button type="button" id="signup" class="btn btn-danger w-100">Sign Up</button>
                </form>
                <p class="text-center mt-3">
                    Already have an account?
                    <a href="#" id="showLogin">Login</a>
                </p>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>    
    <script src="./assets/js/constant.js"></script>
    <script src="./assets/js/validator.js"></script>
    <script src="./assets/js/ajax-service.js"></script>
    <script src="./assets/js/login.js"></script>
</body>
</html>