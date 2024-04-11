<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZestyBites.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Colors */
        :root {
            --color-primary: #308D46;
            --color-hover: #46b861;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .card-header {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }


        .form-control {
            border-radius: 10px;
        }

        .form-control:focus {
            border-color: var(--color-primary);
            box-shadow: none;
        }

        .btn-primary {
            background-color: var(--color-primary);
            border: none;
            width: 100%;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: var(--color-hover);
        }

        .vertical-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        a {
            color: var(--color-primary);
            text-decoration: none;
        }

        a:hover {
            color: var(--color-primary);
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class='vertical-center'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sign Up - <span><a href='index.php'>ZestyBites.com</a></span>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action='signUpData.php' method='post'>
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" name="fullName"
                                        placeholder="Enter your full name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control" name="phone"
                                        placeholder="Enter your phone number" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" name="address" rows="3"
                                        placeholder="Enter your address" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter your password" required>
                                </div>
                                <button type="submit" class="btn btn-primary" name='signIn'>Sign Up</button>
                            </form>
                            <br>
                            <p>Already hava an account? <span><a href='logIn.php'>Log In</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>