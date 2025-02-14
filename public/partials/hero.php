<div id="hero" class="w-full justify-center">

    <header class="w-full rounded-t-0 rounded-b-4xl lg:rounded-b-[6rem] bg-green z-50">
        <div class="w-full py-6 lg:py-6 container flex flex-row items-center justify-center mx-auto">
            <img src="./assets/img/torres-logo.png" alt="logo" class="w-20 lg:w-24">
        </div>
    </header>

    <section class="w-full py-4 lg:container flex flex-col lg:flex-row items-center lg:items-end justify-between background-image mx-auto mt-48 lg:mt-8 lg:mb-44 " >
                    
            <div class="w-full lg:w-3/12 flex flex-col z-40 gap-2 order-2 lg:order-1 bg-beige lg:bg-transparent px-8 lg:px-0 pt-24 pb-12 lg:pt-0 lg:pb-0 -mt-16 lg:-mt-0">
                <p class="text-center text-lg color-green lg:text-white px-3">
                    <?= mb_strtoupper("Una canción para difundir el sabor que tiene que ser."); ?>
                </p>
                <p class="text-center text-lg color-green lg:text-white">
                    <?= mb_strtoupper("Gana una malla de naranjas y un cheque para material escolar"); ?>
                </p>
            </div>

            <div class="bg-orange rounded-3xl text-center w-10/12 lg:w-fit lg:max-w-4/12 px-8 pt-10 pb-4 -mt-24 lg:mt-0 lg:-mb-24 z-50 order-1 lg:order-2">

                <h1 class="text-white text-6xl lg:text-8xl leading-none text-balance relative">PRESUME DE FRUTA</h1>

            </div>

            <div class="w-full lg:w-[28%] flex flex-col bg-white px-10 py-8 rounded-3xl gap-6 z-50 order-3 -mt-4 lg:-mt-0">
                <p class="text-center color-green text-lg wrap-balance">Inscribe a tu colegio<br>rellenando el formulario.<br>En breve, contactaremos contigo.</p>
                <a href="" target="_blank" class="text-center color-green underline mx-7 text-lg w-fit mx-auto font-semibold">Descarga aquí la letra<br>e instrumental de la canción</a>
                    <form id="contact-form" method="post" class="flex flex-col gap-4">
                        <input type="text" name="name" class="rounded-lg border border-gray-400 py-3 px-6 text-gray-400 w-full" placeholder="Nombre" required>
                        <input type="text" name="school" class="rounded-lg border border-gray-400 py-3 px-6 text-gray-400 w-full" placeholder="Centro educativo" required>
                        <input type="tel" name="phone" class="rounded-lg border border-gray-400 py-3 px-6 text-gray-400 w-full" placeholder="Teléfono" required>
                        <input type="email" name="email" class="rounded-lg border border-gray-400 py-3 px-6 text-gray-400 w-full" placeholder="Correo electrónico" required>
                        <textarea name="message" class="rounded-lg border border-gray-400 py-3 px-6 text-gray-400 w-full" placeholder="Mensaje" required></textarea>

                        <div class="flex flex-row items-center gap-2">
                            <input id="bases" type="checkbox" name="bases" required>
                            <label for="bases" class="text-gray-400 text-sm">He leído y acepto las bases del concurso.</label>
                        </div>

                        <div class="flex flex-row items-center gap-2">
                            <input id="privacidad" type="checkbox" name="privacidad" required>
                            <label class="text-gray-400 text-sm" for="privacidad">He leído y acepto las <a href="https://frutastorres.com/politica-de-privacidad/" target="_blank" class="text-green underline">políticas de privacidad</a>.</label>
                        </div>

                        <button type="submit" class="bg-green text-white px-4 py-3 rounded-lg font-bold hover:cursor-pointer">Mi cole quiere participar</button>
                    </form>
            </div>
<div id="notification" class="hidden fixed top-4 right-4 p-3 rounded text-white shadow-lg"></div>
    </section>

</div>