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
    'pesan_cerita'];

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
}