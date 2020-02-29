<?php 
$username = '2asdfgh';
if(!preg_match("/^[0-9]{1}[a-z]{6}[0-9]{1}$/i",$username)){
 echo "Contoh Username 2asdfgh0 <br/>";
}elseif(strlen($username) < 5){
 echo "Username Kurang Dari 5 Character<br/>";
}elseif(strlen($username) > 8){
 echo "Username Tidak Boleh Lebih dari 8 Character<br/>";
}else{
 echo "Berhasil<br/>";
}
$password = '123-5';
if(!preg_match("/^[a-z0-9]+[-]{1}+[a-z0-9]/",$password)){
 echo "Password Harus Gabungan Huruf Kecil dan Angka dan 1 special karakter \"-\" <br/>";
}elseif(strlen($password) < 7){
 echo "Panjang Password Kurang Dari 7 character<br/>";
}elseif(strlen($password) > 11){
 echo "Panjang Password Lebih Dari 11 character<br/>";
}else{
 echo "berhasil";
}

 ?>
