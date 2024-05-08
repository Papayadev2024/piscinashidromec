@extends('components.public.matrix')

@section('css_improtados')
    <style>
        .bg__servicios-fondo {
            background-color: #23498E;
        }
    </style>
@stop
{{-- style="background-image: url({{asset('images/img/Hero_Doctor_mobile.png')}})" --}}
@section('content')
    <main class="pt-32">
        

        <section class="font-outfit pb-12 md:py-12">
            <div class="grid grid-cols-1  grid-rows-auto  lg:grid-cols-2  lg:grid-rows-auto w-11/12 mx-auto gap-8 md:gap-12">
                <div class="order-1 col-span-1 row-span-1 lg:order-1 lg:col-span-1 lg:row-span-1 flex flex-col gap-3">
                    <h4 class="text-textCeleste text-text20 md:text-text28 font-semibold">Servicio</h4>
                    <h2 class="font-bold text-textAzul text-text40 md:text-text52 leading-none md:leading-tight">
                        {{ $servicioById->title }}?
                    </h2>
                </div>

                <div
                    class="order-3 col-span-1 row-span-1 lg:order-2 lg:col-span-1 lg:row-span-1 flex justify-end items-end">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}"
                        class="font-semibold text-text20 bg-bgAzulStrong text-white  py-4 lg:py-5 rounded-xl px-10 w-full lg:w-auto text-center hover:bg-blue-600 md:duration-300">
                        Solicitar una cita
                    </a>
                </div>

                <div
                    class="order-2 col-span-1 row-span-1 lg:order-3 lg:col-span-2 lg:row-span-1 text-textAzul font-medium text-text18 md:text-text22">
                    <p>
                        {!! $servicioById->description !!}
                    </p>
                </div>
            </div>
        </section>

        <section class="font-outfit pb-12 md:py-12">
            <div class="flex flex-col gap-3 w-11/12 mx-auto justify-center items-center">
                <h4 class="text-textCeleste font-semibold text-text24 md:text-text28 text-center">Beneficios</h4>
                <h2 class="font-bold text-text40 md:text-text52 text-textAzul text-center leading-none md:leading-tight">
                    ¡Beneficios para tu salud!
</h2>
                <p class="font-medium text-text16 md:text-text22 text-center w-full md:w-2/3 text-textAzul">¿Buscas una solución efectiva para problemas de vesícula, obesidad o sobrepeso? El Dr. Kewin Quispe de la Roca y su equipo de expertos tienen la respuesta.  Descubre los beneficios de confiar en su experiencia y cuidado personalizado para recuperar tu bienestar y vitalidad. ¡Obten los mejores resultados en tiempo récord!

                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 w-11/12 mx-auto py-12">
                <div class="flex flex-col gap-4 bg-bgRosa rounded-xl group hover:bg-bgCeleste p-5 md:duration-300">
                    <p class="font-bold text-text68 text-textCeleste group-hover:text-white md:duration-300">1</p>
                    <div class="flex flex-col gap-2">
                        <h2
                            class="font-bold text-textAzul text-text36 leading-none md:leading-tight group-hover:text-white md:duration-300">
                            Tratamiento especializado
                        </h2>
                        <p
                            class="font-medium text-text18 md:text-text22 text-textAzul group-hover:text-white md:duration-300">
                            El Dr. Kewin Quispe de la Roca y los profesionales que lo acompañan te ofrecen un tratamiento especializado y personalizado, como el <b>balón gástrico</b> o <b>banda gástrica</b>, para mejorar tu salud y puedas seguir tu vida con normalidad.

                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-4 bg-bgRosa rounded-xl group hover:bg-bgCeleste p-5 md:duration-300">
                    <p class="font-bold text-text68 text-textCeleste group-hover:text-white md:duration-300">2</p>
                    <div class="flex flex-col gap-2">
                        <h2
                            class="font-bold text-textAzul text-text36 leading-none md:leading-tight group-hover:text-white md:duration-300">
                            Mejora tu calidad de vida </h2>
                        <p
                            class="font-medium text-text18 md:text-text22 text-textAzul group-hover:text-white md:duration-300">
                            Al recibir atención médica adecuada y específica para tus necesidades, puedes experimentar una mejora significativa en tu calidad de vida, incluyendo la reducción de síntomas y el aumento de la energía y vitalidad. ¡Mejora para cumplir tus objetivos!
                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-4 bg-bgRosa rounded-xl group hover:bg-bgCeleste p-5 md:duration-300">
                    <p class="font-bold text-text68 text-textCeleste group-hover:text-white md:duration-300">3</p>
                    <div class="flex flex-col gap-2">
                        <h2
                            class="font-bold text-textAzul text-text36 leading-none md:leading-tight group-hover:text-white md:duration-300">
                            Reducción de Riesgos</h2>
                        <p
                            class="font-medium text-text18 md:text-text22 text-textAzul group-hover:text-white md:duration-300">
                            El tratamiento adecuado en contra de los problemas de vesícula, obesidad y sobrepeso puede ayudarte a reducir los riesgos asociados, como complicaciones de salud a largo plazo, enfermedades cardiovasculares y otros problemas de salud relacionados.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-4 bg-bgRosa rounded-xl group hover:bg-bgCeleste p-5 md:duration-300">
                    <p class="font-bold text-text68 text-textCeleste group-hover:text-white md:duration-300">4</p>
                    <div class="flex flex-col gap-2">
                        <h2
                            class="font-bold text-textAzul text-text36 leading-none md:leading-tight group-hover:text-white md:duration-300">
                            Asesoramiento</h2>
                        <p
                            class="font-medium text-text18 md:text-text22 text-textAzul group-hover:text-white md:duration-300">
                            El Dr. Kewin y su equipo no solo proporcionan tratamiento médico, sino también asesoramiento y educación sobre hábitos de vida saludables, lo que te ayuda a tomar el control de tu salud y a mantener resultados positivos a largo plazo.
                        </p>
                    </div>
                </div>
            </div>
        </section>     
    </main>


@section('scripts_improtados')

@stop

@stop
