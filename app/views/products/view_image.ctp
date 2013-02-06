<?php

//pr($products);
 $product_image=$products[0]['Product']['image'];
           
            $product_images = explode(',', $product_image);
            //$small_image=$product_images[1];
            $big_image=$product_images[0];

 echo $this->Html->image("products/" . $products[0]['Product']['product_url'] ."/". $big_image);

 //echo $this->Html->image("products/" . $products[$count]['Product']['product_url'] ."/". $small_image,array("width"=>"180","height"=>"240",'url' => array('controller' => 'products', 'action' => 'view_image',$product_id)));
?>
