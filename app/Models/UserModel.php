<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['FName','LName','userName','password','idCard','idCardImage','status','gender','userImage','birthday','address','province','district','subDistrict','email','phoneNumber'];
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
                    'logged_in' => TRUE
                ];
                return $ses_data;
            }else{
                return $ses_data;
            }
            
        }else{
            return $ses_data;
        }
    }

    


}
