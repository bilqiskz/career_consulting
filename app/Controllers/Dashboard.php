<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Entities\User;

class Dashboard extends BaseController
{
    protected $db, $tabel, $usermodel, $tabel2;
    public function __construct()
    {
        $this->usermodel = new UserModel();
        $this->db      = \Config\Database::connect();
        $this->tabel = $this->db->table('users');
        $this->tabel2 = $this->db->table('konsultasi');
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('dashboard/dashboard', $data);
    }

    public function konseling()
    {
        $grup = $this->usermodel->where('users.nis = ', null);
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $this->usermodel->search($keyword);
        } else {
            $userr = $this->usermodel;
        }

        $data = [
            'title' => 'Konseling guru',
            'guru' => $grup->paginate(5, 'users'),
            'pager' => $this->usermodel->pager,
        ];

        return view('dashboard/konseling', $data);
    }

    public function masukan()
    {
        $kategori = $this->request->getPost('opt');
        $judul = $this->request->getPost('judul');
        $masalah = $this->request->getPost('masalah');
        $time = date('Y-m-d H:i:s');
        $data2 = array(
            'id' => user()->id,
            'nis' => user()->nis,
            'kategori' => $kategori,
            'judul' => $judul,
            'konsul' => $masalah,
            'tanggal_mulai' => $time,
        );

        $this->tabel2->insert($data2);
    }

    public function notifikasi()
    {
        $data = [
            'title' => 'Notifikasi'
        ];
        return view('dashboard/notifikasi', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil Pengguna'
        ];
        $this->tabel->select('*');
        $this->query = $this->tabel->get();
        $data['profil'] = $this->query->getResult();

        return view('dashboard/profil', $data);
    }

    public function konsultasi($id)
    {
        $data = [
            'title' => 'Konsultasi Baru',
            'id' => $id,
        ];

        $this->tabel->select('users.id as userid, nip, username, fullname, user_image');
        $this->tabel->where('users.id', $id);
        $query = $this->tabel->get();

        $data['they'] = $query->getRow();

        if (empty($data['they'])) {
            return redirect()->back();
        }

        return view('dashboard/konsultasi', $data);
    }

    public function back()
    {
        $grup = $this->usermodel->where('users.nis = ', null);
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $this->usermodel->search($keyword);
        } else {
            $userr = $this->usermodel;
        }

        $data = [
            'title' => 'Konseling guru',
            'guru' => $grup->paginate(5, 'users'),
            'pager' => $this->usermodel->pager,
        ];

        return view('dashboard/konseling', $data);
    }


    public function riwayat($id)
    {
        $data = [
            'title' => 'Riwayat Konseling'
        ];

        $this->tabel->select('users.id as userid, nip, username, fullname, user_image');
        $this->tabel->where('users.id', $id);
        $query = $this->tabel->get();

        $data['riwayat'] = $query->getRow();

        if (empty($data['riwayat'])) {
            return redirect()->back();
        }
        return view('dashboard/riwayat', $data);
    }

    public function daftarguru()
    {
        $grup = $this->usermodel->where('users.nis = ', null);
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

        return view('dashboard/daftarguru', $data);
    }

    public function kategorikonsul($id)
    {
        $data = [
            'title' => 'Pilih Kategori Konsultasi',
            // 'siswa' => $grup->findAll(),
            'id' => $id
        ];


        return view('dashboard/kategorikonsul', $data);
    }

    //--------------------------------------------------------------------


}
