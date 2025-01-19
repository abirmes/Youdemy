<!doctype html>
<html lang="en">

<head>
    <title>REGISTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo __DIR__   ?>/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <?php echo __DIR__; ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-3">
                    <h2 class="heading-section">Register</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="/register" method="post" class="signin-form">
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control" placeholder="firstname" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control" placeholder="lastname" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="email" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="phone number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="photo" class="form-control" placeholder="photo url" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="etudiant" type="radio" name="user" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Etudiant
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" value="enseignant" name="user" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Enseignant
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="register" class="form-control btn btn-primary submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>