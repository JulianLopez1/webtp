{include 'htmlStart.tpl'}
    <link rel="stylesheet" href="../css/showJugador.css">
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Club</th>
                <th>Representante ID</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{$jugador->nombre}</td> 
            <td>{$jugador->apellido}</td>
            <td>{$jugador->club}</td>
            <td>{$jugador->representante_id}</td>
            </tr>
{include 'htmlEnd.tpl'}