<?php
session_start();
include "db_config.php";
    class Order extends DB{
        public function getOrderById($id){
            $sql="select * from MyOrder where id='$id'";
            return $this->db->query($sql);
        }
        public function getOrderItem($order_id){
            $sql="select * from Order_Item where Order_id In ($order_id)";
            return $this->db->query($sql);
        }
        public function getOrders(){
            $sql="select * from MyOrder Order BY id DESC ";
            return $this->db->query($sql);
        }
        public function checkout($Customer){
            $sql="insert into MyOrder (Customer,created_at) values ('$Customer',now())";
            $this->db->query($sql);

            $Order_id=$this->db->lastInsertId();

            foreach ($_SESSION['cart'] as $id=>$qty) {
                $get_sql="select * from product where id In ($id)";
                $get_row=$this->db->query($get_sql);

                foreach ($get_row as $myRow){
                    $item_name=$myRow['p_name'];
                    $price=$myRow['price'];


                    $item_sql="insert into Order_Item (Item_name,Price,Qty,Order_id) values ('$item_name','$price','$qty','$Order_id')";
                    $this->db->query($item_sql);
                    unset($_SESSION['cart']);
                    header("location: index.php");
                }

            }
        }

}