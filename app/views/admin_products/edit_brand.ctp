<?php

    //pr($brand);
    
    $bra=$brand['Brand']['name'];
    $id='edit_brand/'.$brand['Brand']['id'];
    echo $this->Form->create('Brand',array('url'=>array('controller'=>'admin_products','action'=>$id),'enctype' => 'multipart/form-data'));

    echo $this->Form->input('Cnewbrand',array('label'=>'Edit Brand','value'=>$bra));
   
    echo $this->Form->end(array('label'=>'Update','value'=>'update'));

?>