<?php

use Illuminate\Support\Facades\Route;

//echo Route::current()->getName();

?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="height: 70px !important">
    <div class="container">
        <a class="navbar-brand" href="/" style="border-right:2px; border-color: hotpink">
            <span ><i class="fas fa-paw" style="color: hotpink;"></i></span>

        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" id="nav-home" style="color: hotpink;">
                    <a class="nav-link" href="/"><b>Home</b></a>
                </li>
                <li class="nav-item" id="nav-cats" style="color: hotpink;">
                    <a class="nav-link" href="/cats"><b>Cats</b></a>
                </li>
                <li class="nav-item nav-dogs" id="nav-dogs">
                    <a class="nav-link" href="/dogs"><b>Dogs</b></a>
                </li>
                <?php
                if ($route == 'index') {

                    echo '<script>document.getElementById("nav-home").classList.add("active")</script>';

                } elseif ($route == 'cats'){

                    echo '<script>document.getElementById("nav-cats").classList.add("active")</script>';

                } elseif ($route == 'dogs'){

                    echo '<script>document.getElementById("nav-dogs").classList.add("active")</script>';
                }
                ?>

            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item">
                    <a class="nav-link" style="color: hotpink;"  href="https://www.petfinder.com/" target="_blank"><b>Pet Adoption</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>