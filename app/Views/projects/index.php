<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<section class="grid grid-cols-3 place-content-center gap-5 p-4 text-neutral min-h-screen">
    <div class="flex flex-col gap-5 border border-neutral items-center p-4">
        <img src="/images/placeholder.jpg" alt="" class="border border-neutral p-3 rounded-sm">
        <div class="grid grid-cols-2 gap-2 w-full px-5">
            <div class="left flex flex-col gap-2">
                <p class="font-bold">Name Projects: </p>
                <p class="font-bold">URL Projects: </p>
                <p class="font-bold">Status: </p>
            </div>
            <div class="right flex flex-col gap-2">
                <p>Kuchi Store</p>
                <p>http://localhost:3000</p>
                <button class="btn btn-outline btn-warning w-fit">On Progress</button>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-5 border border-neutral items-center p-4">
        <img src="/images/placeholder.jpg" alt="" class="border border-neutral p-3 rounded-sm">
        <div class="grid grid-cols-2 gap-2 w-full px-5">
            <div class="left flex flex-col gap-2">
                <p class="font-bold">Name Projects: </p>
                <p class="font-bold">URL Projects: </p>
                <p class="font-bold">Status: </p>
            </div>
            <div class="right flex flex-col gap-2">
                <p>Resto App</p>
                <p>http://localhost:3000</p>
                <button class="btn btn-outline btn-warning w-fit">On Progress</button>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-5 border border-neutral items-center p-4">
        <img src="/images/placeholder.jpg" alt="" class="border border-neutral p-3 rounded-sm">
        <div class="grid grid-cols-2 gap-2 w-full px-5">
            <div class="left flex flex-col gap-2">
                <p class="font-bold">Name Projects: </p>
                <p class="font-bold">URL Projects: </p>
                <p class="font-bold">Status: </p>
            </div>
            <div class="right flex flex-col gap-2">
                <p>LokaStore</p>
                <p>http://localhost:3000</p>
                <button class="btn btn-outline btn-warning w-fit">On Progress</button>
            </div>
        </div>
    </div>

</section>

<?= $this->endSection();?>
