<?php

namespace App\Controllers;

use App\Models\Anggotakeluarga;
use App\Models\Kartukeluarga;

class Home extends BaseController
{
    public function __construct()
    {
        $this->KartuKeluarga = new Kartukeluarga();
        $this->AnggotaKeluarga = new Anggotakeluarga();
    }

    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard()
    {
        session();
        if(session('nama') == ""){
            return redirect()->to('/login');
        }

        $kk = $this->KartuKeluarga->countAllResults();
        $nik = $this->AnggotaKeluarga->countAllResults();

        $query = $this->KartuKeluarga->get()->getResult();

        $sehat = 0;
        $tidaksehat = 0;
        foreach($query as $d){
            $skor = 0;
            for($i=4; $i<=10; $i++){
                $que = "que$i";
                $nilai = $d->$que;
                $skor = $skor + $nilai;
            }
            if($skor >=7){
                $sehat++;
            }
            else{
                $tidaksehat++;
            }
        }

        $data = [];
        $data['datadashboard'] = [
            'kk' => $kk,
            'nik' => $nik,
            'sehat' => $sehat,
            'tidaksehat' => $tidaksehat
        ];

        $header['title']='Dashboard';
        echo view('partials/header',$header);
        echo view('partials/navbar');
        echo view('partials/sidebar');
        echo view('dashboard', $data);
        echo view('partials/footer');
    }   

    public function datakk($segment)
    {
        session();
        if(session('nama') == null){
            return redirect()->to('/login');
        }
        
        $query = $this->KartuKeluarga->get()->getResult();

        $no = 1;
        $arrkk = [];
        $arrsehat = [];
        $arrtidaksehat = [];
        foreach($query as $d){
            $arr = [];

            $arr['no'] = $no;
            $no++;

            $arr['id'] = $d->id;
            $arr['no_kk'] = $d->no_kk;
            $arr['no_telepon'] = $d->no_telepon;
            $arr['alamat'] = $d->alamat;

            $skor = 0;
            for($i=1; $i<=10; $i++){
                $que = "que$i";
                $nilai = $d->$que;
                $skor = $skor + $nilai;
                $arr[$que] = $d->$que;
            }
            $arr['skor'] = $skor;

            $skorsehat = 0;
            for($i=4; $i<=10; $i++){
                $que = "que$i";
                $nilai = $d->$que;
                $skorsehat = $skorsehat + $nilai;
            }

            if($skorsehat >= 7){
                $arr['status'] = '<p class="text-success">SEHAT</p>';
                $arrsehat[] = $arr;
            }
            else{
                $arr['status'] = '<p class="text-danger">TIDAK SEHAT</p>';
                $arrtidaksehat[] = $arr;
            }

            $arrkk[] = $arr;
        };

        if($segment == "all"){
            $datakirim['query'] = $arrkk;
            $header['title']='Data KK';
        }
        else if($segment == "sehat"){
            $datakirim['query'] = $arrsehat;
            $header['title']='Data Keluarga Sehat';
        }
        else if($segment == "tidaksehat"){
            $datakirim['query'] = $arrtidaksehat;
            $header['title']='Data Keluarga Tidak Sehat';
        }
        
        // print_r(json_encode($datakirim['query']));
        // die();

        echo view('partials/header',$header);
        echo view('partials/navbar');
        echo view('partials/sidebar');
        echo view('datakk', $datakirim);
        echo view('partials/footer');
    }

    public function dataanggota($no_kk)
    {
        session();
        if(session('nama') == null){
            return redirect()->to('/login');
        }
        
        $querykk = $this->KartuKeluarga->where('no_kk', $no_kk);
        $querykk = $this->KartuKeluarga->first();

        $skorsehat = 0;
        for($i=4; $i<=10; $i++){
            $que = "que$i";
            $nilai = $querykk[$que];
            $skorsehat = $skorsehat + $nilai;
        }
        $querykk['skor'] = $skorsehat;

        if($querykk['que1'] == null){
            $querykk['que1'] = "-";
        }
        if($querykk['que2'] == null){
            $querykk['que2'] = "-";
        }
        if($querykk['que3'] == null){
            $querykk['que3'] = "-";
        }

        if($skorsehat >= 7){
            $querykk['status'] = 'Sehat';
        }
        else{
            $querykk['status'] = 'Tidak Sehat';
        }

        $query = $this->AnggotaKeluarga->where('no_kk', $no_kk);
        $query = $this->AnggotaKeluarga->get()->getResult();

        // print_r(json_encode($querykk));
        // die();

        $no = 1;
        $arrangg = [];
        foreach($query as $d){
            $arr = [];

            $arr['no'] = $no;
            $no++;

            $arr['id'] = $d->id;
            $arr['nama'] = $d->nama;
            $arr['nik'] = $d->nik;
            $arr['tgl_lahir'] = $d->tgl_lahir;
            $arr['status'] = $d->status;

            if($d->kepala_keluarga == 1){
                $arr['kepala_keluarga'] = "YA";
            }
            else{
                $arr['kepala_keluarga'] = "-";
            }

            if($d->hamil == 1){
                $arr['hamil'] = "YA";
            }
            else{
                $arr['hamil'] = "TIDAK";
            }

            $arrangg[] = $arr;
        }

        $datakirim['querykk'] = $querykk;
        $datakirim['query'] = $arrangg;
        // print_r(json_encode($datakirim['query']));
        // die();

        $header['title']='Data Anggota';
        echo view('partials/header',$header);
        echo view('partials/navbar');
        echo view('partials/sidebar');
        echo view('dataanggota', $datakirim);
        echo view('partials/footer');
    }

    public function editkk($id)
    {
        session();
        if(session('nama') == null){
            return redirect()->to('/login');
        }
        
        $query = $this->KartuKeluarga->where('id', $id);
        $query = $this->KartuKeluarga->first();

        $datakirim['query'] = $query;

        // print_r(json_encode($query['id']));
        // die();

        $header['title']='Edit KK';
        echo view('partials/header',$header);
        echo view('partials/navbar');
        echo view('partials/sidebar');
        echo view('editkk', $datakirim);
        echo view('partials/footer');
    }

    public function savekk()
    {
        $request = \Config\Services::request();
        $id = $request->getPost('id');
        $nokk = $request->getPost('nokk');
        $notelepon = $request->getPost('notelepon');
        $alamat = $request->getPost('alamat');

        $data = [
            'no_kk' => $nokk,
            'no_telepon' => $notelepon,
            'alamat' => $alamat
        ];

        $query = $this->KartuKeluarga->set($data);
        $query = $this->KartuKeluarga->where('id', $id);
        $query = $this->KartuKeluarga->update();

        return redirect()->to('datakk');

        // print_r(json_encode($query));
        // die();
    }

    public function hapuskk($id)
    {
        $query = $this->KartuKeluarga->delete(['id' => $id]);

        return redirect()->to('datakk');

        print_r(json_encode($id));
    }

    
}
