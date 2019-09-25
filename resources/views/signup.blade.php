<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/signup.css">
    <title>Sign Up</title>
</head>
<header>
    <nav class="navbar bg-dark">
        <h1 hide>
            <a href="signup">
                <h1 id="blue">Asclepius Bot</h1>
            </a>
        </h1>

        <ul class="menu-nav">
            <li id="nav-item current">
                <a href="signup" class="nav-link">
                    Welcome
                </a>
            </li>
        </ul>

    </nav>

</header>

<body>
    <div class="container" id="container">
        <div class="inner-container grid">
            <div class="form-img-wrapper" id="image-wrapper">
                <img src=" https://res.cloudinary.com/hng-pre-internship/image/upload/v1569329467/chatbot/opinionbg_ylkxa8.png
" alt="">
            </div>

            <div class="form-wrapper">
                <h1 class="lead">Create Account</h1>
                <form method="post" action="">
                    {{csrf_field()}}
                    <div class="form-grid">
                        <div class="form-grid1">
                            <label for="name">
                                <input type="text" name="fullname" id="name input" placeholder="Full Name">
                                <i class="far fa-user"></i>
                            </label>

                            <label for="username">
                                <input type="text" name="username" id="username input" placeholder="Username" required>
                                <i class="far fa-user"></i>
                            </label>

                            <label for="email">
                                <input type="email" name="email" id="email input" placeholder="Email" required>
                                <i class="far fa-envelope"></i>
                            </label>


                        </div>
                        <div class="form-grid2">


                            <label for="tel">
                                <input type="tel" name="mobileno" id="tel input" placeholder="Mobile Number">
                                <i class="fas fa-phone-square"></i>
                            </label>

                            <label for="password">
                                <input type="password" name="password" id="password input" placeholder="Password" required>
                                <i class="fas fa-lock"></i>
                            </label>

                            <label for="con-password">
                                <input type="password" name="cpassword" id="con-password" input"
                                    placeholder="Confirm Password" required>
                                <i class="fas fa-lock"></i>
                            </label>
                        </div>
                    </div>
                    <div class="flex-btn">
                        <div class="signup">
                            <label for="signup">
                                <button type="submit" name="signup" id="signup">Sign Up</button>
                                <i class="fas fa-sign-in-alt"></i>
                            </label>

                        </div>
                    </div>
                </form>
                <div id="prompt">
                    <p>Have an account?<a class="forgot" href="login">Login</a></p>
                </div>
            </div>
        </div>
        <footer>&copy2019 <span class="blue">Team Asclepius.</span> All Rights Reserved.</footer>
    </div>
    <script src="/js/main.js"> </script> </body> </html>