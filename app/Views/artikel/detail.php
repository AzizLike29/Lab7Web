<?= $this->include('template/header'); ?>
<article class="entry"><br>
  <h2 style="text-align:center; background-color:black;"><?= $artikel['judul']; ?></h2>
  <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" class="image-circle" width="150" style="border: 2px solid black; border-radius: 10px; margin-left: 130px; margin-bottom: 15px;">
  <p style="text-align:center; position:relative;"><?= $artikel['isi']; ?></p>
</article>
<?= $this->include('template/footer'); ?>