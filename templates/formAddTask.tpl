<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Jugador</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/tablaJugadores.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="addJugador" method="POST">
                <legend class="text-center">Agregar Jugador</legend>
                <div class="mb-3">
                    <label class="form-label">Nombre de Jugador</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" placeholder="Ingrese apellido">
                </div>
                <div class="mb-3">
                    <label class="form-label">Club</label>
                    <input type="text" name="club" class="form-control" placeholder="Ingrese club">
                </div>
                <div class="mb-3">
                    <label class="form-label">Representante</label>
                    <select name="representante_id" class="form-select" aria-label="Default select example">
                        <option selected>-- Seleccione --</option>
                        {foreach $representantes as $representante}
                            <option value="{$representante->id}">{$representante->nombre}</option>
                        {/foreach}
                    </select>
                </div>
                <button type="submit" class="btn btn-primary col-12">Agregar</button>
            </form>
            <form action="showJugador" method="GET">
                <button type="submit" class="btn btn-secondary col-12 mt-3">Buscar</button>
            </form>
        </div>
    </div>

   
</body>
</html>