<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<?php if (count($projects) > 0): ?>
    <section class="grid grid-cols-3 place-content-center gap-5 p-4 text-neutral min-h-screen">
    <div class="inset-0 fixed place-self-end m-5">
        <a href="/projects/formadd" class="btn btn-primary" onclick="">Tambah +</a>
    </div>
    <?php foreach($projects as $p): ?>
    <div class="flex flex-col gap-5 border border-neutral items-center p-4">
        <img src="/images/placeholder.jpg" alt="" class="border border-neutral p-3 rounded-sm">
        <div class="grid grid-cols-2 gap-2 w-full px-5">
            <div class="left flex flex-col gap-2">
                <p class="font-bold">Name Projects: </p>
                <p class="font-bold">URL Projects: </p>
                <p class="font-bold">Status: </p>
            </div>
            <div class="right flex flex-col gap-2">
                <p><?= $p['title'] ?></p>
                <p><?= $p['url'] ?></p>
                <button class="<?php echo $p['status'] == 'Done' ? 'btn-success':'btn-warning'?> btn btn-outline w-fit"><?= $p['status'] ?></button>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</section>
<?php endif; ?>

<section class="flex flex-col min-h-screen justify-center items-center">
        <p>Project Sedang Kosong!</p>
</section>

<?= $this->endSection();?>
