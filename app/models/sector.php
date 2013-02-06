<?php
    
 class Sector Extends AppModel{
     
     
     var $name='Sector';
     var $useTable='sectors';
     
     function get_sector(){
return $this->find('all');
}
     
 }


?>
