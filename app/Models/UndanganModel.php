<?php

namespace App\Models;

use CodeIgniter\Model;

class UndanganModel extends Model
{
    // ...
    protected $table      = 'undangan_setting';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_pasangan',
        'slug',
        'nama_lengkap_pp',
        'nama_lengkap_pw',
        'nama_ayah_pp',
        'nama_ibu_pp',
        'nama_ayah_pw',
        'nama_ibu_pw',
        'kata_pembukaan',
        'tgl_akad',
        'tempat_akad',
        'alamat_akad',
        'waktu_akad',
        'tgl_resepsi',
        'waktu_resepsi',
        'tempat_resepsi',
        'alamat_resepsi',
        'nama_map',
        'alamat_map',
        
        'link_map',
        'ucapan_kado',
        'no_rek_1',
        'type_rekening_1',
        'nama_rek_1',
        'no_rek_2',
        'type_rekening_2',
        'nama_rek_2',
        'pesan_cerita'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public function get_undangan($id = false){

        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(
            [
                'slug'=>$id
            ]
        )->first();
    }

    public function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
        // return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];

        // ========== HARI EN to INDO ==============
        // dd($tanggal);
        $hari = date("D" ,strtotime($tanggal));
        // dd($hari);

        switch($hari){
            case 'Sun':
                $hari_ini = "Minggu";
            break;
    
            case 'Mon':			
                $hari_ini = "Senin";
            break;
    
            case 'Tue':
                $hari_ini = "Selasa";
            break;
    
            case 'Wed':
                $hari_ini = "Rabu";
            break;
    
            case 'Thu':
                $hari_ini = "Kamis";
            break;
    
            case 'Fri':
                $hari_ini = "Jumat";
            break;
    
            case 'Sat':
                $hari_ini = "Sabtu";
            break;
            
            default:
                $hari_ini = "Tidak di ketahui";		
            break;
        }

        $data = array(
            'tanggal' => $pecahkan[2], 
            'bulan_a' => $pecahkan[1], 
            'bulan' => $bulan[ (int)$pecahkan[1] ], 
            'tahun' => $pecahkan[0], 
            'hari'  => $hari_ini, 
        );

        // dd($data);

        return json_encode($data);
    }

    public function get_desain($kode_pasangan =''){

        $get_desain = $this->db->table('undangan_desain')
        ->where('kode_pasangan', $kode_pasangan)
        ->get()
        ->getResultArray()
        ;

        // dd($get_desain[0]['cover_depan']);
        
        $url    = 'https://svendor.zeeid.net/desain/';

        $data = [
            'cover_depan'           => $url.$get_desain[0]['cover_depan'], 
            'hiasan_depan'          => $url.$get_desain[0]['hiasan_depan'], 
            'cover_dalam'           => $url.$get_desain[0]['cover_dalam'], 
            'logo_depan'            => $url.$get_desain[0]['logo_depan'], 
            
            'hiasan_atas'           => $url.$get_desain[0]['hiasan_atas'], 
            'hiasan_bawah'          => $url.$get_desain[0]['hiasan_bawah'], 
            
            'pengantin_p'           => $url.$get_desain[0]['pengantin_p'], 
            'pengantin_w'           => $url.$get_desain[0]['pengantin_w'], 
            'background_musik'      => $url.$get_desain[0]['background_musik'], 
            
            'file_cover_depan'      => $get_desain[0]['cover_depan'], 
            'file_hiasan_depan'     => $get_desain[0]['hiasan_depan'], 
            'file_cover_dalam'      => $get_desain[0]['cover_dalam'], 
            'file_logo_depan'       => $get_desain[0]['logo_depan'], 
            
            'file_hiasan_atas'      => $get_desain[0]['hiasan_atas'], 
            'file_hiasan_bawah'     => $get_desain[0]['hiasan_bawah'], 
            
            'file_pengantin_p'      => $get_desain[0]['pengantin_p'], 
            'file_pengantin_w'      => $get_desain[0]['pengantin_w'], 
            'file_background_musik' => $get_desain[0]['background_musik'], 
        ];

        // $data = [
        //     'cover_depan' => '2819-2959_pen.jpg', 
        //     'hiasan_depan'=> 'penerima_frame3.png', 
        //     'cover_dalam' => '3152-2959_cov.jpg', 
        //     'logo_depan'  => 'rumah.png', 
            
        //     'hiasan_atas' => 'top_r.png', 
        //     'hiasan_bawah'=> 'bottom_l.png', 
            
        //     'pengantin_p' => '2819-2959_l.jpg', 
        //     'pengantin_w' => '2819-2959_p.jpg', 
        // ];

        return $data;
    }
    
    public function get_tamu($nama_tamu =''){

        $get_tamu = $this->db->table('undangan_tamu')
        ->where('nama_tamu', $nama_tamu)
        ->get()
        ->getResultArray()
        ;
        
        $jml_tamu = $this->db->table('undangan_tamu')
        ->where('nama_tamu', $nama_tamu)
        ->countAllResults()
        ;

        // dd($jml_tamu);
        if ($jml_tamu == 0) {
            $data = array(
                'status'    => 201, 
                'pesan'     => "Tamu ".$nama_tamu." tidak ditemukan",
            );
            echo json_encode($data);
            die();
        }else{

            $data = [
                'id_tamu'     => $get_tamu[0]['id'], 
                'nama_tamu'   => $get_tamu[0]['nama_tamu'], 
                'alamat_tamu' => $get_tamu[0]['alamat_tamu'], 
                'no_wa'       => $get_tamu[0]['no_wa'], 
                'ucapan'      => $get_tamu[0]['ucapan'], 
            ];
    
            // dd($data);
    
            return $data;
        }

    }
    
    public function get_ucapan($kode_pasangan){

        $get_ucapan = $this->db->table('undangan_tamu')
        ->where('kode_pasangan', $kode_pasangan)
        ->where('ucapan !=', '')
        ->get()
        ->getResultArray()
        ;
        
        // dd($get_ucapan);
        
        return $get_ucapan;
    }
}