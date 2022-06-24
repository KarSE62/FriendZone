<?php namespace App\Models;

use CodeIgniter\Model;

class NotificationModel extends Model{
    protected $table = 'notification';
    protected $allowedFields = ['notificateDetail','statusNotic','userId','notificationDate'];
    protected $primaryKey = 'notificateId';

    public function viewNotification()
    {
        return $this->db->table('notification')
        ->join('users','notification.userId = users.userId')
        ->select('notification.notificateId,notification.notificateDetail,notification.statusNotic,notification.userId,notification.notificationDate')
        ->get()->getResultArray();
    }

    public function insertNotification($notificat)
    {
        $this->insert($notificat);
        return TRUE;
    }

}
?>