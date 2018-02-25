<?php
?>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.php?name=home">Egyptologie</a>
    <span class="navbar-text">Nouveau Lieu</span>
</nav>

<div class="container">
    <form action="index.php?action=create" method="post" enctype="application/x-www-form-urlencoded">

        <div class="form-group">
            <label for="area_name">Nom du lieu</label>
            <input type="text" class="form-control" id="area_name" placeholder="Lieu">
        </div>
        <div class="form-group">
            <label for="area_description">Description du lieu</label>
            <textarea class="form-control" id="area_description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="area_location">Situation g�ographique</label>
            <textarea class="form-control" id="area_location" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="area_picture">Photo du lieu</label>
            <input type="file" class="form-control-file" id="area_picture">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

    </form>
</div>
