<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{asset ('../bootstrap-5.3.0-dist/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('CSS/registro.css')}}">
</head>
<body>
<button type="button" class="btn-registro btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Registrarse
        </button>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrarse</h1>
                    <div class="Datos-registro">
                        <label for="NumeroDocumento">Numero de documento</label>
                        <input type="number" id="NumeroDocumento " name="NumeroDocumento " required>
                    </div>
                    <div class="Datos-registro">
                        <label for="Nombre">Nombre</label>
                        <input type="text" id="Nombre" name="Nombre" required>
                    </div>
                    <div class="Datos-registro">
                        <label for="Apellido">Apellido</label>
                        <input type="text" id="Apellido" name="Apellido" required>
                    </div>
                    <div class="Datos-registro">
                        <label for="email">Email</label>
                        <input type="email" name="email*" required>
                    </div>
                    <div class="Datos-registro">
                        <label  for="password" >Contraseña</label>
                        <input type="password"   id="password" name="password" required>
                    </div>
                    <div class="Datos-registro">
                        <label  for="password" >Confirmar contraseña</label>
                        <input type="password"   id="password" name="password" required>
                    </div>
                    <div class="cont-footer">
                        <div class="modal-footer">
                            <input type="radio" name="AceptaTerminos" id="AceptaTerminos" required/>
                            <a href="#" >Acepto los terminos y condiciones. </a>
                        </div> 
                        <div class="modal-footer">
                            <a href="#" class="link">Iniciar Sesion</a>
                        </div>
                    </div>
                    <button type="button" class="btn-cancelar btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn-registrar btn-primary">Registrar</button>
                </div>
                </div>
            </div>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

