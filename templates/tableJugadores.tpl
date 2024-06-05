{include 'htmlStart.tpl'}
{include 'formAddTask.tpl'}
<div class="container my-5">
    <div class="form-container mb-5">
        <div class="form-container">

            <legend class="text-center"> Lista de Modificacion </legend>
            <div class="mb-3">

            </div>

            <table class="table table-success table-striped mt-2">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Club</th>
                        <th scope="col">Representante</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {if $jugadores == 0}
                        <tr>
                            <td colspan="5">No hay tareas para mostrar</td>
                        </tr>
                    {/if}
                    {foreach $jugadores as $jugador}
                        <tr>
                            <td>{$jugador->nombre}</td>
                            <td>{$jugador->apellido}</td>
                            <td>{$jugador->club}</td>
                            <td>{$jugador->representante_id}</td>
                            {if $logeado == true}
                                <td>
                                    <a href='showJugador/{$jugador->id}' class='btn btn-primary'>Ver</a>
                                    <a href='delete/{$jugador->id}' class='btn btn-danger'>Eliminar</a>
                                </td>
                            {else}
                                <td>
                                    <a href='showJugador/{$jugador->id}' class='btn btn-primary'>Ver</a>
                                </td>
                            {/if}
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>

        </body>

</html>