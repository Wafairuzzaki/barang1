<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class madmin extends CI_Model{
    
    
    function __construct() {
        parent::__construct();
    }
    
    function simpan($user, $pass){   
    $data = array(
        'user'=>$user,
        'pass'=>$pass
    );    
    $query = $this->db->insert('admin', $data);
    
    return $query;
    }
    
    function tampilkan(){
         
        $query = $this->db->get('admin');
        return $query->result();    
        
    }
    
    function get_by_id($id){
        $this->db->where('id', $id);
        $query = $this->db->get('admin');
        return $query->result();   
        
    }
    
    function hapus($id){
        $this->db->where('id', $id);
        $query = $this->db->delete('admin');
        return $query;
    }
    
    
    function perbarui($id, $user, $pass){
     $data = array(
        'user'=>$user,
        'pass'=>$pass,

    );      
        $this->db->where('id', $id);
        return $this->db->update('admin', $data); 
    
    }
    
    
}
