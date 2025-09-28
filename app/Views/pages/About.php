<?= $this->extend('layout/template');?>

<?= $this->section('content');?>

<div class="flex flex-col min-h-screen text-center w-[80%] place-self-center my-5 p-4 items-center justify-center gap-3">
    <p class="font-bold text-2xl">HERE IS ABOUT ME!</p>
    <div class="content bg-white drop-shadow-sm rounded-md p-3 lg:w-[80%] flex flex-col gap-3 self-center">
        <div class="top grid md:grid-cols-[auto_1fr] max-md:place-items-center gap-4">
            <div class="image">
                <img src="/images/pp.jpg" alt="" class="rounded-full max-md:size-40 md:size-75">
            </div>
            <div class="profile flex flex-col bg-white drop-shadow-sm rounded-md justify-center items-center p-3 gap-3 w-full">
                <p class="text-3xl font-light">Hello I'm Rajab!</p>
                <span class="text-lg flex max-sm:flex-col items-center gap-3">
                    <p class="text-sm">Codename: </p>
                    <div class="tag items-center flex gap-2">
                        <p class="badge badge-outline badge-success">FelienZ</p> 
                        <p class="badge badge-outline badge-success">Kuchiha</p>
                    </div>
                </span>
                <p class="flex items-center gap-3">My Github: <a href="https://github.com/FelienZ"><i class="fa-brands hover:text-fuchsia-700 fa-github text-2xl"></i></a></p>
            </div>
        </div>
        <div class="bottom grid bg-white drop-shadow-sm rounded-sm p-3 w-full">
            <p class="about text-justify max-sm:h-50 overflow-y-auto">
                Hi, I'm Rajab. I'm a Computer Science student currently passionate about software development, specifically web development. 
                I can't compare my priorities to front-end or back-end, as I believe both are equally important. 
                I'm still relatively new to this field, but I'm very interested to learn more about the workflow.
 
            </p>
        </div>
    </div>
</div>

<?= $this->endSection();?>
