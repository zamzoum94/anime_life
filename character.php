<?php 
    $id = $_GET['id'] ?? null;
    // implement error handling later
    require('./characters.php');    
    $character = $characters[$id];
?>

<html>
    <head>
        <title><?= $character['name']?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md offset-md-7">
                    <form class="form-inline" method="POST" action="/anime_life/search.php">
                        <input class="form-control" type="text" name="search" placeholder="Search">
                        <button class="btn btn-success ml-3" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-5'>
                    <div class="card">
                        <img src=<?="/anime_life/images/{$character['image']}" ?> class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$character['name'] ?></h5>
                            <p class="card-text"><?=$character['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-md'>
                    <a href="/anime_life">
                        <button class="btn btn-info mt-3">All characters</button>
                    </a>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>