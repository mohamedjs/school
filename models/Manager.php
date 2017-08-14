<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manager
 *
 * @author Smart1
 */

include_once  'Staff.php';
class Manager extends Staff
{
    private $Ls;
    public function __construct() 
    {
        parent::__construct();
        $this->Ls;
    }
}
