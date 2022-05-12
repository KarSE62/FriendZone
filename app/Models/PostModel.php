<?php namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model{
    protected $table = 'post';
    protected $allowedFields = ['postTitle','imagePost','detailPost','note','num_people','expenses','province','district','subDistrict','date_start','date_end','statusPost','userId','categoryId','userId_user'];
    protected $primaryKey = 'postId';

    public function viewPost()
    {
        return $this->db->table('post')
        ->join('provinces','post.province = provinces.id')
        ->join('users','post.userId = users.userId')
        ->join('category','post.categoryId = category.categoryId')
        ->join('amphures','post.district = amphures.id')
        ->join('districts','post.subDistrict = districts.id')
        ->orderBy('postId','DESC' )
        ->where('statusPost','1')
        ->get()->getResultArray();
    }

    public function viewMyPost($id)
    {
        return $this->db->table('post')
        ->join('provinces','post.province = provinces.id')
        ->join('users','post.userId = users.userId')
        ->orderBy('postId','DESC' )
        ->where('statusPost','1')
        ->where('userId_user',$id)
        ->get()->getResultArray();
    }

    public function createpost($dataPost)
    {
        $this->insert($dataPost);
        return TRUE;
    }

    public function deletePost($id)
    {
        $this->where('postId', $id)->delete();
        return TRUE;
    }

    public function viewsinglepost($id)
    {
        return $this->db->table('post')
        ->join('provinces','post.province = provinces.id')
        ->join('amphures','post.district = amphures.id')
        ->join('districts','post.subDistrict = districts.id')
        ->join('category','post.categoryId = category.categoryId')
        ->where('postId',$id)
        ->get()->getResultArray();
    }

    public function updatepost($dataPost,$id)
    {
        $this->where('postId', $id)->set($dataPost)->update();
        return true;
    }

    public function viewPostSingle($postId)
    {
        return $this->db->table('post')
        ->join('provinces','post.province = provinces.id')
        ->join('amphures','post.district = amphures.id')
        ->join('districts','post.subDistrict = districts.id')
        ->join('users','post.userId = users.userId')
        ->join('category','post.categoryId = category.categoryId')
        ->orderBy('postId','DESC' )
        ->where('postId',$postId)
        ->get()->getResultArray();
    }
}


?>