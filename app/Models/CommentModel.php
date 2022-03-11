<?php namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model{
    protected $table = 'commented';
    protected $allowedFields = ['commentDetail','userId','postId'];
    protected $primaryKey = 'commentId';

    public function viewComment()
    {
        return $this->db->table('commented')
        ->join('users','commented.userId = users.userId')
        ->get()->getResultArray();
    }

   

}


?>