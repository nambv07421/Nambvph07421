<?php 

class Account{
    private $email="nambui377@gmail.com";
    protected $password = 12345697;
    public function setMail($newMail){
        $this->email = $newMail;
    }
    public function getMail(){
        return $this->email;
    }
    public function setPassword($newPassword){
        $this->password = $newPassword;
    }
}
class getAccount extends Account{
    public function getPassword(){
        return $this->password;
    }
}

$thaotb = new getAccount;
$thaotb->setPassword(12346987);
echo  $thaotb->getPassword();
echo "<br>";

class Pet{
    public  $name;
    private $age;
    private $info;
    public function setAge($name, $age)
    {
        $this->age = $age;
        $this->name = $name;
        $this->setInfor();
    }
    protected function setInfor()
    {
        return $this->info = $this->name." - ".$this->age.' tuổi';
    }

    public function getInfo() {
        return $this->info;
    }
}

$pet = new Pet();
$pet->setAge("Catie", 20);
echo $pet->getInfo();
?>