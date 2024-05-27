<?php
// require_once "sql_tasks.php";
require_once "templates/formAddTask.php";
require_once "templates/htmlStar.php";
require_once "templates/htmlEnd.php";

class jugadorView {

  function showTasks($jugadores, $representante){

      htmlStart();
      showFormAddTask($representante);
      
      echo'
      <table class="table table-success table-striped mt-2">
        <thead>
          <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Prioridad</th>
          <th scope="col">Finalizada</th>
         <th scope="col">Acciones</th>

        </tr>
        </thead>
      <tbody>';
     if(count($jugadores) == 0){
      echo"<tr>
            <td colspan=5>No hay tareas para mostrar</td>
          </tr>";
     } 
      
    foreach ($jugadores as $jugador) {
        $col1 = "<td>$jugador->nombre</td>";
        $col2 = "<td>$jugador->apellido</td>";
        $col3 = "<td>$jugador->club</td>";
        $col4 = "<td>$jugador->representante_id</td>";
        $col5 = "
        
        <td>
        <a href='showJugador/{$jugador->id}' class='btn btn-primary'>Ver</a>
        <a href='show/{$jugador->id}' class='btn btn-primary'>Ver</a>
        <a href='show/{$jugador->id}' class='btn btn-primary'>Ver</a>
        </td>
        
        
        ";
    
        echo"<tr class=''>$col1 $col2 $col3 $col4 $col5 </tr>";
    }
      
    echo'  
      </tbody>
    </table>
      ';
    
      htmlEnd();
    
  }
      

  function showJugador($jugador){
    htmlStart();

    echo '
      <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">'.$jugador->nombre.'</li>
          <li class="list-group-item">'.$jugador->apellido.'</li>
          <li class="list-group-item">Prioridad:'.$jugador->club.'</li>
          <li class="list-group-item">Prioridad:'.$jugador->representante_id.'</li>
        </ul>
      </div>
      <a href="tasks" class="btn btn-primary mt-3">Volver</a>
    ';
    htmlEnd();
  }


}