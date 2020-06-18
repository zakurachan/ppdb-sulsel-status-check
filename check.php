// GABUT SOB, GATAU PENGEN NGAPAIN :(

<?php

$banner = "[ PPDB SULSEL REGISTRATION CHECK ]\n Angga Gans // Version GABUT BOSS";
echo "\n";
echo $banner;
echo "\n";
echo "==================================\n";
echo " 1. Buka Langsung \n";
echo " 2. Buat Link [ ERROR ] \n";
echo " 3. Original Link \n";
echo "==================================\n";
echo "[-] Pilih mana bos > ";
$pilih = trim(fgets(STDIN));

if ($pilih == 1) {
	echo "[!] Masukkan NISN / No. Pendaftaran : ";
	$nisn = trim(fgets(STDIN));
	echo "[!] Tunggu sebentar ...\n";
	@system("xdg-open https://sulsel.siap-ppdb.com/#/040201/detail/$nisn");
}

elseif ($pilih == 2) {
	echo "[!] Masukkan NISN / No. Pendaftaran : ";
	$nisn = trim(fgets(STDIN));
	echo "[!] Tunggu sebentar ...\n";
	$link = file_get_contents('http://tinyurl.com/api-create.php?url=https://sulsel.siap-ppdb.com/#/040201/detail/$nisn');
	echo "[!] Buka di browser sob : ".$link."\n";
}

elseif ($pilih == 3) {
	echo "[!] Masukkan NISN / No. Pendaftaran : ";
	$nisn = trim(fgets(STDIN));
	echo "[!] Tunggu sebentar ...\n";
	echo "[!] Buka di browser sob : https://sulsel.siap-ppdb.com/#/040201/detail/$nisn \n";
}

else {
	echo "[!] Pilih yang bener sob ...\n";
}

?>
