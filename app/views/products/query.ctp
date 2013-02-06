<script>
                        $(document).ready(function(){

$(".group4").colorbox({rel:'group4'});
                        });
</script> 

      
     <div class="side-nav">
            <?php
            
      echo "<h1>";
          echo  "Product Category";
            echo "</h1>";
       $resultCount = count($products);
       
            if($resultCount!= 0)
        {
            
       
            
        echo "<ul>";
          
        
           foreach ($category as $cat) {
            echo "<li>";
            //echo $this->Html->link($cat['Category']['category'], array('controller' => 'products', 'action' => 'category_query', $cat['Category']['category'],), array('update' => 'content'));
            //echo "</li>";
            echo $this->Html->link($cat['Category']['category'], array('controller' => 'products', 'action' => 'query_category', $cat['Category']['category'],$sec_id,$app_id,$wei_id),array('update' => 'content'));
            echo "</li>";
           
        }
}
        echo "</ul>";
        ?>
        </div>
    <div class="content">
    <div class='series-product'>
       <?php
       //pr($app_id);
 //pr($sec_id);
//pr($wei_id);
       //pr($s);
       //pr($w);
        //pr($i);
        //pr($products);
        //pr($browsers);
        $resultCount = count($products);
        
        if($resultCount!= 0)
        {
            
        for ($count = 0; $count < $resultCount; $count++) {
            $product_image=$products[$count]['Product']['image'];
           
            $product_images = explode(',', $product_image);
            $small_image=$product_images[1];
            $big_image=$product_images[0];
            echo "<div class='product-display'>";
            echo "<div class='product-name'>";
            //echo $this->Html->link($products[$count]['Product']['title'],"../img/"."products/" . $products[$count]['Product']['product_url'] ."/". $big_image,array('escape' => false,'class'=>'group4'));
            echo $products[$count]['Product']['title'];
            echo "</div>";
            echo "<div class='product-image'>";
            $product_image=$products[$count]['Product']['image'];
           
            $product_images = explode(',', $product_image);
            $small_image=$product_images[1];
            
            
            echo $this->Html->link($this->Html->image("products/" . $products[$count]['Product']['product_url'] ."/small/". $small_image,array("width"=>"","height"=>"")),"../img/"."products/" . $products[$count]['Product']['product_url'] ."/". $small_image,array('class'=>'group4','escape' => false));
            //echo $this->Html->image("products/" . $products[$count]['Product']['product_url'] ."/". $small_image,array("width"=>"180","height"=>"240"));
            echo "</div>";
            echo "</div>";
        }
        }
        else
        {
           
           
         echo "No fixtures Found";
        }
          ?>
        
        
         </div>
    </div> 
    
    
    <div class="sidebar">
    
        <?php echo $this->element('fixture'); ?>

    
    
    
    
</div>
      


<div class="clear"></div>



 