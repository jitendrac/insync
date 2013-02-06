<?php

class Brand extends AppModel{
    var $name='Brand';
    
   var $useTable='brands';
    
    function get_brand(){
    return $this->find('all');
}
   
}

?>