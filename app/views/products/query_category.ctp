<script>
                        $(document).ready(function(){

$(".group4").colorbox({rel:'group4'});
                        });
</script> 


      
     <div class="side-nav">
            
            <h1> Product Category </h1>
            <?php
        echo "<ul>";
      
       
       
           
            // $resultCount = count($products);
       
          
        
           foreach ($category as $cat) {
            echo "<li>";
            //echo $this->Html->link($cat['Category']['category'], array('controller' => 'products', 'action' => 'category_query', $cat['Category']['category'],), array('update' => 'content'));
            //echo "</li>";
             echo $this->Html->link($cat['Category']['category'], array('controller' => 'products', 'action' => 'query_category', $cat['Category']['category'],$sector_selected,$application_selected,$weight_selected),array('update' => 'content'));
            echo "</li>";
           
        }
        echo "</ul>";
        ?>
        </div>
    <div class="content">
  .
       <?php

//pr($category_selected);
//pr($sector_selected);
//pr($application_selected);
//
//pr($weight_selected);
//pr($app_name);
//pr($sec_name);
//pr($wei_name);
//pr($products);
$resultCount = count($products);
        for ($count = 0; $count < $resultCount; $count++) {
            $product_image=$products[$count]['Product']['image'];
           
            $product_images = explode(',', $product_image);
            $small_image=$product_images[1];
            $big_image=$product_images[0];
            echo "<div class='product-display'>";
            echo "<div class='product-name'>";
            echo $this->Html->link($products[$count]['Product']['title'],"../img/"."products/" . $products[$count]['Product']['product_url'] ."/". $big_image,array('escape' => false,'class'=>'group4'));
            //echo $products[$count]['Product']['title'];
            echo "</div>";
            echo "<div class='product-image'>";
           
            
            
            
            echo $this->Html->image("products/" . $products[$count]['Product']['product_url'] ."/". $small_image,array("width"=>"180","height"=>"240"));
            echo "</div>";
            echo "</div>";
        }
        ?>
    
    </div>
    <div class="sidebar">
    
        <?php echo $this->element('fixture'); ?>

    
    
    
    
</div>
  
<div class="clear"></div>




 




































