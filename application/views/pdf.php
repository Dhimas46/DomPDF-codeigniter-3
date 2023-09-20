<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kop Surat</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif; /* Menggunakan font Times New Roman */
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
        $nomorTelepon = '+62 ' . rand(100, 999) . ' ' . rand(1000, 9999) . ' ' . rand(1000, 9999);
        $alamatEmail = 'info@perusahaananda.com';
    ?>
    <table>
        <tr>
            <td><img src="<?= $logo ?>" alt="" width="100px" height="100px"></td>
            <td>
			<center>
                <div>
                    <span style="font-size: 30px; font-weight: bold;">PT. Wise Elevate</span><br>
                    <span>Alamat: Jl. Rajawali Rt 21 Rw 08 No 3 Sidorejo, Kec.Pagelaran, Kab.Malang</span><br>
                    <span><?=$nomorTelepon?></span><br>
                    <span><?=$alamatEmail?></span>
                </div>
				</center>
            </td>
		
        </tr>
    </table>
	<hr style="color:black; height:3px;">
</body>
</html>
