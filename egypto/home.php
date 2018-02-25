<?php
?>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.php?action=home">Egyptologie</a>
    <form action="index.php?action=register_form"  method="post" class="form-inline">
        <input class="form-control mr-sm-2" type="submit" value="Nouveau lieu">
    </form>
</nav>

<div class="container">
    <div class="row">
        <?php
        foreach ($result as $row){
            ?>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <?php
                    $imageName = str_replace(" ", "", $row['NomLieu']);
                    $imageName = "./img/" . $imageName . ".jpg";
                    ?>
                    <img class="card-img-top" src="<?php echo $imageName; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['NomLieu']; ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="index.php?name=<?php echo $row['NomLieu'];?>">Modifer</a>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
