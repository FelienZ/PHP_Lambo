<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<div class="hero flex flex-col h-screen bg-neutral-700 text-white items-center justify-center gap-3 " style="background-image: url('/images/library.jpg'); opacity:85%;">
    <p class="font-bold text-3xl">Welcome to Kuchi Projects!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium illo sequi eius?</p>
    <button class="btn btn-primary">Lets Start!</button>
</div>

<?= $this->endSection();?>
