<?php
/**
 * @package ImpressPages
 *
 *
 */
namespace Modules\standard\content_management;

class Manager{
     
    function manage(){
        header('location: ' . BASE_URL.'?cms_action=manage');
        exit();
    }
}

