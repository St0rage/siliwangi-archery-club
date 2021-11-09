<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        $users = model(UserModel::class);

        $data['title'] ='Aktifasi Anggota';
        $submit = $this->request->getPost('submit');   
        
        if(!isset($submit)) {
            return view('admin/index', $data);
        } else {
            $verifCode = $this->request->getPost('OTP');

            $user = $users->where('activate_hash', $verifCode)
            			  ->where('active', 0)
            			  ->first();
            
            $data['user'] = $user;

            return view('admin/index', $data);
            
        }
    }

    public function activate()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');

        $id = $this->request->getPost('id');
        $phone = $this->request->getPost('phone');
        $fullname = $this->request->getPost('fullname');
        $gender = $this->request->getPost('gender');
        $address = $this->request->getPost('address');

        $builder->set('phone', $phone);
        $builder->set('fullname', $fullname);
        $builder->set('address', $address);
        $builder->set('gender', $gender);
        $builder->set('activate_hash', null);
        $builder->set('active', 1);
        $builder->where('id', $id);
        $builder->update();
        $update = $db->affectedRows();
        

        if($update > 0) {
            session()->setFlashdata('message', 'Anggota dengan username '. $this->request->getPost('username') .' Berhasil Terdaftar');
        } else {
            session()->setFlashdata('message', 'Anggota dengan username '. $this->request->getPost('username') .' Gagal Terdaftar');
        }

        return redirect()->to('admin/users');
    }   


    public function users()
    {
        $data['title'] = 'Daftar Anggota';

        $db = \Config\Database::connect();
        $builder = $db->table('users');

        $builder->select('users.id as userid, username, fullname, email, phone, gender, address, active, name as role');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        return view('admin/anggota', $data);
    }
}
