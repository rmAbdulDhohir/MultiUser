<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index()
    {
        $data['title'] = 'User List';

        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('admin/index', $data);
    }

    public function detail($id = 0)
    {
        $data['title'] = 'User Detail';
        // print_r($id);
        // die('tes');
        $this->builder->select('users.id as userid, username, fullname, user_image, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }

    public function create()
    {
        $data = ['title' => 'Form Tambah User'];
        return view('admin/create', $data);
    }

    public function save()
    {
        $this->userModel->save([
        // dd($this -> request->getVar());
        'image' => $this->request->getVar('image'),
        'username' => $this->request->getVar('username'),
        'fullname' => $this->request->getVar('fullname'),
        'email' => $this->request->getVar('email'),
        'password' => $this->request->getVar('password')

        ]);
        return redirect()->to('/admin');
}
}
