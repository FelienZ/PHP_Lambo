<nav class="flex relative text-nowrap bg-neutral-950 text-white justify-between p-5 px-10">
    <div class="left flex text-2xl max-sm:text-base items-center gap-3">
        <i class="fa-solid fa-diagram-project"></i>
        <p class="font-bold">My Project Manager</p>
    </div>
    <ul class="flex items-center gap-8 max-sm:hidden">
        <li><a href="/">Home</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/home/about">About</a></li>
        <li class="dropdown dropdown-bottom dropdown-end">
        <div class="avatar avatar-placeholder" role="button" tabindex="0">
        <div class="bg-white text-neutral size-10 font-bold rounded-full">
            <span><i class="fa-solid fa-user"></i></span>
        </div>
        </div>
        <ul tabindex="0" class="dropdown-content menu bg-neutral rounded-box z-1 w-52 mt-7 p-2 shadow-sm">
            <li><?php if(logged_in()): ?>
                    <p class="flex items-center justify-between"><?= user()->username?><i class="fa-solid fa-user"></i></p>
                    <a class="flex items-center justify-between text-red-500" href="<?= url_to('logout') ?>">Logout <i class="fa-solid fa-arrow-right-to-bracket rotate-180"></i></a>
                <?php else: ?>
                    <a class="flex items-center justify-between" href="<?= url_to('login') ?>">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                <?php endif?>
            </li>
        </ul>
        </li>

    </ul>
    <button id="navbtn" class="btn btn-neutral border border-gray-800 hidden max-sm:flex"><i class="fa-solid fa-bars"></i></button>
    <ul id="menu" class="items-center flex-col z-10 py-5 sm:hidden bg-neutral left-0 right-0 top-20 text-white absolute gap-8 hidden">
        <li><a href="/">Home</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/home/about">About</a></li>
    </ul>
</nav>