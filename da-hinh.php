<?php
// tính chất đa hình (áp dụng cho các lớp có quan hệ kế thừa)
// tính chất này thể hiện qua từ khóa overwrite (ghi đè/định nghĩa lại) thuộc tính & phương thức
// đã được định ở lớp cha
class SinhVien {
    function info(){
        echo "Hoc ngu vai";
    }
}
class NamBui extends SinhVien{
    
}

class SinhVienGa extends NamBui{
    function info(){
        echo "Hoc ga vai <br>";
    }
}

class ThaoTa extends Nambui{

}

$nam = new SinhVienGa();
$nam->info();
$thao = new ThaoTa();
$thao->info();

?>