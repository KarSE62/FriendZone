<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\UserModel;
use App\Models\CommentModel;
use App\Models\ParticModel;
use App\Models\ReportModel;
use App\Models\ReviewModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\API\ResponseTrait;

class ReviewController extends ResourceController
{
    use RequestTrait;

    public function Review()
    {
        $session = session();
        $userId_user = $session->get("userId");
        $userId = $session->get("userId");
        $dataReview = [
            'point' => $this->request->getVar('point'),
            'detail_review' => $this->request->getVar('detail_review'),
            'userId' => $userId_user,
            'postId' => $this->request->getVar('postId'),
        ];
       //var_dump($dataReview);
       $modelReview = new ReviewModel();
       $insertReview = $modelReview->insertReview($dataReview);
       if($insertReview){
        $model = new UserModel();
        $numprovince = $session->get("province");
        $datapost['province'] = $model->getProvince($numprovince);
        $modelpost = new PostModel();
        $datapost['posts'] = $modelpost->viewMyPost($userId);
        $datapost['postreviews'] = $modelpost->viewPostReview($userId);
        $modelCom = new CommentModel();
        $datapost['comments'] = $modelCom ->viewComment();
        $modelPart = new ParticModel();
        $datapost['parts'] = $modelPart->viewPartic();
        $datapost['hisparts'] = $modelPart->viewHistoryPartic($userId);
        $modelReview = new ReviewModel();
        $datapost['reviews'] = $modelReview->viewReview();
        $session->setFlashdata('Success', 'รีวิวโพสต์กิจกรรมสำเร็จ!!');
        return view('viewProfile', $datapost);
       }
        
    }

    
}
