<?php


class account
{
    var $id_account = null;
    var $name_account = null;
    var $email_account = null;
    var $images_account = null;
    var $phone_account = null;
    var $address_account = null;

    public function __construct()
    {
    }
    // ==================================================
    //Lấy danh sách tài khoản
    // ==================================================

    function getAllaccount()
    {
        $db = new connect();
        $select = "select * from account ORDER BY id_account DESC";
        $result = $db->getList($select);
        return $result;
    }



    // ==================================================
    //Lấy thông tin tài khoản theo ID
    // ==================================================
    function getaccountById($id)
    {
        $db = new connect();
        $select = "select * from account where id_account=$id";
        $result = $db->getInstance($select);
        return $result;
    }

    // ==================================================
    //Lấy ID tài khoản theo email
    // ==================================================
    function getAccountByEmail($mail)
    {
        $db = new connect();
        $select = "select * from account where email_account='$mail'";
        $result = $db->getInstance($select);
        return $result;
    }

    // ==================================================
    //Thêm tài khoản
    // ==================================================
    function insert_account($name_account, $email_account, $pass_account, $address_account, $phone_account)
    {
        $db = new connect();
        $pass_hash = hash('sha1', ''.$pass_account.'');
        $query = "INSERT INTO account(name_account, email_account, pass_account, address_account, phone_account) VALUES ('$name_account', '$email_account', '$pass_hash', '$address_account', '$phone_account')";
        $db->exec($query);
    }



    // ==================================================
    //Cập nhật cửa hàng
    // ==================================================
    function update_account($name_account, $email_account, $pass_account, $phone_account, $address_account, $level, $id_account)
    {
        $db = new connect();
        $pass_hash = hash('sha1', ''.$password.'');
        $query = "UPDATE account set name_account='$name_account', email_account='$email_account', pass_account='$pass_hash', phone_account='$phone_account', address_account='$address_account', level='$level' where id_account='$id_account'";
        $db->exec($query);
    }



    // ==================================================
    //Xóa danh mục
    // ==================================================
    function delete_account($id)
    {
        $db = new connect();
        $query = "delete from account where id_account = '$id'";
        $db->exec($query);
    }



    // ==================================================
    //Đếm số lượng 
    // ==================================================
    function countaccountList()
    {
        $db = new connect();
        $select = "select count(*) as TotalAccount from account";
        $result = $db->getInstance($select);
        return $result;
    }

    // ==================================================
    //Đếm số lượng mem mới
    // ==================================================
    function count_account_new()
    {
        $db = new connect();
        $select = "select count(*) as new_accounts from account WHERE status=0";
        $result = $db->getInstance($select);
        return $result;
    }
    
    // ==================================================
    //Update mem mới
    // ==================================================
    function update_account_new($id_account)
    {
        $db = new connect();
        $query = "UPDATE account set status=1 where id_account='$id_account'";
        $db->exec($query);
    }
    
    // ==================================================
    //Check Tài khoản
    // ==================================================
    function check_account($email,$password){
        $db = new connect();
        $pass_hash = hash('sha1', ''.$password.'');
        $select = "select * from account where email_account='$email' and pass_account='$pass_hash'";
        $result = $db ->getInstance($select);
        if($result != null){
            return true;
        }else{
            return false;
        }
    }
}