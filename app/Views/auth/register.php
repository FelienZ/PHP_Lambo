<?= $this-> extend('layout/template');?>
<?= $this-> section('content')?>

<section class="min-h-screen grid">
    <form id="formRegister" action="<?= url_to('register') ?>" method="post" class="flex flex-col w-[40%] gap-5 bg-white drop-shadow-md place-self-center p-4">
        <?=csrf_field()?>
        <p class="font-bold text-xl text-center">Form Register</p>
        <div class="input-column flex flex-col gap-3">
            <div class="inputParent email flex flex-col">
                <p>Email: </p>
                <input type="email" name="email" placeholder="Email@example.com" class="input bg-transparent w-full border border-neutral">
                <?php if(session('errors.email')): ?>
                <p id="errorFeedback" class="text-error"><?= session('errors.email')?></p>
            <?php endif?>
            </div>
            <div class="inputParent name flex flex-col">
                <p>Nama: </p>
                <input type="text" name="username" placeholder="Masukkan nama anda" class="input bg-transparent w-full border border-neutral">
                <?php if(session('errors.username')): ?>
                <p id="errorFeedback" class="text-error"><?= session('errors.username')?></p>
            <?php endif?>
            </div>
            <div class="inputParent password flex flex-col">
                <p>Password: </p>
                <input type="password" name="password" placeholder="Masukkan Password" class="input bg-transparent w-full border border-neutral">
                <?php if(session('errors.password')): ?>
                    <p id="errorFeedback" class="text-error"><?= session('errors.password')?></p>
                <?php endif?>
            </div>
            <div class="inputParent passwordConfirm flex flex-col">
                <p>Password: </p>
                <input type="password" name="pass_confirm" placeholder="Konfirmasi Password" class="input bg-transparent w-full border border-neutral">
                <?php if(session('errors.pass_confirm')): ?>
                <p id="errorFeedback" class="text-error"><?= session('errors.pass_confirm')?></p>
            <?php endif?>
            </div>
            <button class="btn btn-neutral">Register</button>
        </div>
         <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>" class="text-primary"><?=lang('Auth.signIn')?></a></p>
    </form>
</section>

<?=$this->endSection()?>

