<?php

include('db.class.php');

class mydb extends db {

    public function getUsers()
    {
        return $this->qry('SELECT * FROM tblusers');
    }

    public function getUser($user_id = 0)
    {
        return $this->qry('SELECT * FROM tblusers WHERE id = ' . $user_id);
    }

    public function getUserAddress($user_id = 0)
    {
        return $this->qry('SELECT * FROM tbladdress WHERE user_id = ' . $user_id);
    }

    public function getAddress($address_id = 0)
    {
        return $this->qry('SELECT * FROM tbladdress WHERE id = ' . $address_id);
    }

    public function addUser($data = array())
    {
        if (isset($data['name'])) {
            $this->qry('INSERT INTO tblusers (name) VALUES ("' . $data['name'] . '") ');
            return mysql_insert_id();
        }

        return FALSE;
    }

    public function addUserAddress($data = array())
    {
        if (isset($data['address']) && isset($data['user_id'])) {
            $this->qry('INSERT INTO tbladdress (user_id,address) VALUES ("' . $data['user_id'] . '","' . $data['address'] . '") ');
            return mysql_insert_id();
        }

        return FALSE;
    }

    public function deleteUser($user_id = 0)
    {
        $this->deleteUserAddress($user_id);
        $this->qry('DELETE FROM tblusers WHERE id = ' . $user_id);
        return mysql_affected_rows();
    }

    public function deleteAddress($address_id = 0)
    {
        $this->qry('DELETE FROM tbladdress WHERE id = ' . $address_id);
        return mysql_affected_rows();
    }

    public function deleteUserAddress($user_id = 0)
    {
        $this->qry('DELETE FROM tbladdress WHERE user_id = ' . $user_id);
        return mysql_affected_rows();
    }

    public function updateUser($user_id = 0, $data = array())
    {
        if (isset($data['name'])) {
            $this->qry('UPDATE tblusers SET name ="' . $data['name'] . '" WHERE id = "' . $user_id . '"');
            return mysql_affected_rows();
        }

        return FALSE;
    }

    public function updateAddress($address_id = 0, $data = array())
    {
        if (isset($data['address'])) {
            $this->qry('UPDATE tbladdress SET address ="' . $data['address'] . '" WHERE id = "' . $address_id . '"');
            return mysql_affected_rows();
        }

        return FALSE;
    }

}
