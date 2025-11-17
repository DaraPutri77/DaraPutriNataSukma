<?php
$nilai = 85;

// penentuan grade
if ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    $grade = "B";
} elseif ($nilai >= 70 && $nilai <= 79) {
    $grade = "C";
} elseif ($nilai >= 60 && $nilai <= 69) {
    $grade = "D";
} elseif ($nilai >= 0 && $nilai <= 59) {
    $grade = "E";
} else {
    $grade = "Nilai tidak valid";
}

// output grade
echo "Nilai Anda adalah $nilai, Grade Anda adalah $grade.<br>";

//keterangan kelulusan
switch ($grade) {
    case "A":
    case "B":
        $keterangan = "SANGAT MEMUASKAN, ANDA LULUS!";
        break;
    case "C":
        $keterangan = "CUKUP MEMUASKAN, ANDA LULUS DENGAN SYARAT.";
        break;
    case "D":
    case "E":
        $keterangan = "MOHON MAAF, ANDA TIDAK LULUS.";
        break;
    default:
        $keterangan = "Grade Tidak Dikenali.";
        break;
}

echo "Keterangan Kelulusan: $keterangan<br>";

//ternary
$prioritas_bimbingan = ($grade == "D" || $grade == "E")
    ? "Wajib Bimbingan"
    : "Tidak Wajib Bimbingan";

echo "Status Bimbingan: $prioritas_bimbingan";
?>
