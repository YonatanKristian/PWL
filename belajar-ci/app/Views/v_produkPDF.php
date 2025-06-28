<h1>Data Produk</h1>

<table border="1" width="100%" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Foto</th>
    </tr>

    <?php
    $no = 1;
    foreach ($product as $index => $produk) :
       $imgPath = FCPATH . 'public/img/' . $produk['foto'];
if (file_exists($imgPath)) {
    $type = pathinfo($imgPath, PATHINFO_EXTENSION);
    $data = file_get_contents($imgPath);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
} else {
    $base64 = ''; // fallback
}


    ?>
        <tr>
            <td align="center"><?= $index + 1 ?></td>
            <td><?= $produk['nama'] ?></td>
            <td align="right"><?= "Rp " . number_format($produk['harga'], 2, ",", ".") ?></td>
            <td align="center"><?= $produk['jumlah'] ?></td>
            <td align="center">
            <?php if ($base64): ?>
  <img src="<?= $base64 ?>" width="50px">
<?php else: ?>
  <span>Tidak ada gambar</span>
<?php endif; ?>

            </td>
        </tr>
    <?php endforeach; ?>
</table>
Downloaded on <?= date("Y-m-d H:i:s") ?>