<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="language" content="spanish">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Expertos en vesícula, hernias, balón gástrico, cinta gástrica, problema de obesidad e induvicales. Consulta el precio aquí.">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Aqui van los CSS --}}
    @yield('css_improtados')

    {{-- Swipper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dr. Kewin Quispe - experto en cirugía gastrointestinal</title>

</head>

<body id="inicio">
    @include('components.public.header')

    <div>
        {{-- Aqui va el contenido de cada pagina --}}
        @yield('content')

    </div>

    @include('components.public.footer')


    @yield('scripts_improtados')

    <script>
        $('#formContactos').submit(function(event) {
            // Evita que se envíe el formulario automáticamente
            //console.log('evcnto')
            event.preventDefault();
            let formDataArray = $(this).serializeArray();
            //console.log(formDataArray);
            $.ajax({
                url: '{{ route('guardarContactos') }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });
                }
            });
        })
    </script>

</body>

</html>
