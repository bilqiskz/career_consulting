<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;
use Myth\Auth\Entities\User;

class Guru extends BaseController
{
    protected $db, $builder, $usermodel, $tabel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->tabel = $this->db->table('konsultasi');
    }

    public function index()
    {
        $data = [
            'title' => 'Guru Dashboard'
        ];


        return view('guru/dashboard', $data);
    }

    public function a()
    {
        $grup = $this->usermodel->where('users.nip = ', null);
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $this->usermodel->search($keyword);
        } else {
            $userr = $this->usermodel;
        }

        $data = [
            'title' => 'Konseling guru',
            'siswa' => $grup->paginate(5, 'users'),
            'pager' => $this->usermodel->pager,
        ];

        return view('guru/konseling', $data);
    }

    public function konseling()
    {
        // $grup = $this->usermodel->where('users.nis = ', null);
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->search($keyword);
        } else {
            $userr = $this->usermodel;
        }

        $data = [
            'title' => 'Konseling guru',
        ];

        $this->tabel->select("*");
        $this->query = $this->tabel->get();
        $data['riwayat'] = $this->query->getResult();

        return view('dashboard/konseling', $data);
    }

    public function search($keyword)
    {
        $query = [
            $this->tabel->like('judul', $keyword),
            $this->tabel->orlike('nama_guru', $keyword),
            $this->tabel->orlike('status_konsultasi', $keyword),
            $this->tabel->orlike('kategori', $keyword),

        ];
        return $query;
    }

    public function konsultasi($id)
    {
        // $grup = $this->usermodel->where('nis =', null);
        // $guru2 = $guroo->findAll('users');
        $data = [
            'title' => 'Konsultasi Baru',
            // 'guruu' => $guru2->getRow(),
        ];

        $this->builder->select('users.id as userid, nip, username, fullname, user_image');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['guruu'] = $query->getRow();

        if (empty($data['guruu'])) {
            return redirect()->back();
        }

        return view('dashboard/konsultasi', $data);
    }
    public function profil()
    {
        $data = [
            'title' => 'Profil Pengguna'
        ];
        $this->builder->select('users.id as userid, nip, username,jurusan, kelas, rombel, fullname, user_image');
        $this->query = $this->builder->get();

        $data['profil'] = $this->query->getResult();

        return view('guru/profil', $data);
    }

    public function daftarsiswa()
    {
        $grup = $this->usermodel->where('users.nip = ', null);
        $keyword = $this->request->getVar('keyword');
        $jrsn = $this->request->getVar('jrsn');
        $kls = $this->request->getVar('kls');
        if ($keyword) {
            $this->usermodel->search($keyword);
        } else {
            $userr = $this->usermodel;
        }

        $data = [
            'title' => 'Konseling guru',
            'siswa' => $grup->paginate(5, 'users'),
            'pager' => $this->usermodel->pager,
        ];

        return view('guru/daftarsiswa', $data);
    }
    //--------------------------------------------------------------------

}
