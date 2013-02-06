<?php

class Application extends AppModel{
    var $name='Application';
     var $useTable='applications';
     
     function get_application(){
return $this->find('all');
}
}

?>
