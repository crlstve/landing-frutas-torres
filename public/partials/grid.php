<section class="w-full flex flex-col bg-beige -mt-36 rounded-t-3xl lg:rounded-t-[8rem] lg:py-32 pt-12 pb-36 relative">
    
    <h2 class="color-green text-6xl lg:text-8xl mx-auto text-center mb-6"><span class="-scale-100 inline-block">?</span>QUIEN PUEDE PARTICIPAR?</h2>

    <?php if(!is_mobile()): ?>

        <div id="grid" class="w-full container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-16 lg:gap-12 mt-12 mb-32 px-6 lg:px-12">

            <div class="w-full"><img src="./assets/img/infantil-1.png" alt=""></div>

            <div class="w-full"><img src="./assets/img/infantil-2.png" alt=""></div>

            <div class="w-full"><img src="./assets/img/primaria-1.png" alt=""></div>

            <div class="w-full"><img src="./assets/img/primaria-2.png" alt=""></div>

            <div class="w-full"><img src="./assets/img/primaria-3.png" alt=""></div>

            <div class="w-full"><img src="./assets/img/primaria-4.png" alt=""></div>

        </div>

    <?php else: ?>

        <ul class="grid grid-cols-1 gap-2 text-white px-8 mb-24" >
            <li class="rounded-2xl py-1 bg-green text-white text-center font-semibold">
                · 1º ciclo de educación infantil
            </li>
            <li class="rounded-2xl py-1 bg-orange text-white text-center font-semibold">
                · 2º ciclo de educación infantil
            </li>
            <li class="rounded-2xl py-1 bg-green text-white text-center font-semibold">
                · 1º curso de educación primaria
            </li>
            <li class="rounded-2xl py-1 bg-orange text-white text-center font-semibold">
                · 2º curso de educación primaria
            </li>
            <li class="rounded-2xl py-1 bg-green text-white text-center font-semibold">
                · 3º curso de educación primaria
            </li>
            <li class="rounded-2xl py-1 bg-orange text-white text-center font-semibold">
                · 4º curso de educación primaria
            </li>        
        </ul>
    
    <?php endif; ?>

</section>