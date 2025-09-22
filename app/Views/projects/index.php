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
<div class="overflow-x-auto place-self-center text-neutral min-h-screen my-5 w-[90%] bg-white drop-shadow-md">
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
    <tbody class="h-50 text-center">
      <!-- row 1 -->
      <tr>
        <th><?= $index + 1 ?></th>
        <td class="place-items-center"><!-- <?= $p['image_url']?> --> <img src="/images/placeholder.jpg" class="lg:size-25 size-15 max-sm:size-10 rounded-sm"></td>
        <td><?= $p['title']?></td>
        <td><?= $p['url']?></td>
        <td><button class="<?php echo $p['status'] == 'Done' ? 'btn-success' : 'btn-warning' ?>  btn btn-outline font-normal"><?= $p['status']?></button></td>
        <td class="flex items-center gap-2 justify-center h-50">
            <button class="btn text-white btn-warning">Edit <i class="fa-solid fa-pen-to-square"></i></button>
            <button class="btn text-white btn-error">Hapus <i class="fa-solid fa-trash"></i></button>
        </td>
      </tr>
    </tbody>
    <?php endforeach;?>
    </table>
</div>
<?php else: ?>
    <section class="flex flex-col min-h-screen justify-center items-center">
        <p>Project Sedang Kosong!</p>
    </section>
<?php endif; ?>


<?= $this->endSection();?>
