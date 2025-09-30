<?= $this-> extend('layout/template');?>
<?= $this-> section('content')?>

<section class="min-h-screen grid">
    <form action="<?= url_to('register') ?>" method="post" class="flex flex-col w-[40%] gap-5 bg-white drop-shadow-md place-self-center p-4">
        <?=csrf_field()?>
        <p class="font-bold text-xl text-center">Form Register</p>
        <div class="input-column flex flex-col gap-3">
            <div class="email flex flex-col">
                <p>Email: </p>
                <input type="email" name="email" placeholder="Email@example.com" class="input bg-transparent w-full border border-neutral">
            </div>
            <div class="name flex flex-col">
                <p>Email: </p>
                <input type="text" name="username" placeholder="Masukkan nama anda" class="input bg-transparent w-full border border-neutral">
            </div>
            <div class="password flex flex-col">
                <p>Password: </p>
                <input type="password" name="password" placeholder="Masukkan Password" class="input bg-transparent w-full border border-neutral">
            </div>
            <div class="passwordConfirm flex flex-col">
                <p>Password: </p>
                <input type="password" name="pass_confirm" placeholder="Konfirmasi Password" class="input bg-transparent w-full border border-neutral">
            </div>
            <button class="btn btn-neutral">Register</button>
        </div>
         <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>" class="text-primary"><?=lang('Auth.signIn')?></a></p>
    </form>
</section>

<?=$this->endSection()?>

