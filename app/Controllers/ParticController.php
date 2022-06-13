<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;
use App\Models\UserModel;
use App\Models\CommentModel;
use App\Models\ParticModel;
use App\Models\NotificationModel;
use App\Models\CategoryModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\API\ResponseTrait;

class ParticController extends ResourceController
{
    use RequestTrait;

    public function requestPartic($postId = null)
    {
        $session = session();
        $userId_user = $session->get("userId");
        $statusUser = $session->get("statusUser");
        $status = "0";
        $dataPartic = [
            'statusPart' => $status,
            'userId_user' => $userId_user,
            'postId_post' => $postId,
        ];
        //var_dump($dataPartic);
        if ($statusUser == "1") {
            $modelPart = new ParticModel();
            $insertPart = $modelPart->insertPart($dataPartic);
            if ($insertPart) {
                $model = new UserModel();
                $numprovince = $session->get("province");
                $datapost['province'] = $model->getProvince($numprovince);
                $modelpost = new PostModel();
                $datapost['posts'] = $modelpost->viewPost();
                $modelCom = new CommentModel();
                $datapost['comments'] = $modelCom->viewComment();
                $modelPart = new ParticModel();
                $datapost['parts'] = $modelPart->viewPartic();
                $datapost['partsProfile'] = $modelPart->viewProfilePartic();
                $modelNotic = new NotificationModel();
                $datapost['notics'] = $modelNotic->viewNotification();
                $modelCategory = new CategoryModel();
                $datapost['categorys'] = $modelCategory->showCategory();
                $session->setFlashdata('Success', 'ส่งคำขอเข้าร่วมกิจกรรมสำเร็จ!!');
                echo view('showdata', $datapost);
                return redirect()->to('/showdata');
            }
        }else if($statusUser == "0"){
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom->viewComment();
            $modelPart = new ParticModel();
            $datapost['parts'] = $modelPart->viewPartic();
            $datapost['partsProfile'] = $modelPart->viewProfilePartic();
            $modelNotic = new NotificationModel();
            $datapost['notics'] = $modelNotic->viewNotification();
            $modelCategory = new CategoryModel();
            $datapost['categorys'] = $modelCategory->showCategory();
            $session->setFlashdata('Err', 'ไม่สามารถส่งคำขอได้กรุณารอการยืนยันตัวตน');
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
    }

    public function deletePartic($partId = null)
    {
        $modelPart = new ParticModel();
        $daletePart = $modelPart->deletePart($partId);
        if ($daletePart) {
            $session = session();
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom->viewComment();
            $modelPart = new ParticModel();
            $datapost['parts'] = $modelPart->viewPartic();
            $datapost['partsProfile'] = $modelPart->viewProfilePartic();
            $modelNotic = new NotificationModel();
            $datapost['notics'] = $modelNotic->viewNotification();
            $modelCategory = new CategoryModel();
            $datapost['categorys'] = $modelCategory->showCategory();
            $session->setFlashdata('Success', 'ปฏิเสธการเข้าร่วมกิจกรรมสำเร็จ!!');
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
    }

    public function acceptPartic($partId = null)
    {
        $modelPart = new ParticModel();
        $status = "1";
        $accept = [
            'statusPart' => $status,
        ];
        $save = $modelPart->acceptPart($accept, $partId);
        if ($save) {
            $session = session();
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom->viewComment();
            $modelPart = new ParticModel();
            $datapost['parts'] = $modelPart->viewPartic();
            $datapost['partsProfile'] = $modelPart->viewProfilePartic();
            $modelNotic = new NotificationModel();
            $datapost['notics'] = $modelNotic->viewNotification();
            $modelCategory = new CategoryModel();
            $datapost['categorys'] = $modelCategory->showCategory();
            $session->setFlashdata('Success', 'ยอมรับเข้าร่วมกิจกรรมสำเร็จ!!');
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
    }
}
