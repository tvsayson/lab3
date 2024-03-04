<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'myguests';
    protected $allowedFields = ['name', 'email', 'comment'];


    public function getGuests($email = false)
    {
        if ($email === false) {
            return $this->findAll();
        }

        return $this->where(['email' => $email])->first();
    }
}