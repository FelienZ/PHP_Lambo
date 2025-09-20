<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $title; ?></title>
    <link rel="stylesheet" href="/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main class="container flex flex-col min-h-screen min-w-screen bg-white text-neutral-950">
        <nav class="flex bg-neutral-950 text-white justify-between p-5 px-10">
            <div class="left flex items-center gap-3">
                <i class="fa-solid fa-book-open"></i>
                <p class="font-bold text-2xl">Kuchi Library</p>
            </div>
            <ul class="flex items-center gap-4">
                <li><a href="/">Home</a></li>
                <li><a href="/home/about">About</a></li>
                <li><a href="/home/contact">Contact</a></li>
            </ul>
        </nav>

        <?= $this->renderSection('content') ;?>

        <footer class="flex flex-col gap-3 items-center bg-neutral-950 p-5 text-white">
    <p class="font-bold">2025 © Developed by FelienZ/Kuchiha</p>
    <ul class="flex items-center gap-4">
        <li><i class="fa-brands fa-github text-xl"></i></li>
        <li><i class="fa-brands fa-linkedin text-xl"></i></li>
        <li><i class="fa-brands fa-instagram text-xl"></i></li>
    </ul>
</footer>

</main>
</body>

</html>