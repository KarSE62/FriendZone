<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\API\ResponseTrait;

class UserController extends ResourceController{
    use RequestTrait;
    public function index(){
        //include helper form
        helper(['form']);
        echo view('login');
    }

    public function index2(){
        //include helper form
        helper(['form']);
        echo view('register');
    }
    public function index3(){
        //include helper form
        helper(['form']);
        echo view('savedata');
    }
    
    public function showdata(){
        //include helper form
        helper(['form']);
        echo view('showdata');
    }



    public function register()
    {
        $rules = [
            'userName' => 'required|min_length[6]|max_length[20]',
            'password' => 'required|min_length[6]|max_length[20]',
        ];
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'userName' => $this->request->getVar('userName'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
             ];
            if($data){
                $regis = $model->register($data);
                 return redirect()->to('/login');
            }
            }else{
                 $data['validation'] = $this->validator;
                 echo view('register',$data);
             }
        
       
       
        
        
    }


    public function auth(){
        $session = session();
        $model = new UserModel();
        $userName = $this->request->getVar('userName');
        $password = $this->request->getVar('password');
        $data = $model->login($userName,$password);
        if($data){
                $session = session();
                $session->set($data);
                $statusUser = $session->get("statusUser");
                if($statusUser == "0" || $statusUser == "1"){
                    $datapro['province']=$model->getProvince();
                    echo view('showdata',$datapro);
                }else{
                    return redirect()->to('/savedata');
                 }
        }else{
            $session->setFlashdata('msg','ไม่สามารถเข้าสู่ระบบได้ !!!');
            return redirect()->to('/login');
        }
    }



    
    public function saveGenaral($userId=null)
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
        
        $data = $model->saveGenaral($userId,$data);
        if($data){
            return redirect()->to('/showdata');
        }
        
    }


    

    public function Logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
