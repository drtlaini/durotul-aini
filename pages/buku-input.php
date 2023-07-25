<div id="label-page"><h3>Input Data Buku</h3><div>
<div id="content">
    <form action="proses/buku-input-proses.php" method="post" enctype="multipart/form-data">

    <table id="tabel-input">
        
        <tr>
            <td class="label-formulir">ID Buku</td>
            <td class="isian-formulir"><input type="text" name="id_buku" class="isian-fprmulir isian-formulir-border"></td>
        </tr>
        <tr>
            <td class="label-formulir">Judul Buku</td>
            <td class="isian-formulir"><input type="text" name="judul_buku" class="isian-fprmulir isian-formulir-border"></td>
        </tr>
        <tr>
            <td class="label-formulir">kategori</td>
            <td class="isian-formulir"><input type="text" name="kategori" class="isian-fprmulir isian-formulir-border"></td>
        </tr>
       
        <tr>
            <td class="label-formulir">Pengarang</td>
            <td class="isian-formulir"><textarea rows="2" cols="40" name="pengarang" class="isian-formulir isian-formulir-border"></textarea></td>
        </tr>
        <tr>
            <td class="label-formulir">Penerbit</td>
            <td class="isian-formulir"><textarea rows="2" cols="40" name="penerbit" class="isian-formulir isian-formulir-border"></textarea></td>
        </tr>
        <tr>
            <td class="label-formulir"></td>
            <td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
        </tr>
</table>
</form>
</div>