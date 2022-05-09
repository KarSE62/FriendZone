<?php namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model{
    protected $table = 'report';
    protected $allowedFields = ['reportTitle','reportDetail','userId','postId'];
    protected $primaryKey = 'reporttId';

    

    public function insertReport($Report)
    {
        $this->insert($Report);
        return TRUE;
    }

   

}


?>