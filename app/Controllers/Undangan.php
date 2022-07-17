<?php

namespace App\Controllers;

use App\Models\UndanganModel;
use App\Controllers\BaseController;

class Undangan extends BaseController
{
    protected $UndanganModel;
    public function __construct(){
        $this->UndanganModel = new UndanganModel();
    }

    public function index($user='',$tamu='')
    {
        // $request = \Config\Services::request();
        // dd($request->uri->getSegment('2'));

        // dd($this->segmennya->uri->getSegment('2'));

        $get_data = $this->UndanganModel->get_undangan($user);

        if ($get_data == null) {
            $data_a = array(
                'status'    => 201, 
                'pesan'     => 'Pengantin tidak ditemukan', 
            );

            echo json_encode($data_a);
            die();
        }

        // dd($get_data);

        $nama_lengkap_pw    = $get_data['nama_lengkap_pw'];
        $nama_lengkap_pp    = $get_data['nama_lengkap_pp'];

        $nama_pw            = explode(" ", $nama_lengkap_pw);
        $nama_pp            = explode(" ", $nama_lengkap_pp);

        $get_tgl            = json_decode($this->UndanganModel->tgl_indo($get_data['tgl_akad']),true);
        $get_tgl_resepsi    = json_decode($this->UndanganModel->tgl_indo($get_data['tgl_resepsi']),true);

        $get_desain         = $this->UndanganModel->get_desain($get_data['kode_pasangan']);


        // =============== GET GALERI ======================
            $get_galeri = $this->db->table('undangan_galeri')
            ->select('gambarnya')
            ->where('kode_pasangan', $get_data['kode_pasangan'])
            ->get()
            ->getResultArray()
            ;
            $url_galeri    = 'https://svendor.zeeid.net/galeri/';

            // dd($get_galeri);
            // foreach ($get_galeri as $datax ) {
            //     echo $datax['gambarnya']."<BR>";
            // }

            // die();
        // =============== END GET GALERI ==================
        
        $data = [
            'tittle'            => 'Undangan | '.$user,
            'user'              => $user,
            'nama_tamu'         => $tamu,
            'alias_pw'          => substr($nama_lengkap_pw,0, 1),
            'alias_pp'          => substr($nama_lengkap_pp,0, 1),
            'nama_pw'           => $nama_pw[0],
            'nama_pp'           => $nama_pp[0],
            'nama_lengkap_pw'   => $nama_lengkap_pw,
            'nama_lengkap_pp'   => $nama_lengkap_pp,

            'nama_ayah_pp'      => $get_data['nama_ayah_pp'],
            'nama_ibu_pp'       => $get_data['nama_ibu_pp'],
            'nama_ayah_pw'      => $get_data['nama_ayah_pw'],
            'nama_ibu_pw'       => $get_data['nama_ibu_pw'],


            'alamat_tamu'       => 'SOLO',


            'tanggal_acara'     => $get_data['tgl_akad'],
            'hari'              => $get_tgl['hari'],
            'tanggal'           => $get_tgl['tanggal'],
            'tahun'             => $get_tgl['tahun'],
            'bulan'             => $get_tgl['bulan'],
            
            'kata_pembukaan'    => $get_data['kata_pembukaan'],
            
            'hari_akad'         => $get_tgl['hari'],
            'tgl_akad'          => $get_tgl['tanggal'],
            'bulan_akad'        => $get_tgl['bulan'],
            'tahun_akad'        => $get_tgl['tahun'],
            'waktu_akad'        => $get_data['waktu_akad'],
            'tempat_akad'       => $get_data['tempat_akad'],
            'alamat_akad'       => $get_data['alamat_akad'],
            
            'hari_resepsi'      => $get_tgl_resepsi['hari'],
            'tgl_resepsi'       => $get_tgl_resepsi['tanggal'],
            'bulan_resepsi'     => $get_tgl_resepsi['bulan'],
            'tahun_resepsi'     => $get_tgl_resepsi['tahun'],
            'waktu_resepsi'     => $get_data['waktu_resepsi'],
            'tempat_resepsi'    => $get_data['tempat_resepsi'],
            'alamat_resepsi'    => $get_data['alamat_resepsi'],
            
            'hitung_mundur'     => str_replace("-","/",$get_data['tgl_akad'])." ".$get_data['waktu_akad'].":00",
            
            'nama_map'          => $get_data['nama_map'],
            'alamat_map'        => $get_data['alamat_map'],
            'link_map'          => $get_data['link_map'],
            
            'ucapan_kado'       => $get_data['ucapan_kado'],
            'no_rek_1'          => $get_data['no_rek_1'],
            'nama_rek_1'        => $get_data['nama_rek_1'],
            'no_rek_2'          => $get_data['no_rek_2'],
            'nama_rek_2'        => $get_data['nama_rek_2'],
            
            'pesan_cerita'      => $get_data['pesan_cerita'],

            'desain'            => $get_desain,
            'get_galeri'        => $get_galeri,
            'url_galeri'        => $url_galeri,
        ];

        return view('layout/undangan_ola_template',$data);
    }

    public function datasegmen($nama ='', $data2 =''){
        echo "KOntroler Ambil Data Segmen: ". $nama. $data2;
    }

    public function dataplaceholder($data1 ='', $data2 =''){
        echo "KOntroler Ambil Data placeholder router: ". $data1. $data2;
    }
}
