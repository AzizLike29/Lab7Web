<?= $this->include('template/header'); ?>
<?php if ($artikel) : foreach ($artikel as $row) : ?>
    <article class="entry"><br>
      <h2 style="text-align:center; color:black;"><a href=" <?= base_url('/artikel/' . $row['slug']); ?>"><?= $row['judul']; ?></a>
      </h2><br>
      <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" class="image-circle" width="150" style="border: 2px solid black; border-radius: 10px; margin-left: 130px; margin-bottom: 15px;">
      <p style="text-align:center; position:relative;"></p><?= substr($row['isi'], 0, 200); ?></p>
    </article>
    <hr class="divider" />
  <?php endforeach;
else : ?>
  <article class="entry">
    <h2>Belum ada data.</h2>
  </article>
<?php endif; ?>
<?= $this->include('template/footer'); ?>