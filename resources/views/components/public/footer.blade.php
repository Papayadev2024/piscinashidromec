<footer class="bg-bgAzul font-outfit text-textWhite">
    <div class="w-11/12 mx-auto flex flex-col gap-10 py-12 2md:p-20">
        <div class="flex flex-col 2md:flex-row 2md:justify-between border-b-2 border-white pb-10 gap-12 2md:gap-0"  data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-3">
                    <h2 class="font-bold text-text28 xl:text-text32">Doctor Kewin</h2>
                    <p class="font-normal text-text14 xl:text-text18">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, to
                    </p>
                </div>
                <div class="font-semibold text-text16 xl:text-text20">
                    <a href="https://api.whatsapp.com/send?phone={{$generales->whatsapp}}&text={{$generales->mensaje_whatsapp}}"
                        class="bg-bgCeleste py-3 px-5 rounded-xl inline-block text-center hover:bg-bgCelesteStrong md:duration-500 w-full 2md:w-auto">Solicitar
                        una cita
                    </a>
                </div>
            </div>

            
        
            <div class="flex flex-col 2md:flex-row gap-12 2md:gap-16">
                <div class="flex flex-col gap-5">
                    <p class="font-medium text-text16 xl:text-text20">Enlaces</p>
                    <div class="flex flex-col gap-2">
                        <a href="#inicio" class="font-normal text-text14 xl:text-text18">Inicio</a>
                        <a href="#servicios" class="font-normal text-text14 xl:text-text18">Servicios</a>
                        <a href="#acerca" class="font-normal text-text14 xl:text-text18">Acerca del Doctor</a>
                        <a href="#proceso" class="font-normal text-text14 xl:text-text18">Proceso</a>
                    </div>
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-medium text-text16 xl:text-text20">
                        Datos de contacto
                    </p>
                    <div class="flex flex-col gap-2">
                        <p class="font-normal text-text14 xl:text-text18">
                            {{$generales->address}}, {{$generales->inside}} {{$generales->district}}
                        </p>
                        <div class="font-normal text-text14 xl:text-text18">
                            <p>Correo Electrónico</p>
                            <p href="#">{{$generales->email}}</p>
                        </div>
                        <div class="font-normal text-text14 xl:text-text18">
                            <span>Teléfono:</span>
                            <p href="#">{{$generales->cellphone}}</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-5">
                    <p class="font-medium text-text16 xl:text-text20">Aviso Legal</p>
                    <div class="font-normal text-text14 xl:text-text18 flex flex-col gap-2">
                        <p>Política de Privacidad</p>
                        <p>Términos y Condiciones</p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="flex flex-col gap-5 2md:flex-row 2md:justify-between items-start 2md:items-center text-text14 xl:text-text18">
            <p>Copyright &copy; 2023 Mundo Web. Reservados todos los derechos</p>
            <div class="flex justify-start 2md:justify-between gap-5 w-full 2md:w-auto">
                <a href="https://{{$generales->instagram}}">
                    <img src="{{ asset('images/svg/instagram.svg') }}" alt="instagram">
                </a>
                <a href="https://{{$generales->facebook}}">
                    <img src="{{ asset('images/svg/facebook.svg') }}" alt="facebook">
                </a>
                <a href="https://{{$generales->linkedin}}">
                    <img src="{{ asset('images/svg/linkedin.svg') }}" alt="linkedin">
                </a>
            </div>
        </div>
    </div>
</footer>
