<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<section class="min-h-screen grid">
    <form action="<?= url_to('login') ?>" method="post" class="flex flex-col w-[40%] gap-5 bg-white drop-shadow-md place-self-center p-4">
        <?= csrf_field() ?>
    <p class="font-bold text-center text-xl">Login Dulu!</p>
    <div class="input-column flex flex-col gap-3">
        <div class="nama flex flex-col">
            <p>Username/Email: </p>
            <input type="text" name="login" placeholder="Masukkan nama anda" class="input bg-transparent w-full border border-neutral">
        </div>
        <div class="password flex flex-col">
            <p>Password: </p>
            <input type="password" name="password" placeholder="Masukkan Password" class="input bg-transparent w-full border border-neutral">
        </div>
    </div>
    
    <button class="btn btn-neutral">Login</button>
        <div class="flex items-center justify-between">
            <?php if ($config->allowRegistration) : ?>
                <p><a href="<?= url_to('register') ?>" class="text-primary"><?=lang('Auth.needAnAccount')?></a></p>
            <?php endif; ?>
            <?php if ($config->activeResetter): ?>
                    <p><a href="<?= url_to('forgot') ?>" class="text-primary"><?=lang('Auth.forgotYourPassword')?></a></p>
            <?php endif; ?>
        </div>
    </form>
</section>

					

<?= $this->endSection() ?>


