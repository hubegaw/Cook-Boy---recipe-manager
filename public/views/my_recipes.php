<!DOCTYPE html>
<head lang="en">
    <link rel="stylesheet" type="text/css" href="public/css/my_recipes.css">
    <title>My recipes - Cook Boy</title>
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
                    <button class="sign-in">Sign in</button>
                </div>
            </nav>
        </div>
        <div class="main-content">
            <div class="panel flexbox">
                <div class="recipes-count">You have</div>
                <div class="create-recipe">
                    <a href="views/add_recipe.html">Create new recipe</a>
                </div>
                <div class="filters">
                    <button>Filters</button>
                </div>
            </div>
            <div class="recipes-container">
                <ul>
                    <li class="recipe-tile">
                        <div class="name">Recipe title</div>
                        <div class="info">
                            <div class="rating"></div>
                            <span class="cooking-time">time: </span>
                            <span class="portions">portions: </span>
                        </div>
                        <button class="delete-button">
                            <img src="public/img/common/delete.png" alt="delete button">
                        </button>
                    </li>
                </ul>
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
</body>