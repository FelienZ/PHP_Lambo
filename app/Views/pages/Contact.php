<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<div class="flex flex-col h-screen items-center justify-center gap-3">
    <p class="font-bold">Contact List: </p>
    <ul class="flex flex-col items-center gap-3">
        <li>+62-123456789</li>
        <li>email@example.com</li>
        <li>github.org</li>
    </ul>
</div>

<?= $this->endSection();?>