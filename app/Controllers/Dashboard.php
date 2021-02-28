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
        // $grup = $this->usermodel->where('users.nis = ', null);
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->search($keyword);
        } else {
            $userr = $this->usermodel;
        }

        $data = [
            'title' => 'Konseling siswa',
            // 'guru' => $grup->paginate(5, 'users'),
            // 'pager' => $this->usermodel->pager,
        ];

        $this->tabel2->select("*");
        $this->query = $this->tabel2->get();
        $data['riwayat'] = $this->query->getResult();

        return view('dashboard/konseling', $data);
    }

    public function search($keyword)
    {
        $query = [
            $this->tabel2->like('judul', $keyword),
            $this->tabel2->orlike('nama_guru', $keyword),
            $this->tabel2->orlike('status_konsultasi', $keyword),
            $this->tabel2->orlike('kategori', $keyword),

        ];
        return $query;
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

    public function konsultasi($idKonsultasi)
    {
        $data = [
            'title' => 'Konsultasi Baru',
            'id' => $idKonsultasi,
        ];

        $this->tabel2->select('id, id_guru, id_konsultasi');
        $this->tabel2->where('id_konsultasi', $idKonsultasi);
        $query = $this->tabel2->get();

        $konsultasi = $query->getRow();
        $data['konsultasi'] = $konsultasi;

        if (empty($data['konsultasi'])) {
            return redirect()->back();
        }

        $this->tabel->select('id, username, fullname, user_image');
        $this->tabel->where('id', $konsultasi->id_guru);
        $query2 = $this->tabel->get();
        $data['they'] = $query2->getRow();

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

    public function kategorikonsul($idGuru)
    {
        $data = [
            'title' => 'Pilih Kategori Konsultasi',
            'id' => $idGuru
        ];
        $this->tabel->select('id, nip, username, fullname, user_image');
        $this->tabel->where('id', $idGuru);
        $query = $this->tabel->get();

        $data['guru'] = $query->getRow();

        return view('dashboard/kategorikonsul', $data);
    }

    public function newkonsul($idGuru)
    {
        // ini buat konsultasi
        $kategori = $this->request->getPost('opt');
        $judul = $this->request->getPost('judul');
        $masalah = $this->request->getPost('masalah');
        $nama = $this->request->getPost('name');
        $time = date('Y-m-d H:i:s');
        $data2 = array(
            'id' => user()->id,
            'id_guru' => $idGuru,
            'nis' => user()->nis,
            'nama_guru' => $nama,
            'kategori' => $kategori,
            'judul' => $judul,
            'konsul' => $masalah,
            'tanggal_mulai' => $time,
        );
        $this->tabel2->insert($data2);

        // ini ambil id konsultasi
        $this->tabel->select('id_konsultasi');
        $query = $this->tabel2->get();

        $konsultasi = $query->getLastRow();
        return redirect()->to('/dashboard/konsultasi/' . $konsultasi->id_konsultasi);
    }

    //--------------------------------------------------------------------


}
