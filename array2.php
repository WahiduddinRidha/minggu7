<?php
//Array multidimensi/array bersarang
$mahasiswa =[
    ["wahiduddin", "23.510034" , "Sistem informasi", "wahid_23510034@stimata.ac.id"],
    ["edi", "23.510035" , "Sistem informasi", "edi_23510035@stimata.ac.id"],
    ["ridha", "23.510036" , "teknologi informasi", "ridha_23510035@stimata.ac.id"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
       <!-- //Menggunakan Foreach
        <?php foreach($mahasiswa as $mhs) : ?>
            <li>
                <?php echo $mhs; ?>
            </li>
            <?php endforeach; ?> -->
         
<!-- <li><?php echo $mahasiswa[0][0]; ?></li>
<li><?php echo $mahasiswa[0][1]; ?></li>
<li><?php echo $mahasiswa[0][2];?></li>
<li><?php echo $mahasiswa[0][3]; ?></li>
        </ul>
        <ul>
<li><?php echo $mahasiswa[1][0]; ?></li>
<li><?php echo $mahasiswa[1][1]; ?></li>
<li><?php echo $mahasiswa[1][2];?></li>
<li><?php echo $mahasiswa[1][3]; ?></li>
</ul> -->
<!-- //memanggil array menggunakan foreach -->
<?php foreach($mahasiswa as $mhs) : ?>
<ul>
<?php foreach($mhs as $m) : ?>
<li><?php echo $m; ?></li>
<?php endforeach; ?>
</ul>
<?php endforeach; ?>
</body>
</html>