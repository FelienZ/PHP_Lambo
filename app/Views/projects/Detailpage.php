<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<section class="min-h-screen place-items-center place-content-center">
    <div data-aos="fade-in" class="content flex flex-col items-center p-4 my-10 gap-3 bg-white rounded-md drop-shadow-sm w-[50%]">
        <p class="font-bold"><?= strtoupper($title);?> DETAIL</p>
        <img src="/images/uploads/<?=$projects['image_url']?>" alt="" class="w-full rounded-sm">
        <div class="flex items-center gap-4">
            <p>Status: </p>
            <p class="<?= $projects['status'] == 'Done' ? 'badge-success' : 'badge-warning' ?> badge badge-outline">
                <?= $projects['status']?>
            </p>
        </div>
        <p class="flex items-center gap-2">URL : <a href="<?=$projects['url']?>" class="hover:text-success"><?=$projects['url']?></a></p>
        <div class="flex flex-col gap-3 items-center justify-center p-4 bg-white drop-shadow-sm">
            <p class="font-bold">DESKRIPSI</p>
            <p class="text-justify"><?= $projects['deskripsi']?></p>
        </div>
    </div>
</section>
<?= $this->endSection();?>