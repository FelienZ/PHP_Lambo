<section class="min-h-screen flex place-content-center">
    <div class="content flex flex-col items-center gap-4 justify-center bg-white drop-shadow-sm w-[80%] rounded-sm">
        <p class="font-bold text-2xl">MY DEV TOOLS</p>
        <p>Berikut ini adalah beberapa tools yang saya gunakan dalam pengembangan web</p>
        <div class="sub-content grid grid-cols-[auto_1fr_auto] w-[80%]">
            <div class="flex items-center">
                <p class="font-bold rotate-270 text-xl">Dev's Tools</p>
            </div>
            <div class="items grid grid-cols-[repeat(3,_auto)] gap-3">
                <?php foreach($tools as $key => $t): ?>
                    <div class="flex flex-col items-center gap-2 p-4 bg-white drop-shadow-sm rounded-sm">
                        <img src="/images/tools/<?=$t?>" alt="" class="size-15">
                        <p><?= $key?></p>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="flex items-center">
                <p class="font-bold rotate-270 text-xl">Dev's Tools</p>
            </div>
        </div>
    </div>
</section>