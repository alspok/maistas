<?php

namespace App\Models;
use App\Libs\Database;
use App\Helpers\FormHelper;

class Posts
{
    public function getAllPosts()
    {
        $db = new Database;
        $db->select()->from('tbl_maistas');
        return $db->get();
    }

    public function getPostById()
    {
        $db = new Database();
        $db->select()->from('tbl_maistas')->where('id', $id);
    }
}