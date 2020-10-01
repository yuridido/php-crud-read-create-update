<?php 
include __DIR__ . '/partials/templates/head.php';
include __DIR__ . '/partials/templates/header.php';


?>

<div class="container">
    <form action="partials/create/server.php" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero della stanza</label>
            <input type="text" class="form-control" name="roomNumber" value="" id="roomNumber" placeholder="inserisci il numero della stanza">
        </div>
        <div class="form-group">
            <label for="beds">Numero di letti</label>
            <input type="text" class="form-control" name="beds" value="" id="beds" placeholder="inserisci il numero di letti">
        </div>    
        <div class="form-group">
            <label for="floor">Piano</label>
            <input type="text" class="form-control" name="floor" value="" id="floor" placeholder="inserisci il piano">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control bg-primary bg-warning" name="modifica" value="CREATE">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="">
        </div>
    
    
    
    
    </form>



</div>
