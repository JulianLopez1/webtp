{include 'htmlStart.tpl'}
<link href="css/login.css" rel="stylesheet">
<div class="login-container">
        <div class="login-card">
            <div class="card-header">
                <h1>Login</h1>
            </div>
            <div class="card-body">
                <form action="verify" method="POST">
                    <div class="form-group">
                        <label for="nombre">Email</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
    {include 'htmlEnd.tpl'}

