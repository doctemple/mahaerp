<?php
// Code Pages 
// Generage Menu in future  
DEFINE('_MENU', array(
            "help"=>array("ช่วยเหลือ","คำศัพท์ในระบบ","help","help"),

            "rq"=>array("ฝ่ายขาย","ลูกค้าขอให้เสนอราคา","req-quo","sale"),
            "rql"=>array("ฝ่ายขาย","รายการขอราคา","req-quo-list","sale"),
            "rqld"=>array("ฝ่ายขาย","ใบขอราคา","req-quo-detail","sale"),
            "rqc"=>array("ฝ่ายขาย","เปรียบเทียบราคา","req-quo-com","sale"),
            "quo"=>array("ฝ่ายขาย","ใบเสนอราคา","quo","sale"),
            "od"=>array("ฝ่ายขาย","เปิดบิลขาย","order","sale"),

            "prql"=>array("จัดซื้อ","รายการขอราคาสินค้า","pre-req-quo-list","pur"),
            "upp"=>array("จัดซื้อ","ปรับปรุงราคาสินค้า","up-product-price","pur"),
            "rqs"=>array("จัดซื้อ","ขอราคาซัพพลายเออร์","req-quo-vendor","pur"),
            "po"=>array("จัดซื้อ","สร้างใบสั่งซื้อ","po","pur"),
            "pol"=>array("จัดซื้อ","รายการใบสั่งซื้อ","po-list","pur"),

            "rec"=>array("คลังสินค้า","รับสินค้า","receive","wh"),
            "pua"=>array("คลังสินค้า","จัดเก็บสินค้าเข้าคลัง","putaway","wh"),
            "pic"=>array("คลังสินค้า","เบิกสินค้า","pick","wh"),
            "del"=>array("คลังสินค้า","การจัดส่งสินค้า","delivery","wh"),
            "aj"=>array("คลังสินค้า","ปรับปรุงคลังสินค้า","adjust","wh"),

            "bil"=>array("บัญชี","ออกบิล/ใบเสร็จรับเงืน","billing","acc"),
            "col"=>array("บัญชี","วางบิล/รับเซ็ค","collection","acc"),
            "deb"=>array("บัญชี","บัญชีลูกหนี้","debtor","acc"),
            "fol"=>array("บัญชี","บันทึกการติดตาม","follow","acc"),

            "requpo"=>array("รายงาน","การเสนอขาย/คำสั่งซื้อ","report","rep"),
            "resupo"=>array("รายงาน","ต้นทุนสินค้า/การจัดซื้อ","report","rep"),
            "reprwh"=>array("รายงาน","ราคาสินค้า/คลังสินค้า","report","rep"),
            "redebill"=>array("รายงาน","การจัดส่งสินค้า/วางบิล","report","rep"),
            "redein"=>array("รายงาน","บัญชีลูกหนี้/รายรับ","report","rep"),
            "redeex"=>array("รายงาน","บัญชีเจ้าหนี้/รายจ่าย","report","rep"),

            "use"=>array("การตั้งค่า","ผู้ใช้","users","set"),
            "role"=>array("การตั้งค่า","กลุ่ม","users","set"),
            "gra"=>array("การตั้งค่า","สิทธิ","users","set"),
            "eve"=>array("การตั้งค่า","ประวัติการเข้าใช้ระบบ","users","set"),
            "sys"=>array("การตั้งค่า","ผู้ดูและระบบ","system","set")
            )
);
?>