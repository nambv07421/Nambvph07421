<?php  
//  ví dụ 1
class Info{
    var $name;
    var $age;
    var $color;

    function __construct($name = "", $age = 0, $color="")
    {
        $this->name = $name;
        $this->age = $age;
        $this->color=$color;
    }

    function getInfo(){
        echo "Nó tên là $this->name - nó được $this->age tuổi - nó $this->color" ;
    }
}

class Dog extends Info{
    
}

class Cat extends Info{

}

$tom = new Dog('Rex Luther', 5,"green");
$milu = new Cat('Rin', 2,'black');


$tom->getInfo();
echo "<br>";
$milu->getInfo();
echo "<br>";
echo "<br>";
echo "<br>";

// ví dụ 2
class UserInfo{
    var $name;
    var $date;
    var $address;
    var $email;
    var $password;
    function __construct($name="",$date="",$address="",$email="",$password=""){
        $this->name=$name;
        $this->date=$date;
        $this->address=$address;
        $this->email=$email;
        $this->password=$password;

    }
    function getUserInfo(){
        echo "Ho va ten : $this->name ";
        echo "<br>";
        echo "Ngay sinh : $this->date";
        echo "<br>";
        echo "Dia chi : $this->address";
        echo "<br>";
        echo "Email: $this->email";
        echo "<br>";
        echo "pass : $this->password";
    }
}

class Nam extends UserInfo{
    
}

class Thao extends UserInfo{

}

$Namm = new Nam('Bui Van Nam', "11/05/2000",'193 phu dien','nambui377@gmail.com','123456789');
$Thaoo = new Thao('Thao Ta', '02/10/2000','Hung yen','thaongu@gamil.com','123456');


$Namm->getUserInfo();
echo "<br>";
echo "<br>";
echo "<br>";
$Thaoo->getUserInfo();

?>