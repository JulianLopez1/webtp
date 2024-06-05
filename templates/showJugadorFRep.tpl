{include 'htmlStart.tpl'}
<link rel="stylesheet" href="css/showJugador.css">

<table>
    <h1 class="text-center"> Lista de los Jugadores con el Representate seleccionado </h1>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Club</th>
            <th>Representante ID</th>
        </tr>
    </thead>
    <tbody>
        {foreach $jugadores as $jugador}
            {if $jugador->representante_id === $representante}
                <tr>
                    <td>{$jugador->nombre}</td>
                    <td>{$jugador->apellido}</td>
                    <td>{$jugador->club}</td>
                    <td>{$jugador->representante_id}</td>
                </tr>
            {/if}
        {/foreach}
    </tbody>
</table>

{include 'htmlEnd.tpl'}