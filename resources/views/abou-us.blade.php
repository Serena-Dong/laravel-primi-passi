<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About-Us</title>

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

</head>
<body>
    <header class="bg-dark py-5 text-white">
        <nav class="container d-flex justify-content-center">

            <ul class="m-auto d-flex" style="list-style : none">
                @foreach ($menus as $menu)
                    <li>
                    <a class="text-white m-5" href="{{ $menu }}">
                    {{ $menu }}
                    </a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <main class="text-center text-white my-5 py-5">
            <h1>{{$name}}</h1>
        </main>
    </header>
</body>

</html>