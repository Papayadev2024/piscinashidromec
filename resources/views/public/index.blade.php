@extends('components.public.matrix')

@section('css_improtados')
    <style>
        @font-face {
            font-family: "helveticaBold";
            src: url("./fonts/helveticaneueltprobd-webfont.woff") format("woff");
        }

        @font-face {
            font-family: "helveticaLight";
            src: url("./fonts/helveticaneueltprolt-webfont.woff") format("woff");
        }

        @font-face {
            font-family: "helveticaMedium";
            src: url("./fonts/helveticaneueltpromd-webfont.woff") format("woff");
        }

        .custom-swiper-buttons .swiper-button-prev:after {
            background-image: url("./images/svg/image_35.svg");
            transition: background-image 0.2s ease-in-out;
        }

        .custom-swiper-buttons .swiper-button-prev:hover:after {
            background-image: url("./images/svg/image_37.svg");
        }

        .custom-swiper-buttons .swiper-button-next:after {
            background-image: url("./images/svg/image_36.svg");
            transition: background-image 0.2s ease-in-out;
        }

        .custom-swiper-buttons .swiper-button-next:hover:after {
            background-image: url("./images/svg/image_39.svg");
        }

        .fondobombas {
            background-image: url("./images/img/fondobombas.png");
            object-fit: contain;
        }

        .fondologos {
            background-image: url("./images/img/fondologos.png");
            object-fit: cover;
        }

        .modal-open {
            overflow: hidden;
            background-color: rgba(0, 0, 0, 1);
        }
    </style>

@stop

@section('content')

    <main class="bg-[#F9FAFB]">
        <section class="relative">
            <img src="{{ asset('images/img/image_16.png') }}" alt="hidromec piscinas"
                class="w-full h-[800px] object-cover hidden md:block" />

            <img src="{{ asset('images/img/image_16.png') }}" alt="hidromec piscinas"
                class="w-full h-[1000px] object-cover block md:hidden" />

            <div
                class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-11/12 mx-auto pt-[350px] sm:pt-[250px] md:pt-[500px] lg:pt-0">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-24">
                    <div class="flex flex-col justify-center items-start gap-2 w-full lg:max-w-[700px]">
                        <div class="flex justify-start items-center gap-2 bg-[#232b52] rounded-full py-2 px-3">
                            <img src="{{ asset('images/svg/image_9.svg') }}" alt="experiencia" />
                            <p class="text-white font-helveticaMedium text-text12 md:text-text16">
                                Más de 17 años en el mercado nos respaldan
                            </p>
                        </div>

                        <div class="flex flex-col gap-5 items-start">
                            <h1 class="font-helveticaBold text-text46 md:text-text64 leading-none text-white">
                                La gama más completa de bombas para el Sector Agrícola
                            </h1>
                            <p class="text-white font-helveticaLight text-text20">
                                Electrobombas, Calefacción, Iluminación, Filtros, Temperado, limpieza y mantenimiento

                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-center items-center">
                            <div class="bg-[#222A51] bg-opacity-80 rounded-xl p-10 backdrop-blur-sm">
                                <div class="w-full md:max-w-[600px] lg:max-w-[442px] mx-auto flex flex-col gap-5">
                                    <h2 class="text-white font-helveticaBold text-text32 leading-tight">
                                        Solicita nuestro servicio llenando este formulario
                                    </h2>

                                    <form action="" id="formContactos">
                                        @csrf
                                        <div class="flex flex-col gap-5">
                                            <div class="relative w-full">
                                                <input id="" name="name" placeholder="Nombre de contacto"
                                                    type="text"
                                                    class="w-full py-3 px-4 focus:outline-none font-helveticaLight text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-helveticaMedium bg-transparent" />
                                                <p
                                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer font-helveticaMedium text-white text-text10">
                                                    Obligatorio
                                                </p>
                                            </div>

                                            <div class="relative w-full">
                                                <input id="" name="document" placeholder="RUC | DNI" type="text"
                                                    class="w-full py-3 px-4 focus:outline-none font-helveticaLight text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-helveticaMedium bg-transparent" />
                                                <p
                                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer font-helveticaMedium text-white text-text10">
                                                    Obligatorio
                                                </p>
                                            </div>

                                            <div class="relative w-full">
                                                <input id="telefono" name="cellphone" placeholder="Teléfono" type="tel"
                                                    class="w-full py-3 px-4 focus:outline-none font-helveticaLight text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-helveticaMedium bg-transparent" />
                                                <p
                                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer font-helveticaMedium text-white text-text10">
                                                    Obligatorio
                                                </p>
                                            </div>

                                            <div class="relative w-full">
                                                <input id="email" name="email" placeholder="E-mail" type="tel"
                                                    class="w-full py-3 px-4 focus:outline-none font-helveticaLight text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-helveticaMedium bg-transparent" />
                                            </div>

                                            <div>
                                                <textarea name="address" id="mensaje" rows="2" cols="30"
                                                    class="w-full py-3 px-4 focus:outline-none font-helveticaLight text-text16 placeholder:text-white text-white focus:ring-0 placeholder:text-opacity-55 border-white border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-helveticaMedium bg-transparent"
                                                    placeholder="Mensaje"></textarea>

                                            </div>

                                            <div class="flex justify-center items-center py-5">
                                                <button type="submit"
                                                    class="text-text18 font-helveticaBold text-white bg-[#007FC8] py-4 px-6 w-full text-center rounded-lg">Quiero
                                                    una cotización</button>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="flex justify-start items-center gap-2">
                                                    <input required id="aceptar" type="checkbox"
                                                        class="w-4 h-4 cursor-pointer" />
                                                    <label for="aceptar"
                                                        class="font-helveticaLight text-text16 text-white cursor-pointer">Acepto
                                                        recibir comunicaciones</label>
                                                </div>
                                                <div class="flex justify-start items-center gap-1">
                                                    <p class="font-helveticaLight text-text16 text-white">
                                                        Al facilitar mis datos acepto la
                                                        <a target="_blank" id="open-modal" 
                                                            class="font-helveticaLight text-text16 text-white underline cursor-pointer">Política
                                                            de Privacidad</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- --- -->
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#F8F8F8] pt-[310px] md:pt-[450px] py-12 lg:py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 w-11/12 mx-auto gap-5">
                <div class="flex flex-col gap-10 max-w-[665px]">
                    <h2 class="text-[#007FC8] font-helveticaBold text-text44 md:text-text48 leading-tight">
                        Donde hay agua, hay
                        <span class="text-[#161A32]">PENTAX</span>
                    </h2>

                    <div class="flex justify-start items-center w-full md:w-auto">
                        <a href="#"
                            class="text-white bg-[#007FC8] py-4 px-6 font-helveticaBold text-text18 rounded-xl w-full md:w-auto text-center">
                            Quiero una cotización
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-4 group bg-white p-6 rounded-xl hover:shadow-lg md:duration-300">
                    <div class="flex flex-col gap-4">
                        <p class="text-[#007FC8] font-helveticaBold text-text40 leading-none">
                            Bombas Centrífugas
                        </p>
                        <div class="flex flex-col gap-2">

                            <p class="text-[#808080] font-helveticaLight text-text16 md:text-text18">
                                Ideal para equipos de presurización, sistemas de presión constante y de riego tecnificado
                                que requieran caudales consistentes con presiones medias o altas. Fabricadas según l norma
                                EN 733.
                                Uso en aplicaciones agrícolas e industriales.
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="#"
                            class="font-helveticaMedium text-text16 text-[#007FC8] flex justify-start items-center gap-2">
                            <span>Más Información</span>
                            <div>
                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                        stroke="#007FC8" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-4 group bg-white p-6 rounded-xl hover:shadow-lg md:duration-300">
                    <div class="flex flex-col gap-4">
                        <p class="text-[#007FC8] font-helveticaBold text-text40 leading-none">
                            Bombas de Caudal
                        </p>
                        <div class="flex flex-col gap-2">
                            <p class="text-[#808080] font-helveticaLight text-text16 md:text-text18">
                                Idelaes para traspasar o reciclar agua limpia en sistemas agrículas donde se requieren altos
                                caudales con presiones relativamente bajas
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="#"
                            class="font-helveticaMedium text-text16 text-[#007FC8] flex justify-start items-center gap-2">
                            <span>Más Información</span>
                            <div>
                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                        stroke="#007FC8" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-4 group bg-white p-6 rounded-xl hover:shadow-lg md:duration-300">
                    <div class="flex flex-col gap-4">
                        <p class="text-[#007FC8] font-helveticaBold text-text40 leading-none">
                            Bombas Multietáticas
                        </p>
                        <div class="flex flex-col gap-2">
                            <p class="text-[#808080] font-helveticaLight text-text16 md:text-text18">
                                Ideal para el bombeo líquido químicamente y mecánicamente no agresivos. Amplio uso en
                                equipos de presión constante,
                                sistemas de riego tecnificado y aplicaciones industriales. Extremadamente silenciosas.
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="#"
                            class="font-helveticaMedium text-text16 text-[#007FC8] flex justify-start items-center gap-2">
                            <span>Más Información</span>
                            <div>
                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                        stroke="#007FC8" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white fondologos  bg-right bg-cover">
            <div class="flex flex-col md:flex-row w-11/12 mx-auto gap-10 justify-between py-10 lg:py-20">
                <div class="flex flex-col gap-3 w-full md:max-w-[450px] justify-center items-start">
                    <h3 class="text-white font-helveticaBold text-text44 md:text-text72 leading-none">
                        Representación
                        <span>Exclusiva</span>
                    </h3>

                    <div class="flex justify-start items-center py-5">
                        <a href="#"
                            class="text-text18 font-helveticaBold text-white bg-[#222A51] py-4 px-6 text-center rounded-lg">Quiero
                            una cotización</a>
                    </div>
                </div>

                <div
                    class="grid grid-cols-1 gap-10  md:flex md:flex-col md:flex-wrap md:gap-2 justify-center xl:justify-between w-full md:max-w-[768px]">



                    <div class="flex flex-row gap-2 lg:gap-2 justify-center lg:justify-end items-start">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/image_20.png') }}" alt="ISO" class="w-24" />
                        </div>
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/image_21.png') }}" alt="ISO" class="w-24" />
                        </div>
                    </div>

                    <div class="flex flex-row justify-center lg:justify-end items-center">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/pentaxlargeblack.png') }}" alt="pentax" class="w-[600px]" />
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="w-11/12 mx-auto py-20 ">
            <div class="grid grid-cols-1  w-full md:max-w-[1300px] mx-auto gap-10 ">
                <div
                    class="flex flex-col gap-4 group bg-white p-6 rounded-xl hover:shadow-lg md:duration-300 fondobombas bg-cover object-cover">
                    <div class="flex flex-col gap-5 h-[300px] justify-center pl-[5%]">
                        <p class="text-white font-helveticaBold text-text40 leading-none">
                            Bombas de <br>uso agrícola
                        </p>

                        <div class="flex justify-start items-center py-5">
                            <a href="#"
                                class="text-text18 font-helveticaBold text-white bg-[#007fc8] py-4 px-6 text-center rounded-lg">Quiero
                                una cotización</a>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section class="bg-[#007FC8]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 w-11/12 mx-auto gap-10 py-20">
                <div class="flex flex-col gap-3 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_31.svg') }}" alt="Calidad" />
                        </div>
                        <h2 class="font-helveticaBold text-text32 text-white text-center">
                            Calidad
                        </h2>
                    </div>
                    <p class="text-white font-helveticaLight text-text16 text-center">
                        Somos representantes y distribuidores de marcas reconocidas y
                        certificadas.
                    </p>
                </div>

                <div class="flex flex-col gap-3 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_32.svg') }}" alt="Calidad" />
                        </div>
                        <h2 class="font-helveticaBold text-text32 text-white text-center">
                            Experiencia
                        </h2>
                    </div>
                    <p class="text-white font-helveticaLight text-text16 text-center">
                        Contamos con más de 17 años de experiencia trabajando con
                        ingeniería acuática.
                    </p>
                </div>

                <div class="flex flex-col gap-3 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_33.svg') }}" alt="Calidad" />
                        </div>
                        <h2 class="font-helveticaBold text-text32 text-white text-center">
                            Profesionalismo
                        </h2>
                    </div>
                    <p class="text-white font-helveticaLight text-text16 text-center">
                        Nuestro equipo de especialistas es constantemente capacitado para
                        estar siempre a la vanguardia.
                    </p>
                </div>

                <div class="flex flex-col gap-3 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_34.svg') }}" alt="Calidad" />
                        </div>
                        <h2 class="font-helveticaBold text-text32 text-white text-center">
                            Compromiso
                        </h2>
                    </div>
                    <p class="text-white font-helveticaLight text-text16 text-center">
                        Contamos con 6 locales en todo el Perú y más de 200 distribuidores
                        oficiales.
                    </p>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="flex flex-col gap-10 py-20 w-11/12 mx-auto">
                <div class="flex flex-col items-center gap-2">
                    <h3 class="text-[#161A32] text-text48 font-helveticaBold leading-tight text-center">
                        Distribuidores <span class="text-[#007FC8]">Autorizados</span>
                    </h3>
                    <p class="text-[#808080] font-helveticaLight text-text18 text-center">
                        De las siguientes marcas
                    </p>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 md:gap-10">

                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/image_27.png') }}" alt="pentair" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/image_30.png') }}" alt="pentair" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/image_31.png') }}" alt="pentair" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/pentax.png') }}" alt="pentair" />
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-20 pt-10 md:pt-20">
            <h3
                class="text-[#161A32] font-helveticaBold text-text32 md:text-text48 text-center w-[300px] md:w-[500px] mx-auto leading-tight pb-10">
                Reconocimiento de
                <span class="text-[#007FC8]">nuestros clientes</span>
            </h3>

            <div class="w-11/12 md:w-9/12 mx-auto relative">
                <div class="swiper testimonios rounded-2xl">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-8 bg-white rounded-lg p-6 md:p-8 items-center">
                                <p class="text-[#808080] font-helveticaLight text-text18 text-center max-w-[600px]">
                                    La eficiencia y confiabilidad de estas bombas son incomparables, y el equipo de servicio
                                    al cliente fue excepcional
                                    en ayudarnos a encontrar la solución perfecta para nuestras necesidades específicas.
                                </p>

                                <div class="flex flex-col gap-3 max-w-[600px]">
                                    <p class="font-helveticaBold text-text20 text-[#161A32]">
                                        Carmén Arámbulo
                                    </p>
                                    <div class="flex justify-center items-center gap-2">
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-8 bg-white rounded-lg p-6 items-center">
                                <p class="text-[#808080] font-helveticaLight text-text18 text-center max-w-[600px]">
                                    Era escéptico de los productos químicos para piscinas, pero
                                    ahora estoy muy contento con los resultados. Mi piscina está
                                    siempre limpia y cristalina, y los recomiendo a cualquiera
                                    que tenga una piscina.
                                </p>

                                <div class="flex flex-col gap-3 max-w-[600px]">
                                    <p class="font-helveticaBold text-text20 text-[#161A32]">
                                        Carmén Arámbulo
                                    </p>
                                    <div class="flex justify-center items-center gap-2">
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-8 bg-white rounded-lg p-6 items-center">
                                <p class="text-[#808080] font-helveticaLight text-text18 text-center max-w-[600px]">
                                    Era escéptico de los productos químicos para piscinas, pero
                                    ahora estoy muy contento con los resultados. Mi piscina está
                                    siempre limpia y cristalina, y los recomiendo a cualquiera
                                    que tenga una piscina.
                                </p>

                                <div class="flex flex-col gap-3 max-w-[600px]">
                                    <p class="font-helveticaBold text-text20 text-[#161A32]">
                                        Carmén Arámbulo
                                    </p>
                                    <div class="flex justify-center items-center gap-2">
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-8 bg-white rounded-lg p-6 items-center">
                                <p class="text-[#808080] font-helveticaLight text-text18 text-center max-w-[600px]">
                                    Era escéptico de los productos químicos para piscinas, pero
                                    ahora estoy muy contento con los resultados. Mi piscina está
                                    siempre limpia y cristalina, y los recomiendo a cualquiera
                                    que tenga una piscina.
                                </p>

                                <div class="flex flex-col gap-3 max-w-[600px]">
                                    <p class="font-helveticaBold text-text20 text-[#161A32]">
                                        Carmén Arámbulo
                                    </p>
                                    <div class="flex justify-center items-center gap-2">
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-swiper-buttons xl:flex xl:absolute hidden">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-pagination !-bottom-[56px] block xl:hidden mb-[6px] xl:mb-0"></div>
            </div>
        </section>
    </main>

    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Políticas de privacidad
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Cerrar modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its
                        citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is
                        meant to ensure a common set of data rights in the European Union. It requires organizations to
                        notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="default-modal" type="button"
                        class="text-white bg-terciario p-3 rounded-lg">Aceptar</button>
                </div>
            </div>
        </div>
    </div>



@section('scripts_improtados')
    <script>
        /*  */
        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 1,
                },
            },
        });
        /*  */
        var swiper = new Swiper(".logos", {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    centeredSlides: true,
                },
                768: {
                    slidesPerView: 4,
                    centeredSlides: false,
                    autoplay: false,
                },
            },
        });
    </script>

    <script>
        let modal = document.getElementById("default-modal");
        let btn = document.getElementById("open-modal");
        let btn2 = document.getElementById("open-modal2");
        let closeButtons = document.querySelectorAll("[data-modal-hide='default-modal']");
        let body = document.body;

        btn.onclick = function() {
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            body.classList.add("modal-open");
        }

        btn2.onclick = function() {
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            body.classList.add("modal-open");
        }

        closeButtons.forEach(button => {
            button.onclick = function() {
                modal.classList.remove("flex");
                modal.classList.add("hidden");
                body.classList.remove("modal-open");
            }
        });

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.remove("flex");
                modal.classList.add("hidden");
                body.classList.remove("modal-open");
            }
        }
    </script>

@stop

@stop
