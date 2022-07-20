<?php

namespace App\Controllers;

use App\Models\UndanganTamuModel;

class Tamu extends BaseController
{
    protected $UndanganTamuModel;
    public function __construct(){
        $this->UndanganTamuModel = new UndanganTamuModel();
    }
    
    public function index()
    {
        // echo "POS";
        // dd($this->request->getVar());
        
        $id_tamu = $this->request->getVar('id_tamu');
        
        $datanya = [
            'kehadiran'       => $this->request->getVar('kehadiran'),
            'ucapan'      => $this->request->getVar('ucapan'),
        ];

        $simpan = $this->UndanganTamuModel
        ->where('id', $id_tamu)
        ->set($datanya)
        ->update();
        
        if($simpan){
            echo "OKE";
        }else{
            echo "GAGAL";
        }
    }
    
    public function get_ucapan (){
        
        $kode_pasangan = 'MASTER99';
        // $kode_pasangan = $this->request->getVar('kode_pasangan');
        
        $get_ucapan = $this->db->table('undangan_tamu')
        ->where('kode_pasangan', $kode_pasangan)
        ->where('ucapan !=', '')
        ->get()
        ->getResultArray()
        ;
        
        ?>
            <table>
                                            
                <?php 
                    $row = json_encode($get_ucapan,true);
                    
                    
                    
                    
                    foreach ($get_ucapan as $ucapan) {
                    // while($row = $get_ucapan) {
                      ?>
                        <tr class="ucapan_tr">
                            <td class="user_ucapan"><?=$ucapan['nama_tamu'];?></td>
                            <td> &nbsp;&nbsp; </td>
                            <td class="font_ucapan"><?=$ucapan['ucapan'];?></td>
                        </tr>
                      
                      <?php
                    }
                ?>
                
            </table>
        <?php
        
    }

    
}
