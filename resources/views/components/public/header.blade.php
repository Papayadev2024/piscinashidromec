<header
    class="bg-transparent bg__servicios-fondo font-outfit absolute w-full">
    <div class="text-textWhite flex justify-between items-center w-11/12 mx-auto py-5">
        <div class="flex justify-start items-center w-full md:w-auto" data-aos="fade-up" data-aos-offset="150">
            <a href="{{route('index')}}">
                <img src="{{ asset('images/img/logo.png') }}" alt="doctor Kewin">
            </a>

        </div>
        <div class="hidden md:flex justify-center items-center gap-10 font-semibold text-text18 xl:text-text22">
            <nav class="flex justify-center items-center gap-10 text-center" data-aos="fade-up" data-aos-offset="150">
                <a href="{{route('index')}}" class="text-textCeleste">Inicio</a>
                <a href="{{route('index').'#servicios'}}">Servicios</a>
                <a href="{{route('index').'#acerca'}}">Acerca del Doctor</a>
                <a href="{{route('index').'#proceso'}}">Proceso</a>
            </nav>
            <div data-aos="fade-up" data-aos-offset="150">
                <a href="https://api.whatsapp.com/send?phone={{$generales->whatsapp}}&text={{$generales->mensaje_whatsapp}}"
                    class="bg-bgCeleste py-3 px-5 rounded-xl inline-block text-center hover:bg-bgCelesteStrong md:duration-500 w-full md:w-auto">Solicitar
                    una cita</a>
            </div>
        </div>
    </div>

    

    <div class="flex justify-end w-11/12 mx-auto mb-4 z-10">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20">
            <a href="https://api.whatsapp.com/send?phone={{$generales->whatsapp}}&text={{$generales->mensaje_whatsapp}}" rel="noopener">
                <img src="{{ asset('images/svg/WhatsApp.svg') }}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full">
            </a>
        </div>
    </div>
</header>
