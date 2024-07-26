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
            background-image: url("./images/img/fondobombas.webp");
            object-fit: contain;
        }

        .fondologos {
            background-image: url("./images/img/fondologos.webp");
            object-fit: cover;
        }

        .modal-open {
            overflow: hidden;
            background-color: black;
        }
    </style>

@stop

@section('content')

    <main class="bg-[#F9FAFB]">
        <section class="relative">
            <img src="{{asset('images/img/image_1.webp')}}" alt="hidromec piscinas"
                class="w-full h-[1000px] md:h-[800px] object-cover" loading="lazy"/>

            <div
                class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-11/12 mx-auto pt-[350px] sm:pt-[250px] md:pt-[500px] lg:pt-0">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-24">
                    <div class="flex flex-col justify-center items-start gap-2 w-full lg:max-w-[700px]">
                        <div class="flex justify-start items-center gap-2 bg-[#007FC8] rounded-full py-2 px-3">
                            <img src="{{asset('images/svg/image_9.svg')}}" alt="experiencia" />
                            <p class="text-white font-helveticaMedium text-text12 md:text-text16">
                                Más de 17 años de experiencia en el mercado.
                            </p>
                        </div>

                        <div class="flex flex-col gap-5 items-start">
                            <h1 class="font-helveticaBold text-text46 md:text-text64 leading-none  text-white">
                                Suministro y Mantenimiento de equipos de piscinas.
                            </h1>
                            <p class="text-white font-helveticaLight text-text20">
                                Electrobombas, Filtros, Clorinadores, Accesorios Empotables, Calentadores, Iluminación y Kit
                                de Limpieza.
                            </p>
                        </div>
                    </div>

                    <div>
                        <!-- corregir -->
                        <div class="flex justify-center items-center">
                            <div class="bg-[#007FC8] bg-opacity-80 text-opacity-0 rounded-xl p-10">
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
                                            <input type="hidden" name="source" value="piscinas"/>
                                            <div class="flex justify-center items-center py-5">
                                                <button type="submit"
                                                    class="text-text18 font-helveticaBold text-white bg-[#222a51] py-4 px-6 w-full text-center rounded-lg">Quiero
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
                                                            class="font-helveticaLight text-text16 text-white underline cursor-pointer">Política de privacidad y Tratamiento de datos</a>
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

        <section class="bg-[#F8F8F8] pt-[350px] md:pt-[495px] lg:pt-16 pb-10">
            <div class="w-11/12 mx-auto flex flex-col gap-10">
                <h3 class="text-[#023B54] font-helveticaMedium text-text40 leading-tight text-center">
                    Categorías del <span class="text-[#007FC8]">negocio</span>
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#C2E0F2] p-6 rounded-xl md:duration-300">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83301 28.0007C5.83301 17.5512 5.83301 12.3265 9.07923 9.08021C12.3255 5.83398 17.5502 5.83398 27.9997 5.83398C38.449 5.83398 43.6738 5.83398 46.9202 9.08021C50.1663 12.3265 50.1663 17.5512 50.1663 28.0007C50.1663 38.45 50.1663 43.6748 46.9202 46.9212C43.6738 50.1673 38.449 50.1673 27.9997 50.1673C17.5502 50.1673 12.3255 50.1673 9.07923 46.9212C5.83301 43.6748 5.83301 38.45 5.83301 28.0007Z"
                                        fill="#C2E0F2" stroke="#007FC8" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillAzul md:duration-300" />
                                    <path d="M18.667 29.1667L24.5003 35L37.3337 21" stroke="#007FC8" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#161A32] font-helveticaBold text-text32 md:duration-300 leading-tight">
                                    Bombas de Piscinas y Repuestos
                                </h3>
                                <p
                                    class="text-[#808080] font-helveticaLight text-text18 group-hover:text-[#161A32] md:duration-300">
                                    Son esenciales para mantener una piscina limpia y saludable.
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

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#C2E0F2] p-6 rounded-xl md:duration-300">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83301 28.0007C5.83301 17.5512 5.83301 12.3265 9.07923 9.08021C12.3255 5.83398 17.5502 5.83398 27.9997 5.83398C38.449 5.83398 43.6738 5.83398 46.9202 9.08021C50.1663 12.3265 50.1663 17.5512 50.1663 28.0007C50.1663 38.45 50.1663 43.6748 46.9202 46.9212C43.6738 50.1673 38.449 50.1673 27.9997 50.1673C17.5502 50.1673 12.3255 50.1673 9.07923 46.9212C5.83301 43.6748 5.83301 38.45 5.83301 28.0007Z"
                                        fill="#C2E0F2" stroke="#007FC8" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillAzul md:duration-300" />
                                    <path d="M18.667 29.1667L24.5003 35L37.3337 21" stroke="#007FC8" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#161A32] font-helveticaBold text-text32 md:duration-300 leading-tight">
                                    Calefacción de Piscinas
                                </h3>
                                <p
                                    class="text-[#808080] font-helveticaLight text-text18 group-hover:text-[#161A32] md:duration-300">
                                    Un sistema que permite aumentar la temperatura del agua de
                                    una piscina.
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

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#C2E0F2] p-6 rounded-xl md:duration-300">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83301 28.0007C5.83301 17.5512 5.83301 12.3265 9.07923 9.08021C12.3255 5.83398 17.5502 5.83398 27.9997 5.83398C38.449 5.83398 43.6738 5.83398 46.9202 9.08021C50.1663 12.3265 50.1663 17.5512 50.1663 28.0007C50.1663 38.45 50.1663 43.6748 46.9202 46.9212C43.6738 50.1673 38.449 50.1673 27.9997 50.1673C17.5502 50.1673 12.3255 50.1673 9.07923 46.9212C5.83301 43.6748 5.83301 38.45 5.83301 28.0007Z"
                                        fill="#C2E0F2" stroke="#007FC8" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillAzul md:duration-300" />
                                    <path d="M18.667 29.1667L24.5003 35L37.3337 21" stroke="#007FC8" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#161A32] font-helveticaBold text-text32 md:duration-300 leading-tight">
                                    Iluminación Subacuática
                                </h3>
                                <p
                                    class="text-[#808080] font-helveticaLight text-text18 group-hover:text-[#161A32] md:duration-300">
                                    Mejora la seguridad, la visibilidad y la estética de tu
                                    piscina.
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

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#C2E0F2] p-6 rounded-xl md:duration-300">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83301 28.0007C5.83301 17.5512 5.83301 12.3265 9.07923 9.08021C12.3255 5.83398 17.5502 5.83398 27.9997 5.83398C38.449 5.83398 43.6738 5.83398 46.9202 9.08021C50.1663 12.3265 50.1663 17.5512 50.1663 28.0007C50.1663 38.45 50.1663 43.6748 46.9202 46.9212C43.6738 50.1673 38.449 50.1673 27.9997 50.1673C17.5502 50.1673 12.3255 50.1673 9.07923 46.9212C5.83301 43.6748 5.83301 38.45 5.83301 28.0007Z"
                                        fill="#C2E0F2" stroke="#007FC8" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillAzul md:duration-300" />
                                    <path d="M18.667 29.1667L24.5003 35L37.3337 21" stroke="#007FC8" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#161A32] font-helveticaBold text-text32 md:duration-300 leading-tight">
                                    Accesorios de Empotrado
                                </h3>
                                <p
                                    class="text-[#808080] font-helveticaLight text-text18 group-hover:text-[#161A32] md:duration-300">
                                    Una variedad de funciones, para la iluminación, la
                                    filtración y la seguridad.
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

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#C2E0F2] p-6 rounded-xl md:duration-300">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83301 28.0007C5.83301 17.5512 5.83301 12.3265 9.07923 9.08021C12.3255 5.83398 17.5502 5.83398 27.9997 5.83398C38.449 5.83398 43.6738 5.83398 46.9202 9.08021C50.1663 12.3265 50.1663 17.5512 50.1663 28.0007C50.1663 38.45 50.1663 43.6748 46.9202 46.9212C43.6738 50.1673 38.449 50.1673 27.9997 50.1673C17.5502 50.1673 12.3255 50.1673 9.07923 46.9212C5.83301 43.6748 5.83301 38.45 5.83301 28.0007Z"
                                        fill="#C2E0F2" stroke="#007FC8" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillAzul md:duration-300" />
                                    <path d="M18.667 29.1667L24.5003 35L37.3337 21" stroke="#007FC8" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#161A32] font-helveticaBold text-text32 md:duration-300 leading-tight">
                                    Filtros de Piscinas y Repuestos
                                </h3>
                                <p
                                    class="text-[#808080] font-helveticaLight text-text18 group-hover:text-[#161A32] md:duration-300">
                                    Dispositivos que se utilizan para limpiar el agua de la
                                    piscina y eliminar impurezas.
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

                    <div class="flex flex-col gap-4 group bg-white hover:bg-[#C2E0F2] p-6 rounded-xl md:duration-300">
                        <div class="flex flex-col gap-2">
                            <div>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.83301 28.0007C5.83301 17.5512 5.83301 12.3265 9.07923 9.08021C12.3255 5.83398 17.5502 5.83398 27.9997 5.83398C38.449 5.83398 43.6738 5.83398 46.9202 9.08021C50.1663 12.3265 50.1663 17.5512 50.1663 28.0007C50.1663 38.45 50.1663 43.6748 46.9202 46.9212C43.6738 50.1673 38.449 50.1673 27.9997 50.1673C17.5502 50.1673 12.3255 50.1673 9.07923 46.9212C5.83301 43.6748 5.83301 38.45 5.83301 28.0007Z"
                                        fill="#C2E0F2" stroke="#007FC8" stroke-width="3.5"
                                        class="group-hover:stroke-strokeWithe group-hover:fill-fillAzul md:duration-300" />
                                    <path d="M18.667 29.1667L24.5003 35L37.3337 21" stroke="#007FC8" stroke-width="3.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="group-hover:stroke-strokeWithe md:duration-300" />
                                </svg>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#161A32] font-helveticaBold text-text32 md:duration-300 leading-tight">
                                    Productos Químicos
                                </h3>
                                <p
                                    class="text-[#808080] font-helveticaLight text-text18 group-hover:text-[#161A32] md:duration-300">
                                    Sustancias que se utilizan para mantener el agua de la
                                    piscina saludable y segura.
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
            </div>

            <div class="flex justify-center items-center pt-10">
                <a href="#"
                    class="text-white bg-[#222A51] py-4 px-6 font-helveticaBold text-text18 rounded-xl">Quiero una
                    cotización</a>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-[700px] mx-auto pb-10 w-11/12">
                <h2 class="text-[#161A32] font-helveticaBold text-text32 lg:text-text48 leading-tight text-center">
                    Somos distribuidores oficiales de
                    <span class="text-[#007FC8]">prestigiosas marcas</span>
                </h2>

                <p class="text-[#808080] font-helveticaLight text-text18 text-center">
                    Distribuidores Autorizados.
                </p>
            </div>

            <div class="w-full md:w-11/12 mx-auto">
                <div class="swiper logos">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{asset('images/img/image_3.webp')}}" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{asset('images/img/image_4.webp')}}" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{asset('images/img/image_5.webp')}}" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{asset('images/img/image_6.webp')}}" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{asset('images/img/pentax.webp')}}" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{asset('images/img/aquamec.webp')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-11/12 mx-auto py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:max-w-[1200px] mx-auto gap-10">
                <div class="flex flex-col bg-white rounded-3xl p-6 gap-10 hover:shadow-lg md:duration-300">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#161A32] font-helveticaBold text-text32 leading-tight">
                            <span class="text-[#007FC8]">Equipos</span> de Recirculación
                            para piscinas
                        </h2>
                        <p class="text-[#808080] font-helveticaLight text-text20">
                            ¡Cuida tu piscina y ahorra en el mantenimiento!
                        </p>
                    </div>

                    <div class="flex justify-center items-center">
                        <img src="{{asset('images/img/image_7.webp')}}" alt="equipo de recirculación"
                            class="w-full h-[355px] object-cover rounded-xl" />
                    </div>

                    <div class="rounded-xl bg-[#F9FAFB] py-8 px-5 flex flex-col gap-10">
                        <div class="flex flex-col gap-5">
                            <div class="flex gap-3 justify-start items-start">
                                <img src="{{asset('images/svg/image_11.svg')}}" alt="" />
                                <p class="text-[#808080] font-helveticaLight text-text18">
                                    Filtro para piscinas
                                </p>
                            </div>

                            <div class="flex gap-3 justify-start items-start">
                                <img src="{{asset('images/svg/image_11.svg')}}" alt="" />
                                <p class="text-[#808080] font-helveticaLight text-text18">
                                    Bombas de calor
                                </p>
                            </div>

                            <div class="flex gap-3 justify-start items-start">
                                <img src="{{asset('images/svg/image_11.svg')}}" alt="" />
                                <p class="text-[#808080] font-helveticaLight text-text18">
                                    Calentadores eléctricos
                                </p>
                            </div>

                            <div class="flex gap-3 justify-start items-start">
                                <img src="{{asset('images/svg/image_11.svg')}}" alt="" />
                                <p class="text-[#808080] font-helveticaLight text-text18">
                                    Calentadores a gas
                                </p>
                            </div>

                            <div class="flex gap-3 justify-start items-start">
                                <img src="{{asset('images/svg/image_11.svg')}}" alt="" />
                                <p class="text-[#808080] font-helveticaLight text-text18">
                                    Electrobombas
                                </p>
                            </div>

                            <div class="flex gap-3 justify-start items-start">
                                <img src="{{asset('images/svg/image_11.svg')}}" alt="" />
                                <p class="text-[#808080] font-helveticaLight text-text18">
                                    Equipo de coloración
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-center items-center">
                            <a href="#"
                                class="bg-[#222A51] font-helveticaBold text-text18 rounded-xl py-4 px-6 w-full text-center text-white">Quiero
                                una cotización</a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white rounded-3xl p-6 gap-10 hover:shadow-lg md:duration-300">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#161A32] font-helveticaBold text-text32 leading-tight">
                            <span class="text-[#007FC8]">Kits</span> de Limpieza para
                            piscinas
                        </h2>
                        <p class="text-[#808080] font-helveticaLight text-text20">
                            ¡Cuida tu piscina y ahorra en el mantenimiento!
                        </p>
                    </div>

                    <div class="flex justify-center items-center">
                        <img src="./images/img/image_8.webp" alt="equipo de recirculación"
                            class="w-full h-[355px] object-cover rounded-xl" />
                    </div>

                    <div class="rounded-xl bg-[#F9FAFB] py-8 px-5 flex flex-col gap-10 flex-grow justify-between">
                        <div class="flex flex-col gap-5">
                            <div class="flex gap-3 justify-start items-start">
                                <img src="{{asset('images/svg/image_11.svg')}}" alt="" />
                                <p class="text-[#808080] font-helveticaLight text-text18">
                                    Elimina las impurezas, bacterias y microorganismos.
                                </p>
                            </div>

                            <div class="flex gap-3 justify-start items-start">
                                <img src="{{asset('images/svg/image_11.svg')}}" alt="" />
                                <p class="text-[#808080] font-helveticaLight text-text18">
                                    Expulsa bacterias y microorganismos.
                                </p>
                            </div>

                            <div class="flex gap-3 justify-start items-start">
                                <img src="{{asset('images/svg/image_11.svg')}}" alt="" />
                                <p class="text-[#808080] font-helveticaLight text-text18">
                                    Protege tu salud y la de los tuyos con nuestros productos y
                                    equipos de mantenimiento y limpieza.
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-center items-center">
                            <a href="#"
                                class="bg-[#222A51] font-helveticaBold text-text18 rounded-xl py-4 px-6 w-full text-center text-white">Quiero
                                una cotización</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#161A32]">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="grid grid-cols-1 lg:grid-cols-2 py-20 px-16 gap-10 md:gap-16">
                    <div class="flex flex-col gap-5 justify-center">
                        <div class="flex justify-center items-center">
                            <img src="{{asset('images/svg/image_12.svg')}}" alt="" />
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <h2 class="text-white font-helveticaBold text-text32 leading-tight text-center">
                                Fiabilidad
                            </h2>
                            <p class="text-white font-helveticaLight text-text16 text-center">
                                Elegir Pentax significa elegir la seguridad, en cualquier fase operativa.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5 justify-center">
                        <div class="flex justify-center items-center">
                            <img src="{{asset('images/svg/image_12.svg')}}" alt="" />
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <h2 class="text-white font-helveticaBold text-text32 leading-tight text-center">
                                Calidad
                            </h2>
                            <p class="text-white font-helveticaLight text-text16 text-center">
                                Pentax somete sus productos a un control de calidad constante.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5 justify-center">
                        <div class="flex justify-center items-center">
                            <img src="{{asset('images/svg/image_12.svg')}}" alt="" />
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <h2 class="text-white font-helveticaBold text-text32 leading-tight text-center">
                                Variedad
                            </h2>
                            <p class="text-white font-helveticaLight text-text16 text-center">
                                Una extensa gama de productos Pentax para cada exigencia.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5 justify-center">
                        <div class="flex justify-center items-center">
                            <img src="{{asset('images/svg/image_12.svg')}}" alt="" />
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <h2 class="text-white font-helveticaBold text-text32 leading-tight text-center">
                                Velocidad
                            </h2>
                            <p class="text-white font-helveticaLight text-text16 text-center">
                                Cada pedido se tramita exactamente en los plazos previamente establecidos.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5 justify-center col-span-1 lg:col-span-2 px-[20%]">
                        <div class="flex justify-center items-center">
                            <img src="{{asset('images/svg/image_12.svg')}}" alt="" />
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <h2 class="text-white font-helveticaBold text-text32 leading-tight text-center">
                                Flexibilidad
                            </h2>
                            <p class="text-white font-helveticaLight text-text16 text-center">
                                Pentax escucha, analiza y pone manos a la obra para ofrecer lo mejor a sus clientes
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <img src="{{asset('images/img/image_9.webp')}}" alt=""
                        class="w-full h-full object-cover hidden md:block" />

                    <img src="{{asset('images/img/image_10.webp')}}" alt=""
                        class="w-full h-[800px] object-cover block md:hidden" />
                </div>
            </div>
        </section>

        <section>
            <div class="flex flex-col gap-10 py-24 bg-white">
                <div class="md:max-w-[1000px] mx-auto pb-10 w-11/12">
                    <h2 class="text-[#161A32] font-helveticaBold text-text48 leading-tight text-center">
                        La confianza de nuestros clientes es la
                        <span class="text-[#007FC8]">clave de nuestro éxito</span>
                    </h2>
                </div>

                <div class="w-full md:w-11/12 mx-auto">
                    <div class="swiper logos">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="flex justify-center items-center">
                                    <img src="{{asset('images/img/image_11.webp')}}" alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex justify-center items-center">
                                    <img src="{{asset('images/img/image_12.webp')}}" alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex justify-center items-center">
                                    <img src="{{asset('images/img/image_13.webp')}}" alt="" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex justify-center items-center">
                                    <img src="{{asset('images/img/COAR2.webp')}}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-20 pt-10 md:pt-20">
            <h3
                class="text-[#161A32] font-helveticaBold text-text32 md:text-text48 text-center w-[300px] md:w-[500px] mx-auto leading-tight pb-10">
                Lo que dicen <span class="text-[#007FC8]">nuestros clientes</span>
            </h3>

            <div class="w-11/12 lg:w-9/12 mx-auto relative">
                <div class="swiper testimonios rounded-2xl">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 bg-white rounded-lg p-6">
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="font-helveticaBold text-text16 text-[#1D1D1B]">
                                            Carmen Arámbulo
                                        </h2>
                                        <p class="font-helveticaMedium text-text10 text-[#1D1D1B] text-opacity-50">
                                            Cliente
                                        </p>
                                    </div>

                                    <div class="flex justify-start items-center gap-2">
                                        <div class="flex justify-start items-center gap-1">
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                        </div>
                                        <p class="text-[#1D1D1B] text-opacity-50 font-helveticaMedium text-text10">
                                            -12 de agosto de 2023
                                        </p>
                                    </div>
                                </div>

                                <div>
                                    <p class="text-[#1D1D1B] font-helveticaLight text-text14">
                                        ¡No puedo estar más feliz con el servicio de mantenimiento
                                        de piscinas que recibí! Desde que empecé a utilizarlo, mi
                                        piscina ha estado en perfectas condiciones en todo
                                        momento. Los equipos para piscinas que utilizan son de
                                        última tecnología y realmente hacen la diferencia. ¡Ahora
                                        puedo disfrutar de mi piscina sin tener que preocuparme
                                        por nada más que relajarme y disfrutar del agua
                                        cristalina!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 bg-white rounded-lg p-6">
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="font-helveticaBold text-text16 text-[#1D1D1B]">
                                            Crishtian León
                                        </h2>
                                        <p class="font-helveticaMedium text-text10 text-[#1D1D1B] text-opacity-50">
                                            Profesional
                                        </p>
                                    </div>

                                    <div class="flex justify-start items-center gap-2">
                                        <div class="flex justify-start items-center gap-1">
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                        </div>
                                        <p class="text-[#1D1D1B] text-opacity-50 font-helveticaMedium text-text10">
                                            -12 de agosto de 2023
                                        </p>
                                    </div>
                                </div>

                                <div>
                                    <p class="text-[#1D1D1B] font-helveticaLight text-text14">
                                        Como propietario de una piscina, siempre he luchado con el mantenimiento
                                        adecuado. Sin embargo, desde que contraté este servicio, todo ha
                                        cambiado. Sus expertos no solo son increíblemente profesionales, sino que
                                        también utilizan los mejores equipos para piscinas disponibles en el
                                        mercado. ¡Mi piscina nunca había estado tan limpia y bien cuidada como lo
                                        está ahora! Definitivamente recomendaría este servicio a cualquier persona
                                        que quiera mantener su piscina en perfecto estado sin ningún esfuerzo.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 bg-white rounded-lg p-6">
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="font-helveticaBold text-text16 text-[#1D1D1B]">
                                            Geraldine Cabrera
                                        </h2>
                                        <p class="font-helveticaMedium text-text10 text-[#1D1D1B] text-opacity-50">
                                            Comerciante
                                        </p>
                                    </div>

                                    <div class="flex justify-start items-center gap-2">
                                        <div class="flex justify-start items-center gap-1">
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                        </div>
                                        <p class="text-[#1D1D1B] text-opacity-50 font-helveticaMedium text-text10">
                                            -6 de octubre de 2023
                                        </p>
                                    </div>
                                </div>

                                <div>
                                    <p class="text-[#1D1D1B] font-helveticaLight text-text14">
                                        Nunca me ha gustado lidiar con el mantenimiento de mi piscina, pero gracias a este
                                        servicio, todo se ha vuelto mucho más fácil. Lo que más me impresiona son los
                                        equipos para piscinas que utilizan; son eficientes,
                                        confiables y realmente hacen que el mantenimiento sea un proceso sin
                                        problemas. Ahora puedo pasar más tiempo disfrutando de mi piscina con mi
                                        familia y menos tiempo preocupándome por su limpieza ¡Definitivamente
                                        vale la pena cada centavo invertido!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 bg-white rounded-lg p-6">
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="font-helveticaBold text-text16 text-[#1D1D1B]">
                                            Crishtian León
                                        </h2>
                                        <p class="font-helveticaMedium text-text10 text-[#1D1D1B] text-opacity-50">
                                            Profesional
                                        </p>
                                    </div>

                                    <div class="flex justify-start items-center gap-2">
                                        <div class="flex justify-start items-center gap-1">
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                            <img src="{{asset('images/svg/image_26.svg')}}" alt="start" />
                                        </div>
                                        <p class="text-[#1D1D1B] text-opacity-50 font-helveticaMedium text-text10">
                                            -12 de agosto de 2023
                                        </p>
                                    </div>
                                </div>

                                <div>
                                    <p class="text-[#1D1D1B] font-helveticaLight text-text14">
                                        ¡No puedo estar más feliz con el servicio de mantenimiento
                                        de piscinas que recibí! Desde que empecé a utilizarlo, mi
                                        piscina ha estado en perfectas condiciones en todo
                                        momento. Los equipos para piscinas que utilizan son de
                                        última tecnología y realmente hacen la diferencia. ¡Ahora
                                        puedo disfrutar de mi piscina sin tener que preocuparme
                                        por nada más que relajarme y disfrutar del agua
                                        cristalina!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-swiper-buttons lg:flex lg:absolute hidden">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-pagination !-bottom-[56px] block lg:hidden mb-[6px] md:mb-0"></div>
            </div>
        </section>
    </main>

    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full  bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Política de privacidad y Tratamiento de datos
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
                <div class="p-4 md:p-5 space-y-4 h-[500px] overflow-y-auto">
                    <p dir="ltr"><strong>1. Introducci&oacute;n</strong></p>
                    <p dir="ltr">En Hidromec Ingenieros, nos comprometemos a proteger la privacidad de nuestros usuarios y a cumplir con la Ley de Protecci&oacute;n de Datos Personales (Ley N&deg; 29733) y su Reglamento. Estas pol&iacute;ticas de tratamiento de datos personales describen c&oacute;mo recopilamos, usamos, almacenamos y protegemos la informaci&oacute;n personal que nos proporciona a trav&eacute;s de nuestro formulario en nuestra landing page.</p>
                    <p dir="ltr"><strong>2. Responsable del Tratamiento de Datos Personales</strong></p>
                    <p dir="ltr">El responsable del tratamiento de sus datos personales es Hidromec Ingenieros, con domicilio en Av. Aviaci&oacute;n N&ordm; 3985. Puede contactarnos al correo electr&oacute;nico info@hidromecingenieros.com o al tel&eacute;fono 448 5540.</p>
                    <p dir="ltr"><strong>3. Datos Personales Recopilados</strong></p>
                    <p dir="ltr">Recopilamos los siguientes datos personales a trav&eacute;s de nuestro formulario:</p>
                    <ul>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Nombre completo</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">RUC o DNI</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Direcci&oacute;n de correo electr&oacute;nico</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">N&uacute;mero de tel&eacute;fono</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Mensaje del usuario</p>
                    </li>
                    </ul>
                    <p dir="ltr"><strong>4. Finalidades del Tratamiento de Datos</strong></p>
                    <p dir="ltr">Los datos personales que nos proporciona ser&aacute;n utilizados para las siguientes finalidades:</p>
                    <ul>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Gestionar su solicitud o consulta.</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Enviar informaci&oacute;n comercial y promociones de nuestros productos y servicios.</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Realizar encuestas de satisfacci&oacute;n y estudios de mercado.</p>
                    </li>
                    </ul>
                    <p dir="ltr"><strong>5. Base Legal para el Tratamiento de Datos</strong></p>
                    <p dir="ltr">El tratamiento de sus datos personales se basa en el consentimiento que usted nos otorga al completar y enviar el formulario. Usted tiene derecho a retirar su consentimiento en cualquier momento, sin afectar la legalidad del tratamiento basado en el consentimiento previo a su retirada.</p>
                    <p dir="ltr"><strong>6. Almacenamiento y Seguridad de los Datos</strong></p>
                    <p dir="ltr">Sus datos personales ser&aacute;n almacenados en en servidores de alta seguridad ubicados f&iacute;sicamente en Canad&aacute; y ser&aacute;n tratados de manera confidencial y segura. Implementamos medidas de seguridad t&eacute;cnicas y organizativas para proteger sus datos contra el acceso no autorizado, la p&eacute;rdida o destrucci&oacute;n nuestros datacenter cumplen las normas de Arco.</p>
                    <p dir="ltr"><strong>7. Transferencia de Datos Personales</strong></p>
                    <p dir="ltr">No compartiremos sus datos personales con terceros, salvo que sea necesario para cumplir con las finalidades descritas en esta pol&iacute;tica o en caso de que exista una obligaci&oacute;n legal.</p>
                    <p dir="ltr"><strong>8. Derechos del Titular de los Datos</strong></p>
                    <p dir="ltr">Usted tiene derecho a acceder, rectificar, suprimir, oponerse, y limitar el tratamiento de sus datos personales. Para ejercer estos derechos, puede contactarnos a trav&eacute;s del correo electr&oacute;nico info@hidromecingenieros.com o al tel&eacute;fono 448 5540.</p>
                    <p dir="ltr"><strong>9. Consentimiento para el Env&iacute;o de Publicidad</strong></p>
                    <p dir="ltr">Al completar y enviar el formulario, usted consiente expresamente que Hidromec Ingenieros pueda enviarle comunicaciones publicitarias y comerciales a trav&eacute;s de correo electr&oacute;nico, mensajes de texto (SMS), llamadas telef&oacute;nicas, y cualquier otro medio de comunicaci&oacute;n electr&oacute;nica o f&iacute;sica.</p>
                    <p dir="ltr"><strong>10. Duraci&oacute;n del Consentimiento</strong></p>
                    <p dir="ltr">El consentimiento otorgado tendr&aacute; una duraci&oacute;n indefinida, salvo que usted decida revocar. Usted puede retirar su consentimiento en cualquier momento, comunic&aacute;ndose con nosotros a trav&eacute;s del correo electr&oacute;nico info@hidromecingenieros.com o al tel&eacute;fono 448 5540.</p>
                    <p dir="ltr"><strong>11. Procedimiento para Retirar el Consentimiento</strong></p>
                    <p dir="ltr">Si en alg&uacute;n momento no desea seguir recibiendo nuestras comunicaciones publicitarias, puede optar por:</p>
                    <ul>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Enviar un correo electr&oacute;nico a info@hidromecingenieros.com con el asunto "Cancelar Suscripci&oacute;n".</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Llamar al n&uacute;mero 448 5540 y solicitar la cancelaci&oacute;n de la suscripci&oacute;n.</p>
                    </li>
                    </ul>
                    <p dir="ltr"><strong>12. Seguridad de sus Datos Personales</strong></p>
                    <p dir="ltr">Implementamos medidas de seguridad t&eacute;cnicas y organizativas adecuadas para proteger sus datos personales contra el acceso no autorizado, la p&eacute;rdida o destrucci&oacute;n.</p>
                    <p dir="ltr"><strong>13. Cambios en la Pol&iacute;tica de Tratamiento de Datos</strong></p>
                    <p dir="ltr">Nos reservamos el derecho de modificar estas pol&iacute;ticas de tratamiento de datos en cualquier momento. Cualquier cambio ser&aacute; publicado en nuestra landing page y, si corresponde, le notificaremos a trav&eacute;s del correo electr&oacute;nico que nos haya proporcionado.</p>
                    <p dir="ltr"><strong>14. Contacto</strong></p>
                    <p dir="ltr">Si tiene alguna pregunta o inquietud sobre nuestras pol&iacute;ticas de tratamiento de datos personales, puede contactarnos a trav&eacute;s del correo electr&oacute;nico info@hidromecingenieros.com o al tel&eacute;fono 448 5540.</p>
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
