<?php

    //pr($category);

    $cat=$category['Category']['category'];
    $cat_unique=$category['Category']['unique_name'];
    //pr($cat_unique);
    $id='edit_category/'.$category['Category']['id'];
    echo $this->Form->create('Category',array('url'=>array('controller'=>'admin_products','action'=>$id),'enctype' => 'multipart/form-data'));

    echo $this->Form->input('Cnewcategory',array('label'=>'Edit Category       ','value'=>$cat));
    echo "<br />";
    echo "<br />";
    echo "<br />";
    
       echo $this->Form->input('Cnewcategory_unique',array('label'=>'Edit Category Unique name       ','value'=>$cat_unique));
    echo $this->Form->end(array('label'=>'Update','value'=>'update'));

?>