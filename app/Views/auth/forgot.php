<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<section class="min-h-screen grid">
    <form action="<?= url_to('forgot') ?>" method="post" class="flex flex-col w-[40%] gap-5 bg-white drop-shadow-md place-self-center p-4">
        <?= csrf_field() ?>
        <p class="font-bold text-xl text-center">Lupa Password</p>
    <div class="input-column">
        <div class="nama flex flex-col">
            <p>Email: </p>
            <input type="email" name="email" placeholder="Email@example.com" class="input bg-transparent w-full border border-neutral">
        </div>
    </div>
    <button class="btn btn-neutral"><?=lang('Auth.sendInstructions')?></button>
        <div class="balik flex justify-end">
            <?php if ($config->activeResetter): ?>
                    <p><a href="<?= url_to('login') ?>" class="text-primary"><?=lang('Auth.signIn')?></a></p>
            <?php endif; ?>
        </div>
    </form>
</section>
<?= $this->endSection() ?>

