<?php 
interface Database{
    public function listOrder();
    public function addOrder();
    public function removeOrder();
}
class MYSqlDatabase implements Database{
    public function listOrder()
    {
        echo "List of Order";
    }
    public function addOrder()
    {
      echo "Add Order";
    }
    public function removeOrder()
    {
        echo "Remove Order";
    }
}
class OracleDatabase implements Database{
    public function listOrder()
    {
        echo "List of Order From Oracle Database";
    }
    public function addOrder()
    {
     echo "Add Order in Oracle Database";   
    }
    public function removeOrder()
    {
      echo "Remove Order From Oracle Database";
    }   
}
$mysql = new MYSqlDatabase();
$mysql->listOrder();
echo "<br>";
$mysql->addOrder();
echo "<br>";
$mysql->removeOrder();
echo "<br>";
$oracle = new OracleDatabase();
$oracle->listOrder();
echo "<br>";
$oracle->addOrder();
echo "<br>";
$oracle->removeOrder();
 ?>