<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\API\ResponseTrait;

class Post extends ResourceController{
    use RequestTrait;
    public function index(){
        echo view('');
    }
    
    public function createpost()
    {
        $model = new PostModel();
        $dataPost = [
            'postTitle' => $this->request->getVar('postTitle'),
            'imagePost' => $this->request->getVar('imagePost'),
            'detailPost' => $this->request->getVar('detailPost'),
            'note' => $this->request->getVar('note'),
            'num_people' => $this->request->getVar('num_people'),
            'expenses' => $this->request->getVar('expenses'),
            'province' => $this->request->getVar('province'),
            'district' => $this->request->getVar('district'),
            'subDistrict' => $this->request->getVar('subDistrict'),
            'date_start' => $this->request->getVar('date_start'),
            'date_end' => $this->request->getVar('date_end'),
            'userId' => $this->request->getVar('userId'),
            'categoryId' => $this->request->getVar('categoryId')
            
        ];
        $model->insert($dataPost);
        $myRespond = [
            "status"=>201,
            "error"=>null,
            "message" => "สร้างโพสประกาศกิจกรรม สำเร็จ!!!"
        ];
        return $this->respond($myRespond);
    }



}



?>