<nav class="flex relative text-nowrap bg-neutral-950 text-white justify-between p-5 px-10">
    <div class="left flex items-center gap-3">
        <i class="fa-solid fa-book-open"></i>
        <p class="font-bold text-2xl">My Manager</p>
    </div>
    <ul class="flex items-center gap-8 max-sm:hidden">
        <li><a href="/">Home</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/home/about">About</a></li>
    </ul>
    <button id="navbtn" class="btn btn-neutral border border-gray-800 hidden max-sm:flex"><i class="fa-solid fa-bars"></i></button>
    <ul id="menu" class="items-center flex-col z-10 py-5 sm:hidden bg-neutral left-0 right-0 top-20 text-white absolute gap-8 hidden">
        <li><a href="/">Home</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/home/about">About</a></li>
    </ul>
</nav>