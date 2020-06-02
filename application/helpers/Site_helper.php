<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of site_helper
 *
 * @author akshayn
 */
class Site_helper {
    
    function getBaseUrl(){
        
        return $this->config->item('base_url');
    }
}
