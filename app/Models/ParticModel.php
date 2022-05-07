<?php namespace App\Models;

use CodeIgniter\Model;

class ParticModel extends Model{
    protected $table = 'participate';
    protected $allowedFields = ['partId','statusPart','userId_user','postId_post'];
    protected $primaryKey = 'partId';

    public function viewPartic()
    {
        return $this->db->table('participate')
        ->select("participate.partId,participate.userId_user,participate.statusPart,users.userId,users.FName,users.userImage,post.postTitle,post.userId_user")
        ->join('users','participate.userId_user = users.userId')
        ->join('post','participate.postId_post = post.postId')
        ->where('statusPart','0')
        ->orderBy('partId','ASC' )
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

    public function insertPart($dataPartic)
    {
        $this->insert($dataPartic);
        return TRUE;
    }
}


?>