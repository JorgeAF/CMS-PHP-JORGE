<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Registro</title>
</head>
<body>
    <div class="container-fluid register-login">
        <div class="row wrapper">
            <div class="col-lg padding-none bg-image-container">
                <div class="container__image">
                    <div class="image--points"></div>
                </div>
            </div>
            
            <div class="col-lg form-center d-flex justify-content-center align-items-center">
                <div class="container-form">
                    <h1 class="register-login-h1">REGISTRO</h1>
                    <p class="register-login-p">Por favor ingrese sus datos para crear su cuenta</p>
                    <!-- inicio del form -->
                    <form action="">
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" id="firstname" name="firstname" class="form-control" required>
                                    <label for="firstname" class="form-label">Nombre</label>                
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" id="username" name="username" class="form-control" required>
                                    <label for="username" class="form-label">Apodo</label>                
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <input type="text" id="email" name="email" class="form-control" required>
                                <label for="email" class="form-label">E-mail</label>                
                            </div>
            
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control" required>
                                <label for="password" class="form-label">contraseña</label>     
                            </div>

                            <div class="form-group margin--bottom">
                                <input type="confimpassword" id="confimpassword" name="confimpassword" class="form-control" required>
                                <label for="confimpassword" class="form-label">Confirmar contraseña</label>     
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <input class="form-check-input checked--form--input" type="checkbox"    id="remember" value="">
                                    <label class="form-check-label order-2" for="remember">Acepto los terminos y condiciones</label>
                                    <label class="label--ckecked order-1" for="remember"></label>
                                </div>
                            </div>
            
                            <div class="d-flex justify-content-lg-center">
                                <button type="button" class="btn btn-signup--register align-self-center">Aceptar</button>
                            </div>
                            <a href="#" class="register-link--haveaccount">¿Ya tiene una contraseña? Entrar</a>
                        
                    </form>
                    <!-- Fin del form -->
                </div>
            </div>
        </div>
    </div>
    <!-- inicio de contenedor -->



    <!-- fin de contenedor -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>