<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of iniciocontrolador
 *
 * @author DELL
 */
class iniciarControlador {
    //put your code here
    //private $modelo;

    public function __construct() {
        //$this->modelo=new producto();
        
        
    } 
    public function biografia() {
        
  
        require_once 'vistas/encabezado.php';
        require_once 'vistas/biografia.php';
        require_once 'vistas/pie.php'; 
    }
    public function fotos() {
        
  
        require_once 'vistas/encabezado.php';
        require_once 'vistas/fotos.php';
        require_once 'vistas/pie.php'; 
    }


}