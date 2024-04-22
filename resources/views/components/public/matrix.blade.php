<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="language" content="spanish">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Expertos en vesícula, hernias, balón gástrico, cinta gástrica, problema de obesidad e induvicales. Consulta el precio aquí.">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('build/assets/app-dGvTjJ5y.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/app-yt1RioBr.css')}}">

    <script src="{{asset('build/assets/app-zWqa92Wg.js')}}">

    </script>
    
    {{-- Aqui van los CSS --}}
    @yield('css_improtados')

    {{-- Swipper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dr. Kewin Quispe - experto en cirugía gastrointestinal</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

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
        function alerta(message) {
            Swal.fire({
                title: message,
                icon: "error",
            });
        }

        function validarTelefono(value) {
            if (value !== '') {
                if (isNaN(value)) {
                    alerta("El campo Teléfono debe ser solo números");
                    return false;
                }
            }

            if (value.length < 9) {
                alerta("El campo Teléfono debe ser de 9 dígitos");
                return false;
            }

            return true;
        }

        function validarEmail(value) {
            console.log(value)
            const regex =
                /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/

            if (!regex.test(value)) {
                alerta("El campo email no es válido");
                return false;
            }
            return true;
        }

        $('#formContactos').submit(function(event) {
            // Evita que se envíe el formulario automáticamente
            //console.log('evcnto')

            event.preventDefault();
            let formDataArray = $(this).serializeArray();

            if (!validarTelefono($('#telefono').val())) {
                return;
            };

            if (!validarEmail($('#email').val())) {
                return;
            };

            /* console.log(formDataArray); */
            $.ajax({
                url: '{{ route('guardarContactos') }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#formContactos')[0].reset();
                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });

                },
                error: function(error) {
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key][0];
                            Swal.fire({
                                title: error.message,
                                text: e,
                                icon: "error",
                            });
                            flag = true; // Marcar como mostrado
                        }
                    });
                }
            });
        })
    </script>

</body>

</html>
