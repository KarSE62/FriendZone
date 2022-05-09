<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;
use App\Models\UserModel;
use App\Models\CommentModel;
use App\Models\ParticModel;
use App\Models\ReportModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\API\ResponseTrait;

class ReportController extends ResourceController
{
    use RequestTrait;

    public function requestReport()
    {
        $session = session();
        $userId_user = $session->get("userId");
        $dataReport = [
            'reportTitle' => $this->request->getVar('reportTitle'),
            'reportDetail' => $this->request->getVar('reportDetail'),
            'userId' => $userId_user,
            'postId' => $this->request->getVar('postId'),
        ];
       //var_dump($dataReport);
        $modelReport = new ReportModel();
        $insertReport = $modelReport->insertReport($dataReport);
        if($insertReport){
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom->viewComment();
            $modelPart = new ParticModel();
            $datapost['parts'] = $modelPart->viewPartic();
            $session->setFlashdata('Success', 'ส่งรายงานโพสต์กิจกรรมสำเร็จ!!');
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
    }

    
}
