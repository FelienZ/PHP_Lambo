<section class="min-h-screen flex place-content-center">
    <div class="content flex flex-col items-center gap-4 p-3 text-center justify-center bg-white drop-shadow-sm w-[80%] rounded-sm">
        <p class="font-bold text-2xl">MY DEV TOOLS</p>
        <p>Berikut ini adalah beberapa tools yang saya gunakan dalam pengembangan web</p>
        <div class="sub-content grid md:grid-cols-[auto_1fr_auto] gap-3 w-[80%]">
            <div class="flex items-center justify-center">
                <p class="font-bold md:rotate-270 text-xl">Dev's Tools</p>
            </div>
            <div class="items grid lg:grid-cols-[repeat(3,_auto)] grid-cols-2 gap-3">
                <?php foreach($tools as $key => $t): ?>
                    <div data-aos="zoom-in" class="flex flex-col hover:bg-neutral/10 hover:cursor-pointer items-center gap-2 p-4 bg-white drop-shadow-sm rounded-sm">
                        <img src="/images/tools/<?=$t?>" alt="" class="size-15">
                        <p class="text-center max-sm:text-xs"><?= $key?></p>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="flex items-center justify-center">
                <p class="font-bold md:rotate-270 text-xl">Dev's Tools</p>
            </div>
        </div>
    </div>
</section>