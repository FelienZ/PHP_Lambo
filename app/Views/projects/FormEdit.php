<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<section class="flex flex-col justify-center items-center p-4 text-neutral min-h-screen">
    <form enctype="multipart/form-data" action="/projects/update/<?=$projects['id'];?>" method="post" class="flex flex-col w-[30%] p-5 rounded-sm gap-8 justify-center bg-white drop-shadow-lg ">
        <?= csrf_field();?>
        <p class="text-center font-bold text-xl">EDIT PROJECT</p>
        <div class="input-column flex flex-col gap-3">
            <div id="inputColumn" class="nama flex flex-col gap-1">
                <p class="text-sm">Masukkan Nama Project: </p>
                <input type="text" value="<?= $projects['title'] ;?>" name="name" placeholder="Nama Project" class="input w-full bg-transparent border border-neutral">
                <?php if(session()->has('validation')): ?>
                    <p class="errorMessage text-error text-sm transition-opacity duration-500"><?= session('validation')->getError('name') ?></p>
                <?php endif?>
            </div>
            <div id="inputColumn" class="flex flex-col gap-1">
                <p class="text-sm">Masukkan URL Project: </p>
                <input type="text" name="url" value="<?= $projects['url'] ;?>" placeholder="URL Project" class="input w-full bg-transparent border border-neutral">
                <?php if(session()->has('validation')): ?>
                    <p class="errorMessage text-error text-sm transition-opacity duration-500"><?= session('validation')->getError('url') ?></p>
                <?php endif?>
            </div>
            <div id="inputColumn" class="flex flex-col gap-1">
                <p class="text-sm">Status Project </p>
                <select name="status" value="<?= $projects['status'] ;?>" class="select bg-white border border-neutral w-full">
                    <option value="" disabled hidden selected>Status</option>
                    <option value="Done">Done</option>
                    <option value="On Progress">On Progress</option>
                </select>
                <?php if(session()->has('validation')): ?>
                    <p class="errorMessage text-error text-sm transition-opacity duration-500"><?= session('validation')->getError('status') ?></p>
                <?php endif?>
            <div id="inputColumn" class="nama flex flex-col gap-1">
                <p class="text-sm">Upload Gambar: </p>
                <input type="file" name="image" class="file-input bg-transparent border border-neutral w-full">
                <?php if(session()->getFlashdata('message')): ?>
                    <p class="errorMessage text-error text-sm transition-opacity duration-500"><?= session()->getFlashdata('message'); ?></p>
                <?php endif?>
            </div>
        </div>

        <button type="submit" class="btn btn-neutral">Submit</button>
    </form>
</section>

<?= $this->endSection();?>