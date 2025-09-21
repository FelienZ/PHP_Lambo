<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<section class="flex flex-col justify-center items-center p-4 text-neutral min-h-screen">
    <form action="" class="flex flex-col w-[30%] p-5 rounded-sm gap-8 justify-center bg-white drop-shadow-lg ">
        <p class="text-center font-bold text-xl">NEW PROJECTS FORM</p>

        <div class="input-column flex flex-col gap-3">
            <div class="nama flex flex-col gap-1">
                <p class="text-sm">Masukkan Nama Project: </p>
                <input type="text" placeholder="Nama Project" class="input w-full bg-transparent border border-neutral">
            </div>
            <div class="nama flex flex-col gap-1">
                <p class="text-sm">Masukkan URL Project: </p>
                <input type="text" placeholder="URL Project" class="input w-full bg-transparent border border-neutral">
            </div>
            <div class="nama flex flex-col gap-1">
                <p class="text-sm">Status Project </p>
                <select class="select bg-white border border-neutral w-full">
                    <option value="" disabled selected>Status</option>
                    <option value="Done">Done</option>
                    <option value="On Progress">On Progress</option>
                </select>
            <div class="nama flex flex-col gap-1">
                <p class="text-sm">Upload Gambar: </p>
                <input type="file" class="file-input bg-transparent border border-neutral w-full">
            </div>
        </div>

        <button class="btn btn-neutral">Submit</button>
    </form>
</section>

<?= $this->endSection();?>