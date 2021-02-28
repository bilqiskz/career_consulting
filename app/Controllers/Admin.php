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
        $data = [
            'title' => 'Admin Dashboard'
        ];
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();
        // $db      = \Config\Database::connect();
        // $builder = $db->table('users');
        $this->builder->select('users.id as userid, username, email, user_image, jurusan, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('admin/index', $data);
    }

    public function manage()
    {
        $data = [
            'title' => 'Manage Users'
        ];
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();
        // $db      = \Config\Database::connect();
        // $builder = $db->table('users');
        $this->builder->select('users.id as userid, username, email, user_image, jurusan, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('admin/manage', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'User Detail'
        ];

        $this->builder->select('users.id as userid, username, email, user_image, jurusan, name, fullname');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $this->query = $this->builder->get();

        $data['user'] = $this->query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('admin/manage');
        }

        return view('admin/detailuser', $data);
    }

    public function newuser()
    {
        $this->builder->select('users.id as userid, username, email, user_image, jurusan, name, fullname');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->query = $this->builder->get();

        $data['user'] = $this->query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/newuser');
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil Pengguna'
        ];
        $this->builder->select('users.id as userid, nip, username,jurusan, kelas, rombel, fullname, user_image');
        $this->query = $this->builder->get();

        $data['profil'] = $this->query->getResult();

        return view('admin/profil', $data);
    }
    //--------------------------------------------------------------------

}
