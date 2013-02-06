<?php

    //pr($brand);
    
    $app=$application['Application']['name'];
    $id='edit_application/'.$application['Application']['id'];
    echo $this->Form->create('Application',array('url'=>array('controller'=>'admin_products','action'=>$id),'enctype' => 'multipart/form-data'));

    echo $this->Form->input('Cnewapplication',array('label'=>'Edit Application','value'=>$app));
   
    echo $this->Form->end(array('label'=>'Update','value'=>'update'));

?>