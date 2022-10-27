<?php
// mohn nama varialbe di rubah agar tidak terlihat sama terimakasih :)
$id             = $_POST['id'];
$nama           = $_POST['nama'];
$jabatan        = $_POST['jabatan'];
$gaji_pokok     = $_POST['gaji_pokok'];
$jam            = $_POST['jam'];
$gaji_terima    = $_POST['gaji_terima'];
$bonus          = $_POST['bonus'];
$gaji_bersih    = $_POST['gaji_bersih'];



if ($jabatan == "bendahara") {
    $gaji_pokok = 750000;
} elseif ($jabatan == "staff") {
    $gaji_pokok = 600000;
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>
        <!-- isi sendiri -->
    </title>
</head>

<body>
    <div>
        <h1>
            <!-- isi sendidri -->
        </h1>
        <h5>
            <!-- isi sendri -->
        </h5>
    </div>

    <div>
        <form method="post" name="form" id="form">
            <table>
                <tr>
                    <td>ID Pegawai</td>
                    <td>
                        <input type="text" name="id" placeholder="ID" value="<?php echo $id ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Pegawai</td>
                    <td>
                        <input type="text" name="nama" placeholder="Nama Pegawai" value="<?php echo $nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>
                        <select name="jabatan" onchange="javascript:document.form.submit()">
                            <option></option>
                            <option value="bendahara" <?php echo (($jabatan == "bendahara") ? "Selected" : "") ?>>Bendahara</option>
                            <option value="staff" <?php echo (($jabatan == "staff") ? "Selected" : "") ?>>Staff</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td>
                        <input type="text" name="gaji_pokok" value="<?= $gaji_pokok ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td>
                        <input type="text" name="jam" placeholder="Jam Kerja" value="<?php echo $jam ?>">
                    </td>
                </tr>
                <tr>
                    <td>Gaji Terima</td>
                    <td>
                        <input type="text" name="gaji_terima" placeholder="<?php echo $gaji_pokok * $jam ?>">
                    </td>
                </tr>
                <tr>
                    <td>Bonus</td>
                    <td>
                        <input type="text" name="bonus" placeholder="<?php if ($jam <= 7) {
                                                                            echo $bonus = 0;
                                                                        } else {
                                                                            echo $bonus = ($jam - 7) * ($gaji_pokok * 0.1);
                                                                        }
                                                                        ?>
                                                                                            ">
                    </td>
                </tr>
                <tr>
                    <td>Gaji Bersih</td>
                    <td>
                        <input type="text" name="gaji_bersih" placeholder="<?php echo $tot = ($gaji_pokok * $jam) + $bonus; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="KIRIM">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>