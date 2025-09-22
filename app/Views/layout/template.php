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
    <main id="root" class="container flex flex-col min-h-screen min-w-screen bg-white text-neutral-950">
    
        <?= $this->include('layout/navbar') ;?>
        <?= $this->renderSection('content') ;?>
        <?= $this->include('layout/footer') ;?>

</main>

<script src="/Scripts/script.js"></script>
</body>

</html>