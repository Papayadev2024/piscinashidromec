@extends('components.public.matrix')

@section('css_improtados')

@stop


@section('content')
    <main class="flex flex-col gap-20 mt-24 font-outfit" id="servicios">
        <section class="flex flex-col gap-10 w-11/12 mx-auto" data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-3 text-center">
                <h3 class="font-semibold text-textCeleste text-text24 xl:text-text28 leading-none md:leading-tight">
                    Descubre Soluciones Personalizadas
                </h3>
                <h2 class="font-bold text-textAzul text-text40 md:text-text64 xl:text-text68 leading-none md:leading-tight">
                    Atención Especializada para tu Bienestar
                </h2>
            </div>
            <div class="swiper enfermedades w-11/12 mx-auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-5 text-textAzul bg-bgRosa rounded-3xl py-16 px-5 group">
                            <div class="flex flex-col justify-center items-center gap-3">
                                <div class="relative">
                                    <div>
                                        <svg width="97" height="96" viewBox="0 0 97 96" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="48.3335" cy="48" r="48" fill="#42BAE2"
                                                class="group-hover:fill-bgAzul md:duration-500" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M54.2254 42.814C54.905 43.2751 55.5301 43.8171 56.0835 44.4412V24.75H58.6668V39.3568C59.6463 38.0553 60.9133 36.9285 62.4984 35.9285C65.3915 34.1033 66.1638 32.0861 66.0581 30.6042C65.9485 29.0668 64.8901 27.7554 63.4251 27.2671L64.2419 24.8163C66.6519 25.6196 68.4476 27.7935 68.6349 30.4205C68.7009 31.3465 68.5668 32.2896 68.2206 33.2174C70.4356 32.3825 72.5522 31.7552 73.8492 31.4262L74.4844 33.9303C72.0741 34.5416 66.9534 36.1725 63.8769 38.1133C62.1353 39.212 60.9483 40.417 60.1414 41.7955C59.3395 43.1654 58.8695 44.7806 58.6668 46.7728V71.25H56.0835V51.875C56.0835 48.4114 54.6674 46.2358 52.7749 44.9517C51.1203 43.8288 49.0163 43.3341 46.9896 43.3878C47.024 43.6286 47.0418 43.8748 47.0418 44.125C47.0418 46.0808 45.9552 47.7829 44.3524 48.6602C43.101 49.3451 41.8752 50.4482 41.8752 51.875V59.625H41.8507C41.5209 63.9601 37.8989 67.375 33.4793 67.375C29.0597 67.375 25.4377 63.9601 25.108 59.625H25.0835V55.75C25.0835 46.4762 32.6014 38.9583 41.8752 38.9583C43.4957 38.9583 44.942 39.7044 45.8893 40.8718C48.6456 40.59 51.746 41.1316 54.2254 42.814ZM41.8752 41.5417C34.0282 41.5417 27.6668 47.903 27.6668 55.75V59.2052L27.6839 59.4291C27.912 62.4277 30.4208 64.7917 33.4793 64.7917C36.5379 64.7917 39.0467 62.4277 39.2748 59.4291L39.2918 59.2052V51.875C39.2918 50.3758 39.9448 49.1691 40.6836 48.3077C41.4111 47.4594 42.3106 46.8328 43.1121 46.3941C43.92 45.9518 44.4585 45.0994 44.4585 44.125C44.4585 42.6982 43.3019 41.5417 41.8752 41.5417Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <a href="#">
                                        <img src="{{ asset('images/svg/video.svg') }}"
                                            class="absolute bottom-0 right-0 opacity-0 group-hover:opacity-100 md:duration-500"
                                            alt="problema de vesicula" />

                                    </a>
                                </div>

                                <div class="relative flex flex-col gap-5 text-center">
                                    <h2 class="font-bold text-text32 xl:text-text36">
                                        Problema de la vesícula
                                    </h2>
                                    <p class="font-medium text-text16 xl:text-text20">
                                        Conoce las <b>causas de los problemas de vesícula</b> y obtén la mejor atención por
                                        parte del Dr. Kewin y su equipo de especialistas para evitar problemas de salud en
                                        un futuro.

                                    </p>
                                    <div class="flex justify-center items-center absolute -bottom-[85px] w-full">
                                        <a href="#"
                                            class="bg-bgCeleste py-3 px-5 rounded-xl inline-block text-center text-textWhite font-semibold text-text16 xl:text-text20 w-full md:w-auto group-hover:bg-bgAzul md:duration-500">
                                            Solicitar una cita
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col gap-5 text-textAzul bg-bgRosa rounded-3xl py-16 px-5 group">
                            <div class="flex flex-col justify-center items-center gap-3">
                                <div class="relative">
                                    <div>
                                        <svg width="96" height="96" viewBox="0 0 96 96" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="48" cy="48" r="48" fill="#42BAE2"
                                                class="group-hover:fill-bgAzul md:duration-500" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M40.2503 56.6632C39.0595 57.156 37.7125 57.5083 35.973 57.5083C33.6016 57.5083 32.8178 59.405 31.9848 61.4208C31.0404 63.7065 30.0326 66.1452 26.5756 66.1452C20.0698 66.1452 21.675 46.1243 25.5501 38.3743C29.4251 30.6243 34.7278 29.9785 45.571 29.9785C52.2131 29.9785 53.8974 30.9912 55.2024 31.776C56.0279 32.2724 56.7015 32.6775 58.382 32.6775C60.1168 32.6775 62.5457 32.1592 64.9745 31.641C68.6178 30.8637 72.261 30.0865 73.5621 31.0581C75.7307 32.6775 69.225 44.553 62.7191 44.553C59.3705 44.553 57.3625 46.9536 55.4135 49.2835C53.5759 51.4802 51.791 53.6141 48.9846 53.6141C46.2823 53.6141 44.527 54.4644 42.8337 55.3704V68.0827H40.2503V56.6632ZM28.2287 62.9908C27.9445 63.2819 27.5359 63.5619 26.5756 63.5619H26.5726C26.5047 63.5619 26.4521 63.5619 26.3175 63.4292C26.1252 63.2398 25.8395 62.824 25.5624 62.0374C25.0049 60.4549 24.7184 58.0591 24.7532 55.1973C24.8228 49.4587 26.156 42.939 27.8607 39.5296C29.56 36.131 31.3935 34.5681 33.8161 33.703C36.4929 32.7473 40.0785 32.5618 45.571 32.5618C45.9799 32.5618 46.367 32.5659 46.7335 32.5733C45.5928 34.0318 44.9712 35.6341 44.6377 37.0234C44.3705 38.1373 44.2819 39.1362 44.2597 39.8583C44.2484 40.2207 44.254 40.5167 44.2626 40.7272C44.267 40.8325 44.2722 40.9166 44.2766 40.9772L44.2803 41.0276L44.2823 41.0502L44.2843 41.0729L44.2851 41.0807L44.2855 41.085C44.2855 41.0856 44.2856 41.0862 45.5708 40.9577C46.8562 40.8292 46.8562 40.8295 46.8562 40.8301L46.8532 40.7913C46.8506 40.7558 46.847 40.6981 46.8438 40.6204C46.8373 40.465 46.8327 40.2314 46.8417 39.9378C46.8599 39.348 46.9328 38.5305 47.1498 37.6262C47.5409 35.9964 48.3794 34.1554 50.1504 32.7989C51.9336 33.027 52.7464 33.3729 53.2298 33.6228C53.4464 33.7348 53.6295 33.8449 53.8777 33.9938L53.9522 34.0386C54.2181 34.1981 54.5811 34.4145 55.0071 34.608C55.9522 35.0371 56.9915 35.2608 58.382 35.2608C59.7275 35.2608 61.2873 35.0161 62.7634 34.7342C63.6514 34.5644 64.6267 34.3566 65.5678 34.156C66.1698 34.0278 66.7584 33.9023 67.3008 33.7919C68.7835 33.4899 70.056 33.2697 71.0504 33.206C71.1002 33.2028 71.1485 33.2001 71.1952 33.1977C70.8707 34.2175 70.2056 35.5735 69.2612 36.9547C68.2911 38.3732 67.1162 39.6866 65.8949 40.6191C64.6504 41.5697 63.5668 41.9697 62.7191 41.9697C58.1675 41.9697 55.4656 45.1969 53.6771 47.3332L53.5079 47.5352C52.5469 48.6828 51.8178 49.5532 51.031 50.1896C50.2938 50.7857 49.6747 51.0307 48.9846 51.0307C46.3509 51.0307 44.411 51.7115 42.8337 52.4677V46.7702C42.8337 46.2596 43.0855 45.7836 43.5228 45.401C43.9844 44.9971 44.5002 44.8327 44.7712 44.8327V42.2493C43.7505 42.2493 42.6517 42.7306 41.8216 43.4569C40.9901 44.1845 40.2888 45.2826 40.2519 46.6563H33.6721C30.5859 46.6563 26.8826 48.0144 30.5859 50.7299C33.2724 52.6997 37.9072 51.1321 40.2503 50.1226V53.816C38.9342 54.4823 37.7383 54.925 35.973 54.925C33.7767 54.925 32.2424 55.948 31.2213 57.3035C30.4705 58.3002 29.9532 59.5628 29.5829 60.4668C29.5763 60.4829 29.5697 60.499 29.5632 60.5149C29.5177 60.6259 29.4745 60.7312 29.4333 60.8295C28.976 61.9223 28.6367 62.5729 28.2287 62.9908Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <a href="#">
                                        <img src="{{ asset('images/svg/video.svg') }}"
                                            class="absolute bottom-0 right-0 opacity-0 group-hover:opacity-100 md:duration-500"
                                            alt="presencia de hernias" />


                                    </a>
                                </div>

                                <div class="relative flex flex-col gap-5 text-center">
                                    <h2 class="font-bold text-text32 xl:text-text36">
                                        Presencia de Hernias
                                    </h2>
                                    <p class="font-medium text-text16 xl:text-text20">
                                        Una hernia no tratada a tiempo puede perjudicarte en tus actividades diarias.
                                        Nosotros te ofrecemos una atención especializada y el tratamiento más avanzado para
                                        recuperar tu mejor versión.

                                    </p>
                                    <div class="flex justify-center items-center absolute -bottom-[85px] w-full">
                                        <a href="#"
                                            class="bg-bgCeleste py-3 px-5 rounded-xl inline-block text-center text-textWhite font-semibold text-text16 xl:text-text20 w-full md:w-auto group-hover:bg-bgAzul md:duration-500">
                                            Solicitar una cita
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col gap-5 text-textAzul bg-bgRosa rounded-3xl py-16 px-5 group">
                            <div class="flex flex-col justify-center items-center gap-3">
                                <div class="relative">
                                    <div>
                                        <svg width="97" height="96" viewBox="0 0 97 96" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="48.667" cy="48" r="48" fill="#42BAE2"
                                                class="group-hover:fill-bgAzul md:duration-500" />
                                            <path
                                                d="M31.8755 44.1243C31.8755 40.5573 40.2713 37.666 48.6672 37.666C57.063 37.666 65.4588 40.5573 65.4588 44.1243C65.4588 47.8466 60.6914 45.5098 58.0258 44.2768C57.9504 44.2419 57.8777 44.337 57.9289 44.4025C62.9012 50.7554 64.0515 57.0724 56.461 60.894C56.4348 60.9072 56.4171 60.93 56.4175 60.9594C56.4215 61.2351 56.4612 61.6913 56.5114 62.2673C56.7939 65.5083 57.407 72.541 53.8338 72.541C50.5206 72.541 50.9444 66.735 51.1702 63.6418C51.211 63.0829 51.2453 62.6126 51.2499 62.2811C51.2506 62.2383 51.2158 62.2077 51.173 62.2077H46.1613C46.1185 62.2077 46.0838 62.2383 46.0844 62.2811C46.089 62.6126 46.1233 63.0829 46.1641 63.6418C46.3899 66.735 46.8137 72.541 43.5005 72.541C39.9273 72.541 40.5404 65.5083 40.8229 62.2674C40.8731 61.6913 40.9129 61.2351 40.9168 60.9594C40.9173 60.93 40.8995 60.9072 40.8733 60.894C33.2828 57.0724 34.4332 50.7554 39.4054 44.4025C39.4566 44.337 39.3839 44.2419 39.3085 44.2768C36.6429 45.5098 31.8755 47.8466 31.8755 44.1243Z"
                                                stroke="white" stroke-width="2.58333" stroke-linecap="round" />
                                            <path
                                                d="M53.8338 28.6257C53.8338 31.4791 51.5206 33.7923 48.6672 33.7923C45.8137 33.7923 43.5005 31.4791 43.5005 28.6257C43.5005 25.7722 45.8137 23.459 48.6672 23.459C51.5206 23.459 53.8338 25.7722 53.8338 28.6257Z"
                                                stroke="white" stroke-width="2.58333" />
                                        </svg>
                                    </div>
                                    <a href="#">

                                        <img src="{{ asset('images/svg/video.svg') }}"
                                            class="absolute bottom-0 right-0 opacity-0 group-hover:opacity-100 md:duration-500"
                                            alt="problema de obesidad" />

                                    </a>
                                </div>

                                <div class="relative flex flex-col gap-5 text-center">
                                    <h2 class="font-bold text-text32 xl:text-text36">
                                        Problema de obesidad
                                    </h2>
                                    <p class="font-medium text-text16 xl:text-text20">
                                        Combatir la obesidad es esencial para mejorar la salud y el bienestar. En nuestro
                                        servicio, ofrecemos soluciones efectivas y personalizadas para la <b>gestión del
                                            peso</b> y el estilo de <b>vida saludable</b>.

                                    </p>
                                    <div class="flex justify-center items-center absolute -bottom-[85px] w-full">
                                        <a href="#"
                                            class="bg-bgCeleste py-3 px-5 rounded-xl inline-block text-center text-textWhite font-semibold text-text16 xl:text-text20 w-full md:w-auto group-hover:bg-bgAzul md:duration-500">
                                            Solicitar una cita
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col gap-5 text-textAzul bg-bgRosa rounded-3xl py-16 px-5 group">
                            <div class="flex flex-col justify-center items-center gap-3">
                                <div class="relative">
                                    <div>
                                        <svg width="97" height="96" viewBox="0 0 97 96" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="48.3335" cy="48" r="48" fill="#42BAE2"
                                                class="group-hover:fill-bgAzul md:duration-500" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M68.3335 26.6667H28.3335C27.5971 26.6667 27.0002 27.2636 27.0002 28V68C27.0002 68.7364 27.5971 69.3333 28.3335 69.3333H68.3335C69.0699 69.3333 69.6668 68.7364 69.6668 68V28C69.6668 27.2636 69.0699 26.6667 68.3335 26.6667ZM28.3335 24C26.1244 24 24.3335 25.7909 24.3335 28V68C24.3335 70.2092 26.1244 72 28.3335 72H68.3335C70.5427 72 72.3335 70.2092 72.3335 68V28C72.3335 25.7909 70.5427 24 68.3335 24H28.3335Z"
                                                fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M39.4188 25.125C39.4188 25.3385 39.4198 30.1274 39.4216 30.3189C39.4666 35.1291 40.0892 37.4871 41.3122 38.7473C42.3863 39.8542 44.1971 40.3899 47.5976 40.4905C47.8668 37.7761 48.9494 35.6102 50.5402 34.0671C52.371 32.2913 54.7955 31.4185 57.1952 31.4185C59.5951 31.4185 62.0195 32.2913 63.8504 34.0671C65.697 35.8582 66.8586 38.4885 66.8586 41.8414V52.951C66.8586 56.0906 66.3372 59.4125 64.7222 61.991C63.0467 64.6658 60.2751 66.4039 56.1762 66.4039C51.9584 66.4039 49.0306 63.8937 46.4435 61.6615L46.3611 61.5903C43.7271 59.3175 41.3587 57.2737 38.0002 56.8098C36.5898 56.8245 35.6095 57.2026 34.905 57.7186C34.1736 58.2543 33.6487 59.0058 33.2774 59.8749C32.5183 61.6514 32.4932 63.6985 32.5299 64.5781C32.5372 64.7525 32.541 66.6422 32.5436 68.4181C32.5448 69.3217 32.5459 70.2165 32.5464 70.8853L32.5474 71.9961L29.8807 71.999L29.8798 70.8878C29.8792 70.2191 29.8782 69.3249 29.877 68.4219C29.8756 67.5189 29.8739 66.6078 29.8719 65.9054C29.8708 65.5539 29.8698 65.2558 29.8684 65.0373C29.8679 64.9278 29.8672 64.8397 29.8666 64.7754C29.8662 64.7319 29.8658 64.7071 29.8656 64.6954C29.8655 64.6869 29.8655 64.6854 29.8656 64.6891C29.824 63.6919 29.8282 61.1602 30.8252 58.827C31.3319 57.6413 32.1168 56.4554 33.3292 55.5673C34.5546 54.6698 36.1271 54.1426 38.0855 54.1426C38.6119 54.1426 39.0987 54.1545 39.5614 54.1657C40.4039 54.1861 41.1666 54.2046 41.9442 54.1463C43.0792 54.0613 43.9714 53.8167 44.697 53.2729C46.0656 52.247 47.3656 49.7331 47.5174 43.1569C43.987 43.0561 41.2332 42.495 39.3984 40.6045C37.3586 38.5025 36.7995 35.1055 36.7551 30.3438C36.7531 30.1357 36.7522 25.3245 36.7522 25.125H39.4188ZM44.1702 56.4569C45.556 57.3697 46.7778 58.4257 47.9148 59.4086C48.0056 59.487 48.0958 59.5651 48.1856 59.6425C50.866 61.9553 53.083 63.7373 56.1762 63.7373C59.3879 63.7373 61.2907 62.4455 62.4622 60.5754C63.6939 58.6091 64.1919 55.8713 64.1919 52.951V41.8414C64.1919 39.1347 63.271 37.2201 61.9938 35.9813C60.701 34.7273 58.9604 34.0851 57.1952 34.0851C55.4302 34.0851 53.6896 34.7273 52.3968 35.9813C51.1196 37.2201 50.1987 39.1347 50.1987 41.8414C50.1987 49.4277 48.8824 53.4683 46.2963 55.4066C45.6223 55.9119 44.902 56.2419 44.1702 56.4569Z"
                                                fill="white" />
                                            <path
                                                d="M65.5257 49.4173C59.466 54.6651 55.931 44.1694 48.3564 49.4173L46.3364 53.4571L41.2866 55.9821C41.2866 55.9821 50.8813 65.0717 56.4361 65.0717C61.9909 65.0717 66.5357 60.0219 65.5257 49.4173Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <a href="#">
                                        <img src="{{ asset('images/svg/video.svg') }}"
                                            class="absolute bottom-0 right-0 opacity-0 group-hover:opacity-100 md:duration-500"
                                            alt="balón gástrico" />

                                    </a>
                                </div>

                                <div class="relative flex flex-col gap-5 text-center">
                                    <h2 class="font-bold text-text32 xl:text-text36">
                                        Balón Gástrico
                                    </h2>
                                    <p class="font-medium text-text16 xl:text-text20">
                                        Confía en el Dr. Kewin, especialista en <b>balón gástrico</b>, para recibir la mejor
                                        atención y asesoramiento de calidad. Nuestro equipo de especialistas te brinda el
                                        mejor cuidado para ayudarte a alcanzar tus objetivos de pérdida de peso de manera
                                        segura y efectiva.

                                    </p>
                                    <div class="flex justify-center items-center absolute -bottom-[85px] w-full">
                                        <a href="#"
                                            class="bg-bgCeleste py-3 px-5 rounded-xl inline-block text-center text-textWhite font-semibold text-text16 xl:text-text20 w-full md:w-auto group-hover:bg-bgAzul md:duration-500">
                                            Solicitar una cita
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col gap-5 text-textAzul bg-bgRosa rounded-3xl py-16 px-5 group">
                            <div class="flex flex-col justify-center items-center gap-3">
                                <div class="relative">
                                    <div>
                                        <svg width="96" height="96" viewBox="0 0 96 96" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="48" cy="48" r="48" fill="#42BAE2"
                                                class="group-hover:fill-bgAzul md:duration-500" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M38.5909 36.5331C40.1149 38.1945 42.6897 38.9071 47.4084 39.0081C47.6775 35.4444 49.0501 32.6371 51.0815 30.6665C53.3396 28.4763 56.3342 27.3958 59.3051 27.3958C62.2758 27.3958 65.2704 28.4763 67.5285 30.6665C69.8018 32.8715 71.25 36.1245 71.25 40.3126V54.5209C71.25 58.5021 70.587 62.66 68.5808 65.8628C66.5162 69.1587 63.1062 71.3126 58.0016 71.3126C52.782 71.3126 49.1476 68.2149 45.8246 65.3478L45.6799 65.223C42.3336 62.335 39.2156 59.6442 34.7822 59.042C32.6082 59.0584 31.1448 59.7227 30.1231 60.6322C29.0634 61.5753 28.3801 62.8717 27.9535 64.2638C27.5277 65.6534 27.3804 67.0658 27.3435 68.1475C27.3253 68.6843 27.3345 69.1297 27.348 69.4371C27.3547 69.5906 27.3624 69.7091 27.3682 69.7866C27.3711 69.8253 27.3735 69.8538 27.3751 69.8712L27.3767 69.889L27.3769 69.8904C27.3768 69.8901 27.3768 69.8895 26.0918 70.0209C24.8068 70.1521 24.8068 70.1515 24.8067 70.151L24.8065 70.1494L24.8062 70.1458L24.8051 70.135L24.8019 70.1001C24.7993 70.0711 24.7959 70.0306 24.7921 69.9796C24.7844 69.8773 24.7751 69.7321 24.7671 69.5501C24.7512 69.1865 24.7408 68.6732 24.7617 68.0595C24.8032 66.8404 24.9693 65.1852 25.4835 63.507C25.9969 61.8315 26.8802 60.0601 28.4055 58.7024C29.9558 57.3227 32.0716 56.4584 34.865 56.4584C35.5147 56.4584 36.1269 56.4731 36.715 56.4872C37.8077 56.5136 38.8175 56.5378 39.8309 56.4619C41.3222 56.3502 42.5523 56.0252 43.5687 55.2633C45.5142 53.8052 47.2006 50.3238 47.3494 41.5914C42.5457 41.4919 38.9789 40.7777 36.6872 38.2794C35.4425 36.9226 34.6741 35.1469 34.2107 32.9502C33.7489 30.7616 33.5734 28.0739 33.5734 24.8125H36.1567C36.1567 28.0094 36.3315 30.4884 36.7383 32.417C37.1435 34.3374 37.762 35.6295 38.5909 36.5331ZM47.187 63.111C45.4971 61.6506 43.6898 60.0888 41.599 58.8331C42.8182 58.5961 44.0213 58.1525 45.118 57.3304C46.7977 56.0715 48.0635 54.058 48.8764 50.9655C51.0033 49.5304 52.7517 49.2274 54.2869 49.3963C55.929 49.5769 57.4476 50.3035 59.1218 51.1521L59.4004 51.2937C60.9207 52.0671 62.6359 52.9396 64.4587 53.1692C65.8431 53.3435 67.2394 53.1493 68.6667 52.434V54.5209C68.6667 58.2896 68.0263 61.8817 66.3915 64.4914C64.8152 67.008 62.2468 68.7292 58.0016 68.7292C53.8714 68.7292 50.9258 66.3372 47.5121 63.3918L47.187 63.111ZM68.6667 49.3885V40.3126C68.6667 36.7505 67.4516 34.191 65.7298 32.521C63.993 30.8363 61.6609 29.9792 59.3051 29.9792C56.9492 29.9792 54.6171 30.8363 52.8802 32.521C51.1585 34.191 49.9434 36.7505 49.9434 40.3126C49.9434 43.1469 49.7988 45.5775 49.5159 47.657C51.3018 46.8635 52.976 46.6532 54.5693 46.8284C56.7416 47.0673 58.6541 48.0186 60.2898 48.8479L60.4065 48.9071C62.074 49.7527 63.4184 50.4345 64.7816 50.6061C65.9316 50.751 67.1763 50.5342 68.6667 49.3885Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <a href="#">

                                        <img src="{{ asset('images/svg/video.svg') }}"
                                            class="absolute bottom-0 right-0 opacity-0 group-hover:opacity-100 md:duration-500"
                                            alt="cinta gástrica" />

                                    </a>
                                </div>

                                <div class="relative flex flex-col gap-5 text-center">
                                    <h2 class="font-bold text-text32 xl:text-text36">
                                        Cinta Gástrica
                                    </h2>
                                    <p class="font-medium text-text16 xl:text-text20">
                                        Descubre la efectividad del <b>tratamiento para la obesidad</b> con la cinta
                                        gástrica, una opción segura y probada que ofrece nuestro equipo de especialistas
                                        para hacer de tu vida más saludable y sencilla.

                                    </p>
                                    <div class="flex justify-center items-center absolute -bottom-[85px] w-full">
                                        <a href="#"
                                            class="bg-bgCeleste py-3 px-5 rounded-xl inline-block text-center text-textWhite font-semibold text-text16 xl:text-text20 w-full md:w-auto group-hover:bg-bgAzul md:duration-500">
                                            Solicitar una cita
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col gap-5 text-textAzul bg-bgRosa rounded-3xl py-16 px-5 group">
                            <div class="flex flex-col justify-center items-center gap-3">
                                <div class="relative">
                                    <div>
                                        <svg width="97" height="96" viewBox="0 0 97 96" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="48.667" cy="48" r="48" fill="#42BAE2"
                                                class="group-hover:fill-bgAzul md:duration-500" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M45.7435 30.0653C45.458 29.906 45.2136 29.8716 44.9173 29.9737C44.8595 29.9936 44.8063 30.0154 44.7574 30.0394L44.7572 30.0408L44.753 30.0432L44.7346 30.0535L44.658 30.0969C44.6519 30.1004 44.6456 30.1039 44.639 30.1076C44.4261 30.2511 44.3141 30.4592 44.2448 30.7715C44.1299 31.2882 44.1786 31.9692 44.2994 32.7349C44.4371 33.608 44.8974 34.8403 45.5574 35.668C45.8816 36.0747 46.189 36.3025 46.445 36.3984C46.6579 36.4782 46.9069 36.4983 47.2638 36.3307C47.8029 36.0777 48.1367 35.4583 47.9982 34.2136C47.8635 33.0026 47.3008 31.7257 46.7895 31.0622C46.4272 30.5921 46.074 30.2497 45.7435 30.0653ZM43.2843 27.9064C43.5186 27.7592 43.7818 27.6324 44.0767 27.5309C45.175 27.1529 46.1817 27.3516 47.0021 27.8093C47.7772 28.2417 48.3846 28.8999 48.8355 29.4851C49.6426 30.5323 50.3801 32.2584 50.5658 33.928C50.7008 35.1414 50.5565 36.6314 49.6317 37.7148C52.0077 37.6355 53.9002 37.8717 55.7109 38.1016L55.7739 38.1096C57.6601 38.3492 59.4583 38.5776 61.7633 38.4913C62.8351 38.4513 63.7498 38.2363 64.7404 38.0037C65.0105 37.9402 65.2863 37.8754 65.5724 37.8125C66.8593 37.5294 68.3006 37.307 69.913 37.7826C70.452 37.9416 70.9303 38.226 71.2898 38.6573C71.6462 39.085 71.8193 39.5768 71.8839 40.0456C72.0063 40.9328 71.7598 41.8675 71.4767 42.6234C70.8953 44.1758 69.8705 45.7054 69.4967 46.2334C68.2185 48.0393 66.718 49.0636 65.0937 49.5954C63.5123 50.113 61.886 50.138 60.4095 50.0861C59.9762 50.0708 59.5623 50.0499 59.1622 50.0296C58.1303 49.9772 57.191 49.9297 56.2531 49.998C55.6262 50.0436 55.0441 50.1407 54.501 50.3163C54.8032 50.3736 55.1043 50.4488 55.4044 50.5418C57.8511 51.2993 60.0071 53.1746 62.0352 55.6511C62.3362 55.9585 62.5705 56.2852 62.7456 56.6653C62.9229 57.0505 63.0144 57.4384 63.0818 57.8043C63.2664 58.8063 62.9828 59.8189 62.5609 60.6592C62.1293 61.5182 61.4889 62.3294 60.7589 62.9849C60.0341 63.6358 59.1564 64.1904 58.2206 64.4547C57.2703 64.7231 56.1681 64.7089 55.1959 64.0543C54.6894 63.7133 54.3812 63.169 54.2411 62.9006C54.1763 62.7765 54.1224 62.6607 54.0803 62.5648C53.3407 61.8186 52.8625 61.444 52.4582 61.259C52.1686 61.1265 51.8625 61.0664 51.3901 61.1342C51.3082 61.2142 51.2106 61.3086 51.099 61.415C50.7394 61.7582 50.2318 62.2288 49.6385 62.74C48.4783 63.7397 46.8935 64.98 45.4145 65.6737C42.4133 67.0812 39.3787 67.7043 36.4851 67.202C33.5662 66.6951 30.9405 65.0685 28.7442 62.2566C23.2457 55.2165 25.2318 45.0997 29.8146 38.6534C31.7773 35.8925 35.2585 33.1624 38.1286 31.1735C39.5847 30.1646 40.9231 29.3198 41.8978 28.7271C42.3854 28.4305 42.7831 28.1963 43.06 28.0357C43.147 27.9852 43.222 27.942 43.2843 27.9064ZM49.8383 59.0351L50.1025 58.766L50.4702 58.6814C51.5566 58.4314 52.541 58.4558 53.5333 58.91C53.716 58.9937 53.8947 59.0902 54.0705 59.198C54.3017 58.6271 54.6818 58.0725 55.0852 57.5944C55.605 56.9785 56.2592 56.3771 56.9615 55.893C57.3226 55.6441 57.7181 55.4112 58.1335 55.2242C56.9324 54.0962 55.7795 53.3623 54.6402 53.0095C52.9855 52.4971 51.1464 52.7259 48.8789 54.1811L48.8654 54.1897L42.4503 58.086L42.2943 58.1333L41.919 56.8974C42.2943 58.1333 42.2943 58.1333 42.2943 58.1333L42.2929 58.1338L42.2852 58.1361L42.267 58.1416L42.2051 58.1595C42.1529 58.1744 42.0797 58.1949 41.9894 58.2188C41.8096 58.2665 41.5584 58.3289 41.2707 58.3883C40.7322 58.4995 39.9287 58.6303 39.2195 58.5638C38.3252 58.4799 37.4877 58.3002 36.703 57.9091C35.9083 57.513 35.246 56.9397 34.6432 56.1771C33.4267 54.6382 33.2881 53.2336 33.2598 51.5949C33.2332 50.0506 33.5601 48.8033 34.1823 47.6597C34.781 46.5592 35.6339 45.596 36.5522 44.6079C38.3709 42.651 41.2323 40.4712 43.4713 38.88C43.5482 38.8198 43.6279 38.7636 43.7098 38.711C43.9645 38.5312 44.2113 38.3588 44.4481 38.1949C44.0995 37.9209 43.7966 37.6037 43.5372 37.2783C42.5487 36.0382 41.9413 34.3659 41.7476 33.1372C41.6926 32.7883 41.6377 32.3838 41.6118 31.9537C40.99 32.3541 40.3091 32.8055 39.5999 33.2969C36.7504 35.2714 33.6009 37.7859 31.9201 40.1502C27.7008 46.0851 26.2577 54.876 30.7802 60.6664C32.6407 63.0486 34.7276 64.2748 36.927 64.6566C39.1515 65.0429 41.6402 64.5903 44.3176 63.3348C45.4583 62.7998 46.8203 61.7582 47.9522 60.7829C48.5049 60.3067 48.9796 59.8666 49.3158 59.546C49.4836 59.3858 49.6162 59.2563 49.7058 59.1675C49.7508 59.1231 49.7847 59.089 49.8072 59.0665L49.8319 59.0417L49.8383 59.0351ZM45.1395 40.864C45.0917 40.8978 45.0438 40.9318 44.9955 40.966C42.76 42.5536 40.0746 44.6125 38.4445 46.3666C37.5209 47.3603 36.8774 48.1115 36.4515 48.8943C36.0493 49.6336 35.8236 50.4382 35.8427 51.5504C35.8679 53.0126 35.9869 53.7112 36.6698 54.575C37.0839 55.0989 37.4626 55.4013 37.8551 55.5969C38.2576 55.7975 38.7536 55.9253 39.4609 55.9917C39.765 56.0203 40.2508 55.961 40.7484 55.8583C40.9788 55.8108 41.1824 55.7601 41.3277 55.7216C41.353 55.7149 41.3762 55.7087 41.3977 55.7029L47.4565 52.0229L51.4579 49.0184C52.9199 47.9207 54.5193 47.5341 56.0655 47.4214C57.1758 47.3405 58.3534 47.4005 59.4371 47.4556C59.8043 47.4743 60.1607 47.4924 60.5001 47.5043C61.9153 47.554 63.1612 47.5097 64.29 47.1402C65.3758 46.7848 66.4232 46.1043 67.3882 44.741C67.7315 44.2559 68.5968 42.9472 69.0576 41.7172C69.2955 41.082 69.358 40.6395 69.3248 40.3987C69.318 40.3495 69.3092 40.3232 69.3041 40.3115C69.2899 40.3017 69.2545 40.2817 69.1822 40.2604C68.2159 39.9753 67.3055 40.0764 66.1273 40.3356C65.9103 40.3832 65.6808 40.4376 65.4397 40.4946C64.4259 40.7344 63.208 41.0225 61.8597 41.0728C59.3416 41.167 57.3658 40.916 55.4921 40.6778L55.3855 40.6644C53.4835 40.4229 51.6734 40.2008 49.3479 40.3117L49.2929 40.3142L49.2378 40.3122C48.6676 40.2907 47.7359 40.306 46.8442 40.4207C46.3991 40.4779 45.9923 40.5564 45.6586 40.656C45.4012 40.7329 45.2357 40.8082 45.1395 40.864ZM56.4385 61.5095C56.4624 61.565 56.4938 61.6336 56.531 61.7046C56.576 61.791 56.6197 61.8622 56.6566 61.9121C56.663 61.9206 56.6684 61.9276 56.6728 61.9329C56.8464 62.0357 57.105 62.0854 57.5186 61.9686C57.9745 61.8399 58.5133 61.5294 59.0329 61.0628C59.5475 60.6008 59.9797 60.0423 60.2523 59.4996C60.5344 58.938 60.5863 58.5168 60.5412 58.2725C60.4884 57.9859 60.4437 57.8429 60.3989 57.7455C60.3617 57.6646 60.3046 57.5721 60.1662 57.4353L60.1643 57.4333C60.1417 57.4106 60.0694 57.3378 59.7614 57.393C59.4169 57.4548 58.9488 57.6607 58.4277 58.02C57.9191 58.3706 57.4347 58.8158 57.0595 59.2605C56.664 59.7292 56.4762 60.0942 56.4288 60.2723C56.3903 60.417 56.3758 60.7159 56.3983 61.08C56.4083 61.2416 56.4234 61.386 56.436 61.4894C56.4368 61.4963 56.4376 61.503 56.4385 61.5095Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <a href="#">
                                        <img src="{{ asset('images/svg/video.svg') }}"
                                            class="absolute bottom-0 right-0 opacity-0 group-hover:opacity-100 md:duration-500"
                                            alt="Problema Induvicales" />

                                    </a>
                                </div>

                                <div class="relative flex flex-col gap-5 text-center">
                                    <h2 class="font-bold text-text32 xl:text-text36">
                                        Problema Induvicales
                                    </h2>
                                    <p class="font-medium text-text16 xl:text-text20">
                                        Lucha contra los problemas individuales con nuestra atención personalizada. Nos
                                        comprometemos a ofrecerte soluciones efectivas para superar tus desafíos personales.

                                    </p>
                                    <div class="flex justify-center items-center absolute -bottom-[85px] w-full">
                                        <a href="#"
                                            class="bg-bgCeleste py-3 px-5 rounded-xl inline-block text-center text-textWhite font-semibold text-text16 xl:text-text20 w-full md:w-auto group-hover:bg-bgAzul md:duration-500">
                                            Solicitar una cita
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination-grid"></div>
            </div>
        </section>

        <section class="bg-bgAzul text-textWhite" id="acerca">
            <div class="relative p-5 md:pt-20 md:px-20 w-11/12 mx-auto 2xs:pb-[126px] sm:pb-[280px] lg:pb-[350px] xl:pb-[285px] 2xl:pb-[400px] flex flex-col items-center"
                data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col xl:flex-row gap-10">
                    <div class="md:basis-1/2 flex flex-col gap-4">
                        <p class="font-medium text-text20 xl:text-text24 md:text-text24">
                            Conoce al Dr. Kewin Quispe de la Roca
                        </p>
                        <h2 class="font-bold text-text40 md:text-text56 xl:text-text60 leading-none md:leading-tight">
                            Explora el Mundo de la Gastroenterología con el Dr. Kewin
                        </h2>
                    </div>
                    <div class="basis-1/2 flex flex-col gap-4">
                        <p class="font-medium text-text18 xl:text-text22">
                            Con una dedicación inquebrantable hacia la excelencia médica, el Dr. Kewin Quispe de la Roca es
                            un experto en <b>cirugía gastrointestinal</b> con un enfoque humano y compasivo. Su vasta
                            experiencia y su compromiso con el bienestar de sus pacientes lo convierten en el socio ideal en
                            tu viaje hacia una salud óptima.

                        </p>

                        <p class="font-medium text-text18 xl:text-text22">
                            Con una sólida formación académica y años de experiencia práctica, el Dr. Quispe de la Roca ha
                            ganado el respeto de sus colegas y pacientes por igual. Su enfoque centrado en el paciente
                            garantiza que cada persona reciba un tratamiento personalizado y compasivo. Desde la primera
                            consulta hasta la recuperación posterior al procedimiento, el Dr. Quispe de la Roca está
                            comprometido a brindar un cuidado excepcional y resultados sobresalientes para mejorar la
                            calidad de vida de sus pacientes.

                        </p>
                    </div>
                </div>



                <div
                    class="flex justify-center items-center absolute 2xs:-bottom-[129px] sm:-bottom-[160px] md:-bottom-[190px] 3md:-bottom-[220px] xl:-bottom-[290px] 2xl:-bottom-[290px] w-full">
                    <div class="relative contenedor_video">
                        <iframe src="https://www.youtube.com/embed/zBbmuWnufHY?si=QLBuAAIIkRvXXJ_M"
                            title="YouTube video player" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                            class="h-[200px] sm:w-[500px] sm:h-[400px] md:w-[500px] md:h-[400px] lg:w-[800px] lg:h-[500px] 2xl:w-[1000px] 2xl:h-[600px]"></iframe>
                        <!--  -->
                    </div>
                </div>
            </div>

            <div class="bg-bgCeleste pt-[126px] md:pt-[180px] 3md:pt-[200px] lg:pt-[268px] xl:pt-[280px] 2xl:pt-[350px]">
                <div class="w-11/12 mx-auto flex flex-col md:flex-row justify-center text-center items-start sm:pt-[90px] pb-10 px-5 md:pt-20 lg:pb-20 lg:px-20 lg:pt-10"
                    data-aos="fade-up" data-aos-offset="150">
                    <div class="flex-1">
                        <p class="font-bold text-text68 xl:text-text72">300+</p>
                        <p class="font-medium text-text18 xl:text-text22">
                            Operaciones Atendidas
                        </p>
                    </div>
                    <div
                        class="flex-1 border-t-4 border-b-4 md:border-r-4 md:border-l-4 md:border-b-0 md:border-t-0 border-white w-full flex flex-col items-start md:items-center">
                        <p class="font-bold text-text68 xl:text-text72">1M+</p>
                        <p class="font-medium text-text18 xl:text-text22">
                            Pacientes Satisfechos
                        </p>
                    </div>
                    <div class="flex-1">
                        <p class="font-bold text-text68 xl:text-text72">40K+</p>
                        <p class="font-medium text-text18 xl:text-text22">
                            Consultas Atendidas
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="proceso">
            <div class="flex flex-col md:flex-row w-11/12 mx-auto gap-10">
                <div class="basis-1/2 order-2 md:order-1 flex flex-col justify-between" data-aos="fade-up"
                    data-aos-offset="150">
                    <h2 class="text-textCeleste font-semibold text-text24 xl:text-text28">
                        Proceso de una intervención
                    </h2>
                    <h2 class="font-bold text-text48 xl:text-text52 text-textAzul leading-none md:leading-tight">
                        Qué necesito para ser candidato a una intervención
                    </h2>
                    <p class="font-medium text-text18 xl:text-text22 text-textAzul" data-aos="fade-up"
                        data-aos-offset="150">
                        Las personas que desean obtener el mejor <b>tratamiento para la obesidad</b> u otra intervención
                        médica con el Doctor Kewin deben de tener en cuenta los siguientes pasos para cuidar de su salud y
                        obtener los mejores resultados.

                    </p>

                    <ul class="text-textAzul" data-aos="fade-up" data-aos-offset="150">
                        <li class="flex items-center py-5">
                            <div class="progress one">
                                <div class="flex gap-5 items-center">
                                    <div>
                                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="group">
                                            <circle cx="26" cy="26" r="26" fill="#42BAE2" id="firstCircle"
                                                class="group-hover:fill-bgCeleste md:duration-500" />
                                            <path
                                                d="M16.4004 26.2598H25.7409M26.2598 35.6004V16.4004M21.3301 23.1463V19.7734M19.6436 21.4598H23.0166M19.6436 31.449H23.0166M29.3734 28.0761H32.7463M29.3734 24.9626H32.7463M18.995 35.6004H33.0058C34.4387 35.6004 35.6004 34.4387 35.6004 33.0058V18.995C35.6004 17.562 34.4387 16.4004 33.0058 16.4004H18.995C17.562 16.4004 16.4004 17.562 16.4004 18.995V33.0058C16.4004 34.4387 17.562 35.6004 18.995 35.6004Z"
                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" id="firstIcon"
                                                class="group-hover:stroke-bgWhite md:duration-500" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-text24 xl:text-text28">
                                            Consulta Inicial
                                        </h3>

                                        <p class="font-normal text-text16 xl:text-text20">
                                            Como especialista en <b>balón gástrico</b>, el Dr. Kewin
                                            te invita a una consulta inicial para discutir
                                            preocupaciones y objetivos de salud.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex items-center py-5">
                            <div class="progress two">
                                <div class="flex gap-5 items-center">
                                    <div data-aos="fade-up" data-aos-offset="150">
                                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="group">
                                            <circle cx="26" cy="26" r=" 26" fill="#F8FBFD"
                                                id="secondCircle" class="group-hover:fill-bgCeleste md:duration-500" />
                                            <path
                                                d="M25.9996 35.5554H19.9996C18.6741 35.5554 17.5996 34.4809 17.5996 33.1554L17.5997 18.7555C17.5997 17.43 18.6742 16.3555 19.9997 16.3555H30.8C32.1255 16.3555 33.2 17.43 33.2 18.7555V22.9555M29.6 30.0131C29.6 28.7164 30.6745 27.6652 32 27.6652C33.3255 27.6652 34.4 28.7164 34.4 30.0131C34.4 31.3098 33.3255 32.3609 32 32.3609M32 35.6456V35.5554M21.8 21.1555H29M21.8 24.7555H29M21.8 28.3555H25.4"
                                                stroke="#66AAD8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" id="secondIcon"
                                                class="group-hover:stroke-strokeWithe md:duration-500" />
                                        </svg>
                                    </div>

                                    <div>
                                        <h3 class="font-bold text-text24 xl:text-text28">
                                            Evaluación de Riesgo Quirúrgico
                                        </h3>

                                        <p class="font-normal text-text16 xl:text-text20">
                                            Antes de cualquier procedimiento, nuestro equipo de
                                            expertos realiza una evaluación exhaustiva de tu salud
                                            para garantizar tu seguridad durante la intervención.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex items-center py-5">
                            <div class="progress three">
                                <div class="flex gap-5 items-center">
                                    <div data-aos="fade-up" data-aos-offset="150">
                                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="group">
                                            <circle cx="26" cy="26" r="26" fill="#F8FBFD"
                                                id="thirdsCircle" class="group-hover:fill-bgCeleste md:duration-500" />
                                            <path
                                                d="M18.5 24.5H17V33.5C17 34.3284 17.6716 35 18.5 35H33.5C34.3284 35 35 34.3284 35 33.5V24.5H33.5M18.5 24.5L26 29L33.5 24.5M18.5 24.5V20C18.5 18.3431 19.8431 17 21.5 17H30.5C32.1569 17 33.5 18.3431 33.5 20V24.5"
                                                stroke="#66AAD8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" id="thirdsIcon"
                                                class="group-hover:stroke-strokeWithe md:duration-500" />
                                        </svg>
                                    </div>

                                    <div>
                                        <h3 class="font-bold text-text24 xl:text-text28">
                                            Intervención y recuperación
                                        </h3>

                                        <p class="font-normal text-text16 xl:text-text20">
                                            Tras finalizar la evaluación, el Dr. Kewin y su equipo
                                            procederá a realizar la cirugía.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="font-semibold text-text18 xl:text-text22">
                        <a href="#formulario"
                            class="bg-bgCeleste py-3 px-5 rounded-xl inline-block text-center hover:bg-bgCelesteStrong md:duration-500 w-full 2md:w-auto text-textWhite">Solicitar
                            una cita</a>
                    </div>
                </div>
                <div class="basis-1/2 flex justify-center items-center order-1 md:order-2">
                    <img src="{{ asset('images/img/cirugia_imagen.png') }}" class="h-full" alt="cirugía de obesidad" />

                </div>
            </div>
        </section>

        <section id="imc">

            <div class="bg-bgRosaWeak" data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col lg:flex-row w-11/12 mx-auto md:p-10 gap-24">
                    <div class="basis-1/2 contenedor w-full">
                        <div class="flip">
                            <div class="card">
                                <div class="front bg-indice h-auto rounded-3xl p-5">
                                    <div class="flex flex-col gap-5 justify-center items-center front">
                                        <div class="flex flex-col gap-4 w-full">
                                            <label for="peso"
                                                class="text-textAzul font-medium text-text14 xl:text-text18">
                                                Peso (kg):
                                            </label>
                                            <input type="number" id="peso" step="1" placeholder="00 kg"
                                                class="bg-white w-full py-4 rounded-lg px-2 peso" />
                                        </div>
                                        <div class="flex flex-col gap-4 w-full">
                                            <label for="altura"
                                                class="text-textAzul font-medium text-text14 xl:text-text18">
                                                Altura (mts):
                                            </label>
                                            <input type="number" id="altura" step="1" placeholder="00 mts"
                                                class="bg-white w-full py-4 rounded-lg px-2 altura" />
                                        </div>
                                        <!-- <div></div> -->

                                        <div class="w-full">
                                            <button type="button"
                                                class="bg-bgAzul py-4 px-20 rounded-xl inline-block text-center hover:bg-blue-500 md:duration-500 w-full text-textWhite onButton1 font-semibold text-text18 xl:text-text22 btnCalcular">
                                                Calcular
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="back bg-indice hidden h-auto rounded-3xl p-5">
                                    <div class="flex flex-col items-center justify-center gap-10">
                                        <div class="bg-white p-10 rounded-lg flex flex-col gap-5 text-center w-full">
                                            <p class="uppercase font-medium text-text22 xl:text-text26 text-textAzul">
                                                IMC
                                            </p>
                                            <p class="font-bold text-text64 xl:text-text68 text-textAzul resultado"></p>
                                        </div>
                                        <div class="w-full">
                                            <button type="button"
                                                class="bg-bgAzul py-4 rounded-xl text-center hover:bg-blue-500 md:duration-500 w-full text-textWhite font-semibold text-text18 xl:text-text22 btnRegresar px-5">
                                                Calcular de nuevo
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Agregar alerta -->
                            <!-- <p class="alerta">Hubo un error, vuelva a intentarlo</p> -->
                        </div>

                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/image_imc.png') }}" alt="imc" />

                        </div>
                    </div>

                    <div class="basis-1/2 flex flex-col gap-5 justify-center">
                        <p class="text-textAzul font-medium text-text20 xl:text-text24">
                            ¡Tu camino hacia una vida más saludable comienza ahora!
                        </p>
                        <h2 class="font-bold text-text48 xl:text-text52 text-textAzul leading-none md:leading-tight">
                            Calcula tu índice de Masa Corporal (IMC)
                        </h2>

                        <div class="flex flex-col gap-5">
                            <div class="flex gap-5 p-2 rounded-lg imcItems" id="imc0">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="12" fill="#66FF66" />
                                    </svg>
                                </div>
                                <p class="font-medium text-text18 xl:text-text22 text-textAzul imcpInfo leading-none">
                                    Si tu <b>Índice de Masa Corporal</b> (IMC) es inferior a
                                    18.5, se considera que tienes un peso por debajo de lo
                                    recomendado.
                                </p>
                            </div>

                            <div class="flex gap-5 p-2 rounded-lg imcItems" id="imc1">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="12" fill="#66FF66" />
                                    </svg>
                                </div>
                                <p class="font-medium text-text18 xl:text-text22 text-textAzul imcpInfo leading-none">
                                    Si tu IMC se encuentra en el rango de 18.5 a 24.9, estás
                                    dentro de los límites considerados como normales.
                                </p>
                            </div>

                            <div class="flex gap-5 p-2 rounded-lg imcItems" id="imc2">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="12" fill="#66FF66" />
                                    </svg>
                                </div>
                                <p class="font-medium text-text18 xl:text-text22 text-textAzul imcpInfo leading-none">
                                    Si tu IMC cae en el intervalo de 25 a 29.9, se considera un
                                    diagnóstico presuntivo de sobrepeso.
                                </p>
                            </div>

                            <div class="flex gap-5 p-2 rounded-lg imcItems" id="imc3">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="12" fill="#FF6666" />
                                    </svg>
                                </div>
                                <p class="font-medium text-text18 xl:text-text22 text-textAzul imcpInfo leading-none">
                                    Si tu IMC se encuentra en el rango de 30.0 a 34.9, se
                                    considera un diagnóstico presuntivo de obesidad leve.
                                </p>
                            </div>

                            <div class="flex gap-5 p-2 rounded-lg imcItems" id="imc4">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="12" fill="#FF6666" />
                                    </svg>
                                </div>
                                <p class="font-medium text-text18 xl:text-text22 text-textAzul imcpInfo leading-none">
                                    Si tu IMC oscila entre 35.0 y 39.9, se te diagnosticaría
                                    presumiblemente con obesidad moderada.
                                </p>
                            </div>

                            <div class="flex gap-5 p-2 rounded-lg imcItems" id="imc5">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="12" fill="#FF6666" />
                                    </svg>
                                </div>
                                <p class="font-medium text-text18 xl:text-text22 text-textAzul imcpInfo leading-none">
                                    Si tu IMC es superior a 40, se considera un diagnóstico
                                    presuntivo de obesidad severa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="w-11/12 mx-auto">
                <div class="swiper testimonios text-textAzul" data-aos="fade-up" data-aos-offset="150">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col lg:flex-row gap-16 md:gap-32 items-center">
                                <div class="flex flex-col gap-10 basis-1/2 justify-center">
                                    <div class="buttonSliderServicios">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>

                                    <p class="font-semibold text-text32 md:text-text40">
                                        "Gracias al Dr. Quispe de la Roca y su equipo, finalmente
                                        he encontrado una solución efectiva para mi lucha contra
                                        el peso. La banda gástrica cambió mi vida, brindándome una
                                        nueva confianza y vitalidad."
                                    </p>

                                    <div class="flex gap-5 items-center">
                                        <div>
                                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="64" height="64" rx="8" fill="#42BAE2" />
                                                <path
                                                    d="M16 44V34.9893C16 30.7189 16.9978 27.3452 18.9934 24.8683C21.0171 22.3915 23.9543 20.7687 27.805 20V24.4413C24.9381 25.3523 23.0127 26.9181 22.029 29.1388C21.5231 30.306 21.3123 31.516 21.3966 32.7687H28.0158V44H16ZM47.7892 24.4413C44.9504 25.3238 43.0391 26.9181 42.0553 29.2242C41.4932 30.4484 41.2683 31.6299 41.3808 32.7687H48V44H35.9842V34.9893C35.9842 30.6619 37.0101 27.274 39.0619 24.8256C41.1419 22.3772 44.0509 20.7687 47.7892 20V24.4413Z"
                                                    fill="white" />
                                            </svg>
                                        </div>

                                        <div>
                                            <p class="font-semibold text-text18 xl:text-text22">
                                                María Neyra
                                            </p>
                                            <p class="font-normal text-text14 xl:text-text18">
                                                Paciente
                                            </p>
                                        </div>
                                    </div>
                                </div>



                                <div class="flex justify-center">
                                    <div class="relative w-[200px] md:w-[400px] h-[300px] md:h-[600px]">
                                        <img src="{{ asset('images/img/testimonio_00.png') }}"
                                            class="h-[200px] md:h-[400px] absolute opacity-50 md:left-1/3 myBox"
                                            alt="testimonios" />

                                        <img src="{{ asset('images/img/testimonio_01.png') }}" alt="testimonios"
                                            class="h-[200px] md:h-[400px] absolute top-1/4 left-1/4 md:left-1/2 z-[1] myBox" />
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col lg:flex-row gap-16 md:gap-32 items-center">
                                <div class="flex flex-col gap-10 basis-1/2 justify-center">
                                    <div class="buttonSliderServicios">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>

                                    <p class="font-semibold text-text32 md:text-text40">
                                        "Gracias al Dr. Quispe de la Roca y su equipo, finalmente
                                        he encontrado una solución efectiva para mi lucha contra
                                        el peso. La banda gástrica cambió mi vida, brindándome una
                                        nueva confianza y vitalidad."
                                    </p>

                                    <div class="flex gap-5 items-center">
                                        <div>
                                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="64" height="64" rx="8" fill="#42BAE2" />
                                                <path
                                                    d="M16 44V34.9893C16 30.7189 16.9978 27.3452 18.9934 24.8683C21.0171 22.3915 23.9543 20.7687 27.805 20V24.4413C24.9381 25.3523 23.0127 26.9181 22.029 29.1388C21.5231 30.306 21.3123 31.516 21.3966 32.7687H28.0158V44H16ZM47.7892 24.4413C44.9504 25.3238 43.0391 26.9181 42.0553 29.2242C41.4932 30.4484 41.2683 31.6299 41.3808 32.7687H48V44H35.9842V34.9893C35.9842 30.6619 37.0101 27.274 39.0619 24.8256C41.1419 22.3772 44.0509 20.7687 47.7892 20V24.4413Z"
                                                    fill="white" />
                                            </svg>
                                        </div>

                                        <div>
                                            <p class="font-semibold text-text18 xl:text-text22">
                                                María Neyra
                                            </p>
                                            <p class="font-normal text-text14 xl:text-text18">
                                                Paciente
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="flex justify-center">
                                    <div class="relative w-[200px] md:w-[400px] h-[300px] md:h-[600px]">
                                        <img src="{{ asset('images/img/testimonio_00.png') }}"
                                            class="h-[200px] md:h-[400px] absolute opacity-50 md:left-1/3 myBox"
                                            alt="testimonios" />

                                        <img src="{{ asset('images/img/testimonio_01.png') }}" alt="testimonios"
                                            class="h-[200px] md:h-[400px] absolute top-1/4 left-1/4 md:left-1/2 z-[1] myBox" />
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col lg:flex-row gap-16 md:gap-32 items-center">
                                <div class="flex flex-col gap-10 basis-1/2 justify-center">
                                    <div class="buttonSliderServicios">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>

                                    <p class="font-semibold text-text32 md:text-text40">
                                        "Gracias al Dr. Quispe de la Roca y su equipo, finalmente
                                        he encontrado una solución efectiva para mi lucha contra
                                        el peso. La banda gástrica cambió mi vida, brindándome una
                                        nueva confianza y vitalidad."
                                    </p>

                                    <div class="flex gap-5 items-center">
                                        <div>
                                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="64" height="64" rx="8" fill="#42BAE2" />
                                                <path
                                                    d="M16 44V34.9893C16 30.7189 16.9978 27.3452 18.9934 24.8683C21.0171 22.3915 23.9543 20.7687 27.805 20V24.4413C24.9381 25.3523 23.0127 26.9181 22.029 29.1388C21.5231 30.306 21.3123 31.516 21.3966 32.7687H28.0158V44H16ZM47.7892 24.4413C44.9504 25.3238 43.0391 26.9181 42.0553 29.2242C41.4932 30.4484 41.2683 31.6299 41.3808 32.7687H48V44H35.9842V34.9893C35.9842 30.6619 37.0101 27.274 39.0619 24.8256C41.1419 22.3772 44.0509 20.7687 47.7892 20V24.4413Z"
                                                    fill="white" />
                                            </svg>
                                        </div>

                                        <div>
                                            <p class="font-semibold text-text18 xl:text-text22">
                                                María Neyra
                                            </p>
                                            <p class="font-normal text-text14 xl:text-text18">
                                                Paciente
                                            </p>
                                        </div>
                                    </div>
                                </div>



                                <div class="flex justify-center">
                                    <div class="relative w-[200px] md:w-[400px] h-[300px] md:h-[600px]">
                                        <img src="{{ asset('images/img/testimonio_00.png') }}"
                                            class="h-[200px] md:h-[400px] absolute opacity-50 md:left-1/3 myBox"
                                            alt="testimonios" />

                                        <img src="{{ asset('images/img/testimonio_01.png') }}" alt="testimonios"
                                            class="h-[200px] md:h-[400px] absolute top-1/4 left-1/4 md:left-1/2 z-[1] myBox" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-bgRosaWeak">
            <div class="flex flex-col gap-10 text-textAzul w-11/12 mx-auto py-10" data-aos="fade-up"
                data-aos-offset="150">
                <div class="flex flex-col 2md:flex-row gap-10">
                    <div class="flex flex-col-reverse 2md:flex-col basis-1/2 gap-4">
                        <p class="font-medium text-text24 xl:text-text28">
                            Cras laoreet commodo rhoncus. Morbi vel ante iaculis.
                        </p>
                        <h1 class="font-bold text-text48 xl:text-text52 leading-none md:leading-tight">
                            Perteneciente a las Sociedades Científicas más Eminentes
                        </h1>
                    </div>

                    <div class="basis-1/2 w-full 2md:w-[200px] flex items-center">
                        <div class="swiper logosHospitales">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/img/Apebem.png') }}" alt="Apebem" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/img/IFS.png') }}" alt="IFS" />

                                        
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/img/Apebem.png') }}" alt="Apebem" />
                                        
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/img/IFS.png') }}" alt="IFS" />
                                        
                                       
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/img/Apebem.png') }}" alt="Apebem" />
                                    
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/img/IFS.png') }}" alt="IFS" />
                                  
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>

                <div>
                    <a href="#formulario"
                        class="bg-bgAzul py-4 px-10 rounded-xl inline-block text-center hover:bg-blue-500 md:duration-500 w-full 2md:w-auto text-textWhite text-text18 xl:text-text22 font-semibold">
                        Solicitar una cita
                    </a>
                </div>
            </div>
        </section>

        <section id="formulario">
            <div class="flex flex-col md:flex-row w-11/12 mx-auto gap-10" data-aos="fade-up" data-aos-offset="150">
                <div class="basis-1/2 order-2 md:order-1">
                    <div class="flex justify-center items-center h-full">
                        <img src="{{ asset('images/img/doctor.png') }}" class="h-full" alt="doctor kewin" />
                        
                    </div>
                </div>
                <div class="basis-1/2 flex flex-col gap-8 order-1 md:order-2 justify-center pb-20 2xl:pb-10">
                    <p class="text-textCeleste font-semibold text-text24 xl:text-text28">
                        Contáctanos
                    </p>
                    <h2 class="text-textAzul font-bold text-text48 xl:text-text52 leading-none md:leading-tight">
                        Programe una consulta gratuita
                    </h2>
                    <div class="w-full">
                        <form action="#" class="flex flex-col gap-10 font-semibold text-text18 xl:text-text22">
                            <div class="flex flex-col md:flex-row gap-10">
                                <div class="w-full">
                                    <input type="text" placeholder="Nombre"
                                        class="border-none w-full py-4 bg-bgRosaWeak rounded-xl px-2 outline-[#254F9A] text-textAzul" />
                                </div>

                                <div class="w-full">
                                    <input type="text" placeholder="Apellido"
                                        class="border-none w-full py-4 bg-bgRosaWeak rounded-xl px-2 outline-[#254F9A]" />
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-10">
                                <div class="w-full">
                                    <input type="email" placeholder="Email"
                                        class="border-none w-full py-4 bg-bgRosaWeak rounded-xl px-2 outline-[#254F9A]" />
                                </div>

                                <div class="w-full">
                                    <input type="tel" placeholder="Teléfono"
                                        class="border-none w-full py-4 bg-bgRosaWeak rounded-xl px-2 outline-[#254F9A]" />
                                </div>
                            </div>

                            <div class="text-[#9CA3AF]">
                                <div class="w-full">
                                    <input type="text" placeholder="Dirección"
                                        class="border-none w-full py-4 bg-bgRosaWeak rounded-xl px-2 outline-[#254F9A]" />
                                </div>
                            </div>
                            <div>
                                <textarea name="input" id="input" rows="5" maxlength="256" required="" placeholder="Mensaje"
                                    class="border-none w-full py-4 bg-bgRosaWeak rounded-xl px-2 outline-[#254F9A]"></textarea>
                            </div>

                            <div>
                                <button href="#"
                                    class="bg-bgAzul py-4 px-20 rounded-xl inline-block text-center hover:bg-blue-500 md:duration-500 w-full 2md:w-auto text-textWhite">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>


@section('scripts_improtados')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            var especialidades = new Swiper(".especialidades", {
                slidesPerView: 4,
                spaceBetween: 20,
                loop: true,
                grab: true,
                centeredSlides: true,
                initialSlide: 2, // Empieza en el cuarto slide (índice 3) */
                pagination: {
                    el: ".swiper-pagination-estadisticas",
                    clickable: true,
                },
                //allowSlideNext: false,  //Bloquea el deslizamiento hacia el siguiente slide
                //allowSlidePrev: false,  //Bloquea el deslizamiento hacia el slide anterior
                allowTouchMove: false, // Bloquea el movimiento táctil
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 4,
                    },
                },
            });

            /* ---------------- CARROSUEL PARA GRILLAS --------- */
            var swiper = new Swiper(".enfermedades", {
                spaceBetween: 30,
                grid: {
                    rows: 2,
                },
                pagination: {
                    el: ".swiper-pagination-grid",
                    clickable: true,
                    dynamicBullets: false,
                },

                breakpoints: {
                    0: {
                        grid: {
                            rows: 1,
                        },
                        loop: true,
                        allowTouchMove: true,
                        slidesPerView: 1,
                    },
                    768: {
                        grid: {
                            rows: 2,
                        },
                        loop: true,
                        slidesPerView: 2,
                        allowTouchMove: true,
                    },
                    1024: {
                        grid: {
                            rows: 2,
                        },
                        slidesPerView: 3,
                        allowTouchMove: false,
                    },
                },
            });

            /* --------------------- CARRUSEL PARA MARCAS ------- */

            var logosHospitales = new Swiper(".logosHospitales", {
                slidesPerView: 2,
                spaceBetween: 10,
                loop: true,
                grab: true,
                centeredSlides: true,
                allowTouchMove: false,
                initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                },
            });

            /* ----- carrusel de testimonios --------- */

            var testimonios = new Swiper(".testimonios", {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                grab: true,
                allowTouchMove: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                centeredSlides: true,
                initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
                /* autoplay: {
                  delay: 1500,
                  disableOnInteraction: false,
                }, */
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                },
            });

            /* ---------------- FLIPCARD IMC  ----------------------------- */
            const onCalcular = document.querySelector(".btnCalcular");
            const onRegresar = document.querySelector(".btnRegresar");
            const card = document.querySelector(".card");
            const front = document.querySelector(".front");
            const back = document.querySelector(".back");
            const resultado = document.querySelector(".resultado");
            const peso = document.querySelector(".peso");
            const altura = document.querySelector(".altura");

            const imc0 = document.getElementById("imc0");
            const imc1 = document.getElementById("imc1");
            const imc2 = document.getElementById("imc2");
            const imc3 = document.getElementById("imc3");
            const imc4 = document.getElementById("imc4");
            const imc5 = document.getElementById("imc5");
            const imcItems = document.querySelectorAll(".imcItems");
            const imcp = document.querySelectorAll(".imcpInfo");

            let imc = null;

            onCalcular.addEventListener("click", () => {
                imc = (
                    parseFloat(peso.value) / Math.pow(parseFloat(altura.value), 2)
                ).toFixed(1);

                if (imc < 0) {
                    createAlert("Solo se aceptan valores mayores a cero");
                    return;
                }

                if (isNaN(imc)) {
                    createAlert("Debe llenar los campos peso y altura");
                    return;
                }

                resultado.textContent = imc;

                card.classList.toggle("flipCard");
                front.classList.add("hidden");
                back.classList.remove("hidden");

                validateImc(imc);
            });

            onRegresar.addEventListener("click", () => {
                back.classList.add("hidden");
                card.classList.toggle("flipCard");
                front.classList.remove("hidden");
                resultado.textContent = "";
                peso.value = "";
                altura.value = "";

                imc0.classList.remove("bg-green-200");
                imc1.classList.remove("bg-green-200");
                imc2.classList.remove("bg-green-200");
                imc3.classList.remove("bg-red-200");
                imc4.classList.remove("bg-red-200");
                imc5.classList.remove("bg-red-200");

                /* Vuelve a eliminar los estilos y coloca el color inicial */
                imcp.forEach((imc) => {
                    imc.classList.remove(
                        "text-red-600",
                        "bg-green-200",
                        "text-green-600",
                        "bg-red-200"
                    );

                    imc.classList.add("text-textAzul");
                });
            });

            function createAlert(mensaje) {
                const alerta = document.createElement("p");
                onCalcular.disabled = true;
                alerta.textContent = mensaje;
                alerta.classList.add("alerta");
                card.parentNode.insertBefore(alerta, card.nextSibling);
                setTimeout(() => {
                    alerta.remove();
                    onCalcular.disabled = false;
                }, 3000);
            }

            function validateImc(imc) {
                if (imc <= 18.5) {
                    imc0.classList.add("bg-green-200");
                } else if (imc >= 18.5 && imc <= 24.9) {
                    imc1.classList.add("bg-green-200");
                } else if (imc >= 25 && imc <= 29.9) {
                    imc2.classList.add("bg-green-200");
                } else if (imc >= 30 && imc <= 34.9) {
                    imc3.classList.add("bg-red-200");
                } else if (imc >= 35 && imc <= 39.9) {
                    imc4.classList.add("bg-red-200");
                } else {
                    imc5.classList.add("bg-red-200");
                }

                /* Cambia de color al parrafo */
                imcItems.forEach((imc) => {
                    if (imc.classList.contains("bg-green-200")) {
                        imc.children[1].classList.remove("text-textAzul");
                        imc.children[1].classList.add("text-green-600");
                    }
                    if (imc.classList.contains("bg-red-200")) {
                        imc.children[1].classList.remove("text-textAzul");
                        imc.children[1].classList.add("text-red-600");
                    }
                });
            }

            /* ------------------------ deslizante --------------- */

            const one = document.querySelector(".one");
            const two = document.querySelector(".two");
            const three = document.querySelector(".three");
            const four = document.querySelector(".four");
            const five = document.querySelector(".five");
            const firstIcon = document.querySelector("#firstIcon");
            const firstCircle = document.querySelector("#firstCircle");
            const secondIcon = document.querySelector("#secondIcon");
            const secondCircle = document.querySelector("#secondCircle");
            const thirdsIcon = document.querySelector("#thirdsIcon");
            const thirdsCircle = document.querySelector("#thirdsCircle");

            let stepOne = null;
            let stepTwo = null;
            let stepThree = null;

            one.onclick = function() {
                stepOne = 1;
                one.classList.add("active");
                two.classList.remove("active");
                three.classList.remove("active");

                if (stepOne < stepTwo || stepOne < stepThree) {
                    secondIcon.setAttribute("stroke", "#66AAD8");
                    secondCircle.setAttribute("fill", "#F8FBFD");
                    thirdsIcon.setAttribute("stroke", "#66AAD8");
                    thirdsCircle.setAttribute("fill", "#F8FBFD");
                }
                if (stepOne < stepTwo && stepOne < stepThree) {
                    stepTwo = null;
                    stepThree = null;
                }
            };

            two.onclick = function() {
                stepTwo = 2;
                one.classList.add("active");
                two.classList.add("active");
                three.classList.remove("active");
                secondIcon.setAttribute("stroke", "#ffffff");
                secondCircle.setAttribute("fill", "#42BAE2");

                if (stepTwo < stepThree || stepTwo > stepOne) {
                    thirdsIcon.setAttribute("stroke", "#66AAD8");
                    thirdsCircle.setAttribute("fill", "#F8FBFD");

                    firstIcon.setAttribute("stroke", "#ffffff");
                    firstCircle.setAttribute("fill", "#42BAE2");
                }
            };
            three.onclick = function() {
                stepThree = 3;
                one.classList.add("active");
                two.classList.add("active");
                three.classList.add("active");

                thirdsIcon.setAttribute("stroke", "#ffffff");
                thirdsCircle.setAttribute("fill", "#42BAE2");

                if (stepThree > stepTwo || stepThree > stepOne) {
                    firstIcon.setAttribute("stroke", "#ffffff");
                    firstCircle.setAttribute("fill", "#42BAE2");
                    secondIcon.setAttribute("stroke", "#ffffff");
                    secondCircle.setAttribute("fill", "#42BAE2");
                }
            };
        });
    </script>
@stop

@stop
