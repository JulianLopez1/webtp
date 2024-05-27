<?php
require_once "templates/htmlStar.php";
require_once "templates/htmlEnd.php";
class loginView {

    function showLogin($msj = null){
        htmlStart();
        echo '<h1>Lista de tareas</h1>
        <form class="col-3 m-auto" action="verify" method="POST">
        <legend class="text-center">Login</legend>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" name="email" class="form-control" placeholder="Ingrese nombre">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="text" name="password" class="form-control" placeholder="Ingrese descripción">
        </div>
      
     <button type="submit" class="btn btn-primary col-12">Submit</button>
    </form>';
        htmlEnd();


    }
}