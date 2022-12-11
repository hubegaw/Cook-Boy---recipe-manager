<!DOCTYPE html>
<head lang="en">
    <link rel="stylesheet" type="text/css" href="public/css/home.css">
    <title>Home - Cook Boy</title>
    <style>@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@400;500&display=swap');</style>
</head>
<body>
    <div class="container">
        <div class="header flexbox">
            <a class="logo-container flexbox" href="#">
                <img src="public/img/header/logo.png" alt="Cook Boy logo">
                <div class="app-name">Cook Boy</div>
            </a>
            <nav class="navigation flexbox">
                <input class="search-bar box" type="text" placeholder="Find a recipe">
                <a class="categories-button" href="categories.html">Categories</a>
                <div class="login-buttons">
                    <button class="log-in">Log in</button>
                    <button class="sign-in">Sign up</button>
                </div>
            </nav>
        </div>
        <div class="main-content">
            <div class="welcome-sign">
                <span>Welcome to Cook Boy - Your recipe manager!</span>
            </div>
            <div class="suggestions">
                <span>Suggested recipes</span>
                <div class="carousel">
                </div>
            </div>
            <div class="features-container">
                <span class="features-header">Features</span>
                <ul class="features">
                    <li>
                        <div class="feature-header">
                            <img src="public/img/features/categories.png" alt="categories">
                            <span>Filters and tags</span>
                        </div>
                        <div class="feature-text">
                            Easily organise your recipes by tags
                            and quickly find them with use of filters
                        </div>
                    </li>
                    <li>
                        <div class="feature-header">
                            <img src="public/img/features/cloud.png" alt="cloud">
                            <span>Import from cloud</span>
                        </div>
                        <div class="feature-text">
                            Multiple ready recipes
                            are available in our application
                        </div>
                    </li>
                    <li>
                        <div class="feature-header">
                            <img src="public/img/features/measuring-cup.png" alt="measuring-cup">
                            <span>Conversion</span>
                        </div>
                        <div class="feature-text">
                            Convert ingridients between US, 
                            Imperial and metric measures
                        </div>
                    </li>
                </ul>
                <button class="more-button">more</button>
            </div>
        </div>
        <div class="footer flexbox">
            <ul class="flexbox">
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <span>Contact:</span>
                    <span class="email">cookboyrecipes@contact.com</span>
                </li>
                <li>
                    <a href="#">Help</a>
                </li>
            </ul>
            <span class="legal">@2022 All rights reserved</span>
        </div>
    </div>
    <div class="blur"></div>
    <div class="popups">
        <form class="log-in-popup" action="login" method="POST">
            <h2>Log in</h2>
            <div class="inputs">
                <div class="email-input">
                    <label for="email" class="text">Email Address</label>
                    <input class="email box" type="text" placeholder="myrecipes@email.com">
                </div>
                <div class="password-input">
                    <label for="password" class="text">Password</label>
                    <input class="password box" type="password" placeholder="**********">
                </div>
            </div>
            <span>or log in with</span>
            <div class="log-in-options">
                <button class="google">Google</button>
                <button class="twitter">Twitter</button>
                <button class="facebook">Facebook</button>
            </div>
            <button>Continue</button>
        </form>
        <form class="signup" action="" method="POST">
            <div class="sign-in-popup">
                <h2>Sign up</h2>
                <div class="inputs">
                    <div class="email-input">
                        <div class="text">Email Address</div>
                        <input class="email-input box" type="text" placeholder="myrecipes@email.com">
                    </div>
                    <div class="password-input">
                        <div class="text">Password</div>
                        <input class="password-input box" type="password" placeholder="**********">
                    </div>
                </div>
                <span>or sign up with</span>
                <div class="log-in-options">
                    <button class="google">Google</button>
                    <button class="twitter">Twitter</button>
                    <button class="facebook">Facebook</button>
                </div>
            </div>
            <div class="welcome-popup">
                <h1>We are happy to see You here!</h1>
                <h2>Enter Your name, please</h2>
                <div class="inputs">
                    <div class="name-input">
                        <input class="box" type="text" placeholder="Adam">
                    </div>
                </div>
                <button class="start-button" type="submit">Start!</button>
            </div>
        </form>
    </div>
</body>