<div  id="hero" class="w-full justify-center" style="background: linear-gradient(180deg, rgba(2, 0, 36, 0) 50%, rgba(15, 92, 64, 1) 100%),url(./assets/img/bg-hero.jpg);background-size: cover;background-position: top center;">

    <header class="w-full rounded-t-0 rounded-b-[6rem] lg:rounded-b-full bg-green z-50">
        <div class="w-full py-8 container flex flex-row items-center justify-center mx-auto">
            <img src="./assets/img/torres-logo.png" alt="logo" class="w-32 lg:w-1/12">
        </div>
    </header>

    <section class="w-full py-4 container flex flex-col lg:flex-row items-end justify-between background-image mx-auto mt-24 mb-44 " >
                    
            <div class="w-full lg:w-3/12 flex flex-col z-50 gap-2">
                <p class="text-center text-lg text-white px-3">
                    <?= mb_strtoupper("Una canción para difundir el sabor que tiene que ser."); ?>
                </p>
                <p class="text-center text-lg text-white">
                    <?= mb_strtoupper("Gana una malla de naranjas y un cheque para material escolar"); ?>
                </p>
            </div>

            <div class="bg-orange rounded-3xl text-center w-full lg:w-fit lg:max-w-4/12 px-8 pt-10 pb-4 -mb-32 z-50">

                <h1 class="text-white text-3xl lg:text-8xl leading-none text-balance relative">PRESUME DE FRUTA</h1>

            </div>

            <div class="w-full lg:w-[28%] flex flex-col bg-white px-10 py-8 rounded-3xl gap-6 z-50">
                <p class="text-center color-green text-lg wrap-balance">Inscribe a tu colegio<br>rellenando el formulario.<br>En breve, contactaremos contigo.</p>
                <a href="" target="_blank" class="text-center color-green underline mx-7 text-lg w-fit mx-auto font-semibold">Descarga aquí la letra<br>e instrumental de la canción</a>
                <form ie="form" action="submit.php" method="post" class="flex flex-col gap-4 ">
                    <input type="text" class="rounded-lg border border-gray-200 py-3 px-6 text-slate-200 w-full" palceholder="Centro educativo">
                    <input type="text" class="rounded-lg border border-gray-200 py-3 px-6 text-slate-200 w-full" palceholder="Centro educativo">
                    <input type="phone" class="rounded-lg border border-gray-200 py-3 px-6 text-slate-200 w-full" palceholder="Centro educativo">
                    <input type="email" class="rounded-lg border border-gray-200 py-3 px-6 text-slate-200 w-full" palceholder="Centro educativo">
                    <input type="text" class="rounded-lg border border-gray-200 py-3 px-6 text-slate-200 w-full" palceholder="Centro educativo">
                    <button class="bg-green text-white px-4 py-3 rounded-lg font-bold">Mi cole quiere participar</button>
                    <div class="flex flex-row item-center gap-2">
                        <input id="bases" type="checkbox" class="rounded-lg border border-gray-200 py-2 px-4 text-slate-200" palceholder="Centro educativo">
                        <label for="bases" class="text-slate-400 text-sm">He leído y acepto las bases del concurso.</label>
                    </div>
                    <div class="flex flex-row item-center gap-2">
                        <input id="privacidad" type="checkbox" class="rounded-lg border border-gray-200 py-2 px-4 text-slate-200" palceholder="Centro educativo">
                        <label class="text-slate-400 text-sm" for="privacidad">He leído y acepto las políticas de privacidad.</label>
                    </div>
                </form>
            </div>

    </section>

</div>