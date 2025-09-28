<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<div class="flex flex-col min-h-screen">
    <div class="hero flex flex-col h-screen bg-neutral-700 text-white items-center justify-center gap-3 " style="background-image: url('/images/library.jpg'); opacity:85%;">
        <p class="font-bold text-3xl">Welcome to Kuchi Projects!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium illo sequi eius?</p>
        <button id="btnHero" class="btn btn-primary">Lets Start!</button>
    </div>

    <div class="myProjects xl:w-[85%] my-5 self-center flex flex-col gap-4 p-3">
        <p class="font-bold text-xl text-center">HIGHLIGHT PROJECT</p>
        <?php if (count($projects) > 0): ?>
            <div class="grid xl:flex justify-center gap-8 p-8 drop-shadow-md bg-white">
            <?php foreach ($projects as $index => $p):  ?>
                <?php if ($index <3): ?>
                        <div class="flex flex-col gap-3 items-center bg-white drop-shadow-md rounded-sm p-3 w-full">
                            <img src="/images/uploads/<?= $p['image_url']?>"alt="" class="size-45 rounded-sm w-full drop-shadow-md">
                            <p class="font-bold"><?= $p['title'];?></p>
                            <a href="<?= $p['url'];?>" class="hover:text-success hover:underline hover:underline-offset-2"><?= $p['url'];?></a>
                            <a href="/projects/detail/<?= $p['id'];?>" class="btn btn-neutral w-full">Check</a>
                        </div>
                <?php endif;?>
            <?php endforeach;?>
             </div>
        <?php else: ?>
            <div class="w-full flex items-center justify-center drop-shadow-md bg-white h-100">
                <p>Project Sedang Kosong</p>
            </div>
        <?php endif;?>
    </div>
</div>

<?= $this->endSection();?>
