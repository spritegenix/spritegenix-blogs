<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

  protected $table = 'users';
  protected $allowedFields = [
    'id',
    'firstname',
    'lastname',
    'email',
    'password',
    'created_at',
    'updated_at',
    'u_type',
    'profile_pic',
    'billing_name',
    'company',
    'country',
    'postal_code',
    'billing_email',
    'phone',
    'address'
  ];

  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

  protected function beforeInsert(array $data)
  {
    $loggedInUserId = session()->get('id');
    $loggedInUserToken = session()->get('user_token');
    $data['data']['created_by'] = $loggedInUserId;
    $data['data']['user_token'] = $loggedInUserToken;

    $data = $this->passwordHash($data);
    $data['data']['created_at'] = date('Y-m-d H:i:s');
    return $data;
  }

  protected function beforeUpdate(array $data)
  {
    $loggedInUserId = session()->get('id');
    $loggedInUserToken = session()->get('user_token');
    $data['data']['created_by'] = $loggedInUserId;
    $data['data']['user_token'] = $loggedInUserToken;

    $data = $this->passwordHash($data);
    $data['data']['updated_at'] = date('Y-m-d H:i:s');
    return $data;
  }

  protected function passwordHash(array $data)
  {
    if (isset($data['data']['password']))
      $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
    return $data;
  }
}
