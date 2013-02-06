<?php

class Product extends AppModel{
    var $name='Product'; 
    var $useTable = "products";
       
     var $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message' => 'This field cannot be left blank'
        ));
    function insert($data)
    {
        
        $this->save($data);
    }
}

?>
