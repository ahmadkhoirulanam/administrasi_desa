<!DOCTYPE html>
<html>

<head>
    <title>Tampilan Surat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
        }

        .from {
            margin-bottom: 10px;
        }

        .date {
            margin-bottom: 20px;
        }

        .subject {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content {
            text-indent: 30px;
        }

        .signature {
            float: right;
            margin-top: 30px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    include 'konek.php';
    // Mengambil nilai id dari URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM data_request_sku natural join data_user WHERE id_request_sku=$id";
        $result = mysqli_query($konek, $query);
        // jika data gagal diambil maka akan tampil error berikut
        if (!$result) {
            die("Query Error: " . mysqli_errno($konek) .
                " - " . mysqli_error($konek));
        }
        // mengambil data dari database
        $data = mysqli_fetch_assoc($result);
        // apabila data tidak ada pada database maka akan dijalankan perintah ini
        if (!count($data)) {
            echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
        }
    } else {
        echo "Tidak ada nilai id dalam URL.";
    }
    ?>

    

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table border="1" align="center">
                        <table border="0" align="center">
                            <tr>
                                <td><img src="demo1/img/pati.png" width="70" height="87" alt=""></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center>
                                        <font size="4">PEMERINTAHAN KABUPATEN PATI</font><br>
                                        <font size="4">KECAMATAN SUKOLILO</font><br>
                                        <font size="5"><b>DESA KEDUMULYO</b></font><br>

                                    </center>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="45">
                                    <hr color="black">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    <center>
                                        <font size="4"><b>SURAT KETERANGAN USAHA</b></font><br>
                                        <hr style="margin:0px" color="black">
                                        <span>Nomor : 045.2 / <?php echo $id; ?> / 29.07.05</span>
                                    </center>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Kepala Desa Kedumulyo Kecamatan Sukolilo, Menerangkan bahwa :
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" class="ml-5">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?php echo $data['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>TTL</td>
                                <td>:</td>
                                <td><?php echo $data['tanggal_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?php echo $data['jekel']; ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><?php echo $data['agama']; ?></td>
                            </tr>
                            <tr>
                                <td>Status Warga</td>
                                <td>:</td>
                                <td><?php echo $data['status_warga']; ?></td>
                            </tr>
                            <tr>
                                <td>No. NIK</td>
                                <td>:</td>
                                <td><?php echo $data['nik']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $data['alamat']; ?></td>
                            </tr>
                        </table>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bahwa orang tersebut benar merupakan warga Desa Kedumulyo Kecamatan Sukolilo dan mempunyai usaha  <?php echo $data['usaha']; ?> Surat ini dipergunakan untuk <?php echo $data['keperluan']; ?>. Demikian surat ini diberikan kepada yang bersangkutan agar dapat dipergunakan untuk sebagaimana mestinya.
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table border="0" align="center">
                            <tr>
                                <th></th>
                                <th width="100px"></th>
                                <th>Sukolilo,  <?php echo $data['acc']; ?></th>
                            </tr>
                            <tr>
                                <td>Tanda tangan <br> Yang bersangkutan </td>
                                <td></td>
                                <td>Kepala Desa Kedumulyo</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th width="100px"></th>
                                <th><img src="demo1/img/ttd.png" width="70" height="87" alt=""></th>
                            </tr>
                           
                           
                            <tr>
                                <td><b style="text-transform:uppercase"><u>(<?php echo $data['nama']; ?>)</u></b></td>
                                <td></td>
                                <td><b><u>(SUTRISNO)</u></b></td>
                            </tr>
                        </table>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <script>        
            window.print(); // Ini akan mencetak halaman secara otomatis        
    </script>
</body>

</html>