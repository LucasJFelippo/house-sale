<?php
    include_once "House.php";
    class HouseSaleDAO{
        private $house;
        private function dbconnect() {
            $db = new mysqli("localhost" , "root", "", "work");
            return $db;
        }
        public function add($house){
            $db = $this->dbconnect();
            $sql = 'INSERT INTO `HouseSale`(`desc`, `pic`, `oper`, `ngbor`, `price`, `aloc`) VALUES ('.$house->getDesc().', '.$house->getPic().', '.$house->getOper().', '.$house->getNgbor().', '.$house->getPrice().', '.$house->getAloc().')';
            mysqli_query($db, $sql);
            mysqli_close($db);
        }
    }
?>