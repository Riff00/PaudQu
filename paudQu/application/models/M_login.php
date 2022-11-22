<?php

class M_login extends   CI_Model
{
    function cek_users($username, $password)
    {
        $kondisi    = array(
            'username'=> $username,
            'password'=> md5($password)
        );

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($kondisi);
    return $this->db->get();
    }
}
