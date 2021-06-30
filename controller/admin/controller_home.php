<?php

use function PHPSTORM_META\type;

class controller_home
{
    public function __construct()
    {

        $this->statistics();
    }
    function statistics()
    {

        $total_record_user = model::num_rows("select customer_id from tbl_customer");
        $date =  '-' . date('m') . '-';
        $date_old =   date('m') - 1;
        $date_old = '-0' . $date_old . '-';
        $total_record_oder = model::num_rows("select order_id from tbl_order where ngaymua like '%$date%' ");
        $total_record_oder_old = model::num_rows("select order_id from tbl_order where ngaymua like '%$date_old%' ");
        $rate_order = ($total_record_oder - $total_record_oder_old) / $total_record_oder_old * 100;
        $get_record_money = model::list_all("select gia from tbl_order where ngaymua like '%$date%' and trangthai = 1");
        $total_record_money = 0;
        foreach ($get_record_money as  $row) {

            $row->gia = (float) $row->gia;
            $total_record_money += $row->gia;
        }

        // print_r($total_record_money);

        include "view/admin/home.php";
    }
}
new controller_home();
