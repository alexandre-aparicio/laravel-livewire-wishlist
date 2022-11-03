<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>My First Bootstrap Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach ($productos as $producto)
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('productos/' . $producto->imagen) }}" class="card-img-top" alt="">

                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->titulo }}</h5>
                        
                        <a href="#" class="btn btn-primary">Favoritos</a>
                        <a href="#" class="btn btn-primary">Carro</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
