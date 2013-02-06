<?php
    
 class Category Extends AppModel{
     
     
     var $name='Category';
     var $useTable='categories';
     
     function get_category(){
return $this->find('all');
}
  
 }


?>
