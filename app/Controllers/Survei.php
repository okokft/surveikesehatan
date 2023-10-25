<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Anggotakeluarga;
use App\Models\Kartukeluarga;

class Survei extends BaseController
{
    public function __construct()
    {
        $this->KartuKeluarga = new Kartukeluarga();
        $this->AnggotaKeluarga = new Anggotakeluarga();
    }

    public function index()
    {
        echo view('survei');
    }

    public function submit()
    {
        $request = \Config\Services::request();

        $arranggota = [];
        for($i=0; $i < $request->getPost("jumlahanggota"); $i++){
            $arr = [ 
                'no_kk' => $request->getPost("nokk"),
                'nama' => $request->getPost("anggotakeluarga[$i][nama]") ,
                'nik' => $request->getPost("anggotakeluarga[$i][nik]") ,
                'status' => $request->getPost("anggotakeluarga[$i][status]") ,
                'tgl_lahir' => $request->getPost("anggotakeluarga[$i][tgl_lahir]") ,
                'hamil' => (int)$request->getPost("anggotakeluarga[$i][hamil]") 
            ];
            $arranggota[] = $arr;
        };

        $senddata = $this->AnggotaKeluarga->insertBatch($arranggota);

        $kepalakeluarga = $request->getPost("kepalakeluarga");
        $update = $this->AnggotaKeluarga->set(['kepala_keluarga' => "1"]);
        $update = $this->AnggotaKeluarga->where(['nik' => $kepalakeluarga]);
        $update = $this->AnggotaKeluarga->update();

        $arr_kk = [
            'no_kk' => $request->getPost("nokk"),
            'no_telepon' => $request->getPost("notelepon"),
            'alamat' => $request->getPost("alamat"),
            'que1' => $request->getPost("que1"),
            'que2' => $request->getPost("que2"),
            'que3' => $request->getPost("que3"),
            'que4' => $request->getPost("que4"),
            'que5' => $request->getPost("que5"),
            'que6' => $request->getPost("que6"),
            'que7' => $request->getPost("que7"),
            'que8' => $request->getPost("que8"),
            'que9' => $request->getPost("que9"),
            'que10' => $request->getPost("que10"),
        ];

        $this->KartuKeluarga->insert($arr_kk);

        $no_kk = $request->getPost("nokk");
        return redirect()->to('/finish/'.$no_kk);
    }

    public function finish($nokk)
    {
        session();
        $query = $this->KartuKeluarga->where('no_kk', $nokk);
        $query = $this->KartuKeluarga->get()->getResult();

        $data = [];

        $skor = 0;
        for($i=1; $i<=10; $i++){
            $que = "que$i";
            $nilai = $query[0]->$que;
            $skor = $skor + $nilai;
        }
        $data['skor'] = $skor;

        $que = [];
        if($data['skor'] < 7 ){
            session()->setFlashdata('msg', 'tidak sehat');
            if($query[0]->que4 == 0 ){
                $que[] = '<div class="alert alert-warning">Air yang digunakan oleh keluarga anda bukan berasal dari sumber yang baik</div>';
            }
            if($query[0]->que5 == 0 ){
                $que[] = '<div class="alert alert-warning">Ada anggota Keluarga Anda yang tidak biasa mencuci tangan dengan air bersih dan sabun</div>';
            }
            if($query[0]->que6 == 0 ){
                $que[] = '<div class="alert alert-warning">Ada Anggota Keluarga Anda yang tidak menggunakan jamban yang baik dan benar</div>';
            }
            if($query[0]->que7 == 0 ){
                $que[] = '<div class="alert alert-warning">Keluarga Anda kurang mempraktikan Pemberantasan Sarang Nyamuk yang baik dan benar</div>';
            }
            if($query[0]->que8 == 0 ){
                $que[] = '<div class="alert alert-warning">Ada Anggota Keluarga Anda yang kurang makan sayur dan buah</div>';
            }
            if($query[0]->que9 == 0 ){
                $que[] = '<div class="alert alert-warning">Tidak ada Anggota Keluarga Anda yang melakukan aktifitas fisik / olahraga sedang atau berat minimal 30 menit setiap hari (dalam seminggu terakhir)</div>';
            }
            if($query[0]->que10 == 0 ){
                $que[] = '<div class="alert alert-warning">Ada Anggota Keluarga Anda yang merokok</div>';
            }
        }
        else{
            session()->setFlashdata('msg', 'sehat');
            $que[] = '<div class="alert alert-warning">Tidak ada masalah Kesehatan di Keluarga Anda. Keluarga Anda termasuk dalam Keluarga Sehat</div>';
        }

        
        $data['que'] = $que;

        // print_r(json_encode($data));
        // die();

        echo view('finish', $data);
    }
}
