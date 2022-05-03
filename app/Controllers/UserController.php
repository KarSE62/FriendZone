<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\ParticModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\API\ResponseTrait;

class UserController extends ResourceController
{
    use RequestTrait;
    public function index()
    {
        //include helper form
        helper(['form']);
        echo view('login');
    }

    public function index2()
    {
        //include helper form
        helper(['form']);
        echo view('register');
    }
    public function index3()
    {
        //include helper form
        helper(['form']);
        echo view('savedata');
    }

    public function showdata()
    {
        //include helper form
        $session = session();
        helper(['form']);
        $model = new UserModel();
        $numprovince = $session->get("province");
        $datapost['province'] = $model->getProvince($numprovince);
        $modelpost = new PostModel();
        $datapost['posts'] = $modelpost->viewPost();
        $modelCom = new CommentModel();
        $datapost['comments'] = $modelCom ->viewComment();
        $modelPart = new ParticModel();
        $datapost['parts'] = $modelPart->viewPartic();
        //var_dump($datapost);
        return view('showdata', $datapost);
        
    }

    public function viewProfile()
    {
        
        $session = session();
        $userId = $session->get("userId");
        //var_dump($userId);
        $model = new UserModel();
        $numprovince = $session->get("province");
        $datapost['province'] = $model->getProvince($numprovince);
        $modelpost = new PostModel();
        $datapost['posts'] = $modelpost->viewMyPost($userId);
        $modelCom = new CommentModel();
        $datapost['comments'] = $modelCom ->viewComment();
        $modelPart = new ParticModel();
        $datapost['parts'] = $modelPart->viewPartic();
        //var_dump($datapost);
        return view('viewProfile', $datapost);
        
    }
    
    public function editProfile(){
        //include helper form
        $session = session();
        helper(['form']);
        $model = new UserModel();
        $numprovince = $session->get("province");
        $datapost['province'] = $model->getProvince($numprovince);
        $userId = $session->get("userId");
        $datapost['user'] = $model->getProfile($userId);
        $modelPart = new ParticModel();
        $datapost['parts'] = $modelPart->viewPartic();
        //var_dump($datapost);
        return view('editProfile', $datapost);
    }

    public function updateProfile(){
        //include helper form
        $session = session();
        helper(['form']);
        $model = new UserModel();
        $userId = [
            'userId' => $this->request->getVar('userId'),
        ];
        $dataUser = [
            'FName' => $this->request->getVar('FName'),
            'LName' => $this->request->getVar('LName'),
            'phoneNumber' => $this->request->getVar('phoneNumber'),
            'email' => $this->request->getVar('email'),
        ];
        //var_dump($userId, $dataUser);
        $save = $model->updateUser($dataUser, $userId);
        if($save){
            $session = session();
            helper(['form']);
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $userId = $session->get("userId");
            $datapost['user'] = $model->getProfile($userId);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewMyPost($userId);
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom ->viewComment();
            $modelPart = new ParticModel();
            $datapost['parts'] = $modelPart->viewPartic();
            $session->setFlashdata('Success', 'แก้ไขข้อมูลสำเร็จ!!');
            echo view('editProfile', $datapost);
            return redirect()->to('/showdata');

        }
    
       
    }




    public function register()
    {
        $rules = [
            'userName' => 'required|min_length[6]|max_length[20]',
            'password' => 'required|min_length[6]|max_length[20]',
        ];
        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'userName' => $this->request->getVar('userName'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            ];
            if ($data) {
                $session = session();
                $regis = $model->register($data);
                $session->setFlashdata('msg1', 'สมัครสมาชิกสำเร็จ สามารถเข้าสู่ระบบได้เลยค่ะ');
                return redirect()->to('/login');
            }
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }


    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $userName = $this->request->getVar('userName');
        $password = $this->request->getVar('password');
        $data = $model->login($userName, $password);
        if ($data) {
            $session = session();
            $session->set($data);
            $statusUser = $session->get("statusUser");
            if ($statusUser == "0" || $statusUser == "1") {
                $numprovince = $session->get("province");
                $datapost['province'] = $model->getProvince($numprovince);
                $modelpost = new PostModel();
                $datapost['posts'] = $modelpost->viewPost();
                $modelCom = new CommentModel();
                $datapost['comments'] = $modelCom ->viewComment();
                $modelPart = new ParticModel();
                $datapost['parts'] = $modelPart->viewPartic();
                //var_dump($datapost);
                echo view('showdata',$datapost);
                return redirect()->to('/showdata');
            } else if($statusUser == "2" || $statusUser == "") {
                return redirect()->to('/savedata');
            }
        } else {
            $session->setFlashdata('msg', 'ไม่สามารถเข้าสู่ระบบได้ !!!');
            return redirect()->to('/login');
        }
    }




    public function saveGenaral($userId = null)
    {
        $session = session();
        $userId = $session->get("userId");
        $model = new UserModel();
        $status = "0";
        $data = [
            'FName' => $this->request->getVar('FName'),
            'LName' => $this->request->getVar('LName'),
            'idCard' => $this->request->getVar('idCard'),
            'idCardImage' => $this->request->getVar('idCardImage'),
            'statusUser' => $status,
            'gender' => $this->request->getVar('gender'),
            'userImage' => $this->request->getVar('userImage'),
            'birthday' => $this->request->getVar('birthday'),
            'address' => $this->request->getVar('address'),
            'province' => $this->request->getVar('province'),
            'district' => $this->request->getVar('district'),
            'subDistrict' => $this->request->getVar('subDistrict'),
            'email' => $this->request->getVar('email'),
            'expIdCard' => $this->request->getVar('expIdCard'),
            'phoneNumber' => $this->request->getVar('phoneNumber'),
        ];

        $data = $model->saveGenaral($userId, $data);
        if ($data) {
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom ->viewComment();
            $modelPart = new ParticModel();
            $datapost['parts'] = $modelPart->viewPartic();
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }

    }




    public function Logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}
