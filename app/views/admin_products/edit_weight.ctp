<?php

   // pr($weight);
    
    $wei=$weight['Weight']['name'];
    $id='edit_weight/'.$weight['Weight']['id'];
    echo $this->Form->create('Weight',array('url'=>array('controller'=>'admin_products','action'=>$id),'enctype' => 'multipart/form-data'));

    echo $this->Form->input('Cnewweight',array('label'=>'Edit Weight','value'=>$wei));
   
    echo $this->Form->end(array('label'=>'Update','value'=>'update'));

?>