<footer class="bg-[#222A51]">
    <div class="grid grid-cols-1 md:grid-cols-2 w-11/12 mx-auto py-16 gap-14 md:gap-5">
        <div class="w-full md:max-w-[500px] flex flex-col gap-5">
            <a href="#">
                <img src="{{asset('images/svg/image_21.svg')}}" alt="Hidromec" />
            </a>
            <p class="text-white font-helveticaLight text-text16">
                Somos una empresa con más de 17 años de experiencia en el mercado
                peruano especializada en el suministro e instalación de equipos de
                bombeo para aplicación industrial, residencial, agrícola y minera.
            </p>

            <div class="flex flex-col gap-2">
                <form action="" id="footerFormulario"
                    class="flex flex-col md:flex-row md:justify-start md:items-center gap-5">
                    @csrf
                    <div class="w-full">
                        <input required name="email" type="email" id="emailFooter" class="bg-white px-5 py-3 rounded-xl w-full" placeholder="Dejanos tu email" />
                    </div>
                    <input type="hidden" id="nameFooter" required name="full_name" value="Usuario suscrito" />
                    <input type="hidden" id="tipo" placeholder="tipo" name="tipo_message" value="Inscripción" />

                    <div class="flex justify-center items-center w-full md:w-auto">
                         <button
                            type="submit"
                            class="font-helveticaBold text-text16 text-white border border-white py-3 px-6 rounded-xl w-full md:w-auto text-center">Suscribe
                        </button>
                    </div>
                </form>
                <p class="font-helveticaLight text-text12 text-white">
                    Al suscribirse, acepta nuestra Política de privacidad y brinda su
                    consentimiento para recibir actualizaciones de nuestra empresa.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-0">
            <div class="flex flex-col gap-5">
                <p class="font-helveticaBold text-text16 text-white">Síganos</p>

                <div class="flex flex-col gap-5">
                    <a href="https://www.facebook.com/hidromecingenieros" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-helveticaLight text-text14">
                        <img src="{{asset('images/svg/image_16.svg')}}" alt="facebook" />
                        <span>Facebook</span>
                    </a>
                    <a href="https://www.instagram.com/hidromecingenieros/?hl=es" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-helveticaLight text-text14">
                        <img src="{{asset('images/svg/image_17.svg')}}" alt="instagram" />
                        <span>Instagram</span>
                    </a>
                    <a href="https://www.linkedin.com/company/hidromecingenieros/" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-helveticaLight text-text14">
                        <img src="{{asset('images/svg/image_19.svg')}}" alt="linkedin" />
                        <span>Linkedin</span>
                    </a>
                    <a href="https://www.youtube.com/channel/UC3VTnRz6b1aFrpQleveaxmw" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-helveticaLight text-text14">
                        <img src="{{asset('images/svg/image_20.svg')}}" alt="youtube" />
                        <span>YouTube</span>
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-5">
                <p class="font-helveticaBold text-text24 text-white leading-none">
                    Habla con un experto
                </p>

                <p class="text-white font-helveticaLight text-text16">
                    Gracias por su interés, por favor déjenos su consulta. Nos
                    pondremos en contacto con usted.
                </p>

                <div class="flex justify-start items-center">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=51946260675&text=¡Hola%20Hidromec!%20Quisiera%20recibir%20más%20detalles%20sobre%20sus%20productos%20y%20servicios%20especializados%20en%20Piscinas." rel="noopener"
                        class="bg-[#161A32] text-white font-helveticaBold text-text16 py-4 px-6 rounded-xl">Contáctanos
                        ahora</a>
                </div>
            </div>
        </div>
    </div>

    <div
        class="flex flex-col items-start gap-3 md:flex-row md:justify-between md:items-center w-11/12 mx-auto py-10 border-t border-white">
        <a href="#" target="_blank" class="text-white font-helveticaLight text-text14">&copy; 2024 Mundo Web.
            Reservados todos los derechos</a>
        <div>
            <a id="open-modal2" target="_blank" class="underline text-white font-helveticaLight text-text14 cursor-pointer">Política de
                privacidad</a>
        </div>
    </div>
</footer>


