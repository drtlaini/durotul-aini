<div id="label-page"><h3>Tampil Data Buku</h3></div>
<div id="content">

    <p id="tombol-tambah-container"><a href="index.php?p=buku-input" class="tombol">Tambah Buku</a>
    <a target="_blank" href="pages/cetak.php"><img scr="print.png" height="50px" height="50px"></a>
    <form CLASS="form-inline" method="post">
        <div aliagn="right"><form method=post><input type="text" name="pencarian">
        <input type="submit" name="search" value="search" class="tombol"></form>
    </form>
</p>
<table id="tabel-tampil">
    <tr>
        <th id="label-tampil-no">NO></th>
        <th> ID Buku</th>
        <th>Judul Buku</th>
        <th>Ketegori</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
       
    </tr>



    <?php
    $batas = 5;
    extract($_GET);
    if(empty($hal)){
        $posisi = 0;
        $hal = 1;
        $nomor = 1;
    }
    else{
        $posisi = ($hal - 1) * $batas;
        $nomor = $posisi+1;
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $pencarian = trim(mysqli_real_escape_string($db, $_POST ['pencarian']));
        if($pencarian != ""){
            $sql = "SELECT * FORM tb_buku WHERE id_buku LIKE '%$pencarian%'
            OR judul_buku LIKE '%$pencarian%'
            OR kategori LIKE '%$pencarian%'
            OR pengarang LIKE '%$pencarian%'
            OR penerbit LIKE '%$pencarian%'";

            $query = $sql;
            $queryJml= $sql;

        }
        else{
            $query = "SELECT * FROM tb_buku  LIMIT $posisi, $batas";
            $queryJml = "SELECT  * FROM tb_buku";
            $no = $posisi * 1;
        }
    }
    else {
        $query = "SELECT * FROM tb_buku  LIMIT $posisi, $batas";
        $queryJml = "SELECT  * FROM tb_buku";
        $no = $posisi * 1;
    }

    //$SQL="SELECT * FROM tbanggota ORDER BY idanggota DESC";
    $q_tampil_buku =mysqli_query($db, $query);
    if(mysqli_num_rows($q_tampil_buku)>0)
    {
        
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $r_tampil_buku['id_buku']; ?></td>
            <td> <?php echo $r_tampil_buku['judul_buku']; ?></td>
            <td><?php echo $r_tampil_buku['kategori']; ?></td>
            <td> <?php echo $r_tampil_buku['pengarang']; ?></td>
            <td> <?php echo $r_tampil_buku['penerbit']; ?></td>
            
        </tr>
        <?php $nomor++;
    }
    else {
        echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
    } ?>
    </table>
    <?php
    if(isset($_POST['pencarian'])){
        if($_POST['pencarian']!=''){
            echo "<div style=\"float:left;\">";
            $jml = mysqli_num_rows (mysqli_query($db, $queryJml));
            echo "Data Hasil Pencarian: <b> $jml</b>";
            echo "</div";
        }
    }
    else{ ?>
    <div style="float: left:">
    <?php
    $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
    echo "Jumlah Data: <b>$jml</b>";
    ?>
    </div>
    <div class="pagination">
        <?php
        $jml_hal = ceil($jml/$batas);
        for ($i=1; $i<=$jml_hal; $i++){
            if($i != $hal){
                echo "<a href=\"?p=buku<hal=$i\">$i</a>";
            }
            else {
                echo "<a class=\"active\">$i</a>";
            }
        }
        ?>
        </div>
        <?php
    }
    ?>
    </div>