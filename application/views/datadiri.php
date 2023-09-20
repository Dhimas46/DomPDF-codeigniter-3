<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
			font-size: 16px;
        }
        .id-card {
            width: 800px;
			background-color: #87CEEA;
            height: 450px;
            border: 2px solid #000;
            margin: 50px auto;
            position: relative;
        }
        .id-card .left {
            width: 50%;
            height: 100%;
            float: left;
            text-align: left;
            padding-left: 50px;
        }
        .id-card .right {
            width: 50%;
            height: 100%;
            float: left;
            text-align: right;
            padding: 10px;
        }
        .id-card .photo {
            width: 150px;
            height: 200px;
            border: 2px solid #000;
            position: absolute;
            top: 50%;
            left: 60%;
            transform: translate(50%, -50%);
        }
    </style>
</head>
<body>

    <div class="id-card">
	<center>
<h1>Provinsi Jawa Timur <br> Kota Malang</h1>
</center>
	
        <div class="left">
		<br>
		<pre>
	       Nama             : <?= $users->name?> <br>
        Tempat/Tgl Lahir : <?= $users->place_of_birth.', ' .  date('d F Y', strtotime($users->date_birth))?> <br>
        Alamat           : <?= $users->address?>
		</pre>
	
        </div>
        <div class="right" style="display:flex; ">
              <img style="margin-right: 100px;" src="<?= $logo?>" width="150px" height="200px">
        </div>
    </div>
</body>
</html>
