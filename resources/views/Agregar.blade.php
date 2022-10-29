<!DOCTYPE html>
@if (session()->has('confirmacion'))

        {!!
            "<script>
            Swal.fire(
            'Bien hecho!',
            'El registro se ha realizado exitosamente!',
            'success'
            )
            </script>
        "!!}
            
        @endif
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AGREGAR</title>
        
        @if ($errors->any())
        @foreach ($errors->all() as $error)    
        
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ $error }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endforeach
        @endif


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body class="bg-info ">
        <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mt-2">Ingresa tus credenciales</h5>
            </div>
        
            <div class="card-body">
              
              
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-bold"> Correo electrónico </label>
                        <input type="email" class="form-control" name="txtEmail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold"> Contraseña </label>
                        <input type="password" class="form-control" name="txtPass">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-info fw-bold">Ingresar</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
       

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
