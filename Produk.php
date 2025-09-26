<?php

require('koneksi.php');
require('Form.php');

$sql = "SHOW COLUMNS FROM product WHERE Field IN ('jenis_buket','tema','size')";
$result = $conn->query($sql);

$enumOptions = []; // Menyimpan hasilnya

while ($row = $result->fetch_assoc()) {
    
    if (preg_match("/^(enum|set)\('(.*)'\)$/i", $row['Type'], $matches)) {        
        $values = explode("','", $matches[2]);
        $enumOptions[$row['Field']] = $values;
    }
}

#Form 
$form = new Form('Proses.php');
$form->open();

$form->dropdown('jenis_buket','Jenis Buket',$enumOptions['jenis_buket']);
$form->checkbox('tema','Tema',$enumOptions['tema']);
$form->radio('size','size',$enumOptions['size']);
$form->Text('harga','Harga');
$form->Textarea('deskripsi','Deskripsi');
$form->close('Simpan Buket');
?>