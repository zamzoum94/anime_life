<?php 
    require './characters.php';
?>
<html>
    <head>
        <title>charachters gallery</title>
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
                <?php 
                    for($id = 0; $id < count($characters); $id++){
                        echo "
                            <div class = 'row'>
                                <div class = 'col-md'>
                                    <h3>
                                        <a href='character.php?id={$id}'>{$characters[$id]['name']}</a>
                                    <h3>
                                </div>
                            </div>
                        ";
                    } 
                ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>