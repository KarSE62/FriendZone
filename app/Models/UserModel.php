<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['FName','LName','userName','password','idCard','idCardImage','statusUser','gender','userImage','birthday','address','province','district','subDistrict','email','expIdCard','phoneNumber'];
    protected $primaryKey = 'userId';


    public function register($data){
        $this->save($data);
        return TRUE;
    }



    public function login($userName,$password){
        $data = $this->where('userName', $userName)->first();
        $ses_data = [];
        if($data){
            $pass = $data['password'];
            $verify_password = password_verify($password, $pass);
            if($verify_password){
                $ses_data = [
                    'userId' => $data['userId'],
                    'userName' => $data['userName'],
                    'FName' => $data['FName'],
                    'LName' => $data['LName'],
                    'gender' => $data['gender'],
                    'statusUser' => $data['statusUser'],
                    'userImage' => $data['userImage'],
                    'province' => $data['province']
                ];
                return $ses_data;
            }else{
                return $ses_data;
            }
            
        }else{
            return $ses_data;
        }
    }

    public function saveGenaral($userId,$data){
        $check = $this->where('userId',$userId)->first();
        if($check){
            $session = session();
            $this->where('userId', $userId)->set($data)->update();
            $session->set($data);
            return TRUE;
            }
    }

    public function getProvince($numprovince){
        return $this->db->table('users')
        ->join('provinces','users.province = provinces.id')
        ->where('province' ,$numprovince)
        ->get()->getResultArray();
    }

    public function getProfile($userId){
        return $this->db->table('users')
        ->join('provinces','users.province = provinces.id')
        ->join('amphures','users.district = amphures.id')
        ->join('districts','users.subDistrict = districts.id')
        ->where('userId' ,$userId)
        ->get()->getResultArray();
    }
    
    public function updateUser($dataUser, $userId){
        $this->where('userId', $userId)->set($dataUser)->update();
        return true;
    }


}
