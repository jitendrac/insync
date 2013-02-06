<?php

class Project extends AppModel{
    var $name='Project'; 
    var $useTable = "projects";
       
     var $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'This field cannot be left blank'
        ));
    function insert($data)
    {
        
        $this->save($data);
    }
}

?>
