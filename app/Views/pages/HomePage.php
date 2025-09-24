<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<div class="flex flex-col min-h-screen">
    <div class="hero flex flex-col h-screen bg-neutral-700 text-white items-center justify-center gap-3 " style="background-image: url('/images/library.jpg'); opacity:85%;">
        <p class="font-bold text-3xl">Welcome to Kuchi Projects!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium illo sequi eius?</p>
        <button class="btn btn-primary">Lets Start!</button>
    </div>

    <div class="myProjects w-[80%] my-5 self-center flex flex-col gap-4 p-3">
        <p class="font-bold text-xl">Highlight Project</p>
        <?php if (count($projects) > 0): ?>
            <div class="grid grid-cols-3 gap-3">
            <?php foreach ($projects as $index => $p):  ?>
                <?php if ($index <3): ?>
                        <div class="flex flex-col gap-3 items-center border border-neutral rounded-sm p-3 size-fit">
                            <img src="/images/placeholder.jpg" alt="" class="w-full">
                            <p class="font-bold"><?= $p['title'];?></p>
                            <p><?= $p['url'];?></p>
                            <button class="btn btn-neutral w-full">Check</button>
                        </div>
                <?php endif;?>
            <?php endforeach;?>
             </div>
        <?php else: ?>
            <div class="w-full flex items-center justify-center drop-shadow-md bg-white h-screen">
                <p>Project Sedang Kosong</p>
            </div>
        <?php endif;?>
    </div>
</div>

<?= $this->endSection();?>
