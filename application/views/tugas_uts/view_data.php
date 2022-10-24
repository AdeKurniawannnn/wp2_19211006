<html>

<head>

    <title>Tampil Data Siswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    D-Lemas : Tampilan Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th align="left">Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td align="left">Nis</td>
                <th>:</th>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <td align="left">Kelas</td>
                <th>:</th>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <td align="left">Tanggal</td>
                <th>:</th>
                <td>
                    <?= $tanggal; ?>
                </td>
            </tr>
            <tr>
                <td align="left">Tempat</td>
                <td>:</td>
                <td>
                    <?= $tempat; ?>
                </td>
            </tr>
            <tr>
                <td align="left">Alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td align="left">jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?= $jenis; ?>
                </td>
            </tr>
            <tr>
                <td align="left">Agama</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Tugas_uts');
                                ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>