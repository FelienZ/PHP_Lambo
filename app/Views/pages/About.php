<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<div class="flex flex-col min-h-screen text-center w-[80%] bg-white drop-shadow-md place-self-center my-5 p-4 items-center justify-center gap-3">
    <p class="font-bold text-xl">Here is About Me!</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus hic molestias quibusdam tenetur, laudantium aut accusantium harum! Minima laboriosam eveniet, nostrum dolorem pariatur molestias amet laborum facere reprehenderit sapiente necessitatibus!</p>
    <p class="font-bold text-lg">How To Reach Me</p>
    <ul class="flex flex-col items-center gap-3">
        <li>+62-123456789</li>
        <li>email@example.com</li>
        <li>github.org</li>
    </ul>
</div>

<?= $this->endSection();?>
