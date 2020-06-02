<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Module_user_register
 *
 * @author akshayn
 */ 
class Module_user_register extends CI_Model {

    
    public function checkUserLogin(){
        $data = $this->db->select('*')->from('tblUser') 
            ->where('USERNAME',$this->input->post('user_name'))
            ->where('PASSWORD',$this->input->post('user_password'))
            ->get();
        
     return ($data->num_rows()) ? $data->row_array() : array() ;
      /*$getData = $this->db->select("B.PREFIX,B.FNAME,B.LNAME")->from(CLIENT." as C")
             ->join(CLIENTBROKER . " AS CB", "C.CLIENT_ID = CB.CLIENT_ID", "LEFT") 
            ->join(CLIENTREFER . " AS CR", "CB.CLIENT_ID = CR.CLIENT_ID", "LEFT")
            ->join(BROKER . " AS B", "CB.BROKER_ID = B.BROKER_ID", "LEFT")
            ->where('C.CLIENT_ID',$clientId)
            ->get();  */
    }
    
    public function saveUser($insert) {
        
      return $this->db->insert('tblUser', $insert);
    }
}
