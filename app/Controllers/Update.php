<?php

namespace App\Controllers;

use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;

class Update extends BaseController
{
    protected $db, $tabel, $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
        $this->db      = \Config\Database::connect();
        $this->tabel = $this->db->table('users');
    }
    public function index()
    {
        $users = model('UserModel');
        $userid = user()->id;
        $user = $users->where('users.id', $userid);

        $data = array(
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'user_image' => $this->request->getPost('user_image'),
            'alamat' => $this->request->getPost('alamat'),
        );


        $user->update($userid, $data);

        // $this->tabel->update('users.id as userid,no_telp, nip, nis, username,jurusan, kelas, rombel, fullname, alamat, user_image');
        // $this->tabel->where('users.id', user()->id);
        // $this->query = $this->tabel->get();

        // $data = array(
        //     'username' => $this->request->getPost('username|is_unique[users.username]'),
        // );

        // $this->query->update($data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->back();
    }
}
