<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<div class="inset-0 fixed place-self-end m-5 z-30">
        <a href="/projects/formadd" class="btn btn-primary" onclick="">Tambah +</a>
</div>
<?php if(session()->getFlashdata('message')) :?>
  <div id="alert-message" class="inset-0 fixed flex m-5 justify-center z-30">
    <div class="alert-success alert size-fit text-white">
      <?= session()->getFlashdata('message') ?>
    </div>
</div>
<?php endif; ?>
<?php if (count($projects) > 0): ?>
<div class="overflow-x-auto place-self-center rounded-sm text-neutral min-h-screen my-5 w-[90%] bg-white drop-shadow-md">
    <div class="flex fle-col max-h-screen overflow-y-auto">
      <table class="table">
    <!-- head -->
    <thead class="text-white bg-neutral text-center">
      <tr>
        <th>No.</th>
        <th>Image</th>
        <th>Name</th>
        <th>URL</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php foreach($projects as $index => $p): ?>
    <tbody class="text-center">
      <!-- row 1 -->
      <tr class="border-b border-neutral">
        <th><?= $index + 1 ?>.</th>
        <td class="place-items-center"><img src="/images/uploads/<?= $p['image_url']?>" class="lg:h-30 max-sm:size-10 rounded-sm"></td>
        <td><?= $p['title']?></td>
        <td><a href="<?= $p['url']?>" class="hover:text-success hover:underline hover:underline-offset-2"><?= $p['url']?></a></td>
        <td><p class="<?= $p['status'] == 'Done' ? 'badge-success' : 'badge-warning' ?> text-nowrap badge badge-outline font-normal"><?= $p['status']?></p></td>
        <td class="grid h-40 items-center justify-center">
            <a href="/projects/edit/<?= $p['id'];?>" class="btn text-white btn-warning">Edit <i class="fa-solid fa-pen-to-square"></i></a>
            <form action="/projects/delete/<?= $p['id'];?>" method="post">
              <?= csrf_field();?>
              <button class="btn text-white btn-error">Hapus <i class="fa-solid fa-trash"></i></button>
            </form>
        </td>
      </tr>
    </tbody>
    <?php endforeach;?>
    </table>
    </div>
</div>
<?php else: ?>
    <section class="flex flex-col min-h-screen justify-center items-center">
        <p>Project Sedang Kosong!</p>
    </section>
<?php endif; ?>


<?= $this->endSection();?>
