<?php namespace App\Models;

use CodeIgniter\Model;

class ParticModel extends Model{
    protected $table = 'participate';
    protected $allowedFields = ['partId','statusPart','userId','postId'];
    protected $primaryKey = 'partId';

    public function viewPartic()
    {
        return $this->db->table('participate')
        ->join('users','participate.userId = users.userId')
        ->join('post','participate.postId = post.postId')
        ->where('statusPart','0')
        ->orderBy('partId','ASCC' )
        ->get()->getResultArray();
    }

    public function deletePart($partId)
    {
        $this->where('partId', $partId)->delete();
        return TRUE;
    }

    public function acceptPart($accept, $partId)
    {
        $this->where('partId', $partId)->set($accept)->update();
        return true;
    }
}


?>