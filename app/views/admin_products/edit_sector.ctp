<?php

    //pr($brand);
    
    $sec=$sector['Sector']['name'];
    $id='edit_sector/'.$sector['Sector']['id'];
    echo $this->Form->create('Sector',array('url'=>array('controller'=>'admin_products','action'=>$id),'enctype' => 'multipart/form-data'));

    echo $this->Form->input('Cnewsector',array('label'=>'Edit Sector','value'=>$sec));
   
    echo $this->Form->end(array('label'=>'Update','value'=>'update'));

?>