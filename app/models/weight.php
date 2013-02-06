<?php
    
 class Weight Extends AppModel{
     
     
     var $name='Weight';
     var $useTable='weights';
     
     function get_weight(){
return $this->find('all');
}
     
 }


?>