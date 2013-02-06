<script>
                        $(document).ready(function(){

$(".group4").colorbox({rel:'group4'});
                        });
</script>
<div class="side-nav">
            
            <h1> Product Category </h1>
             <?php
        echo "<ul>";
       
        
         
             //pr($products);
            // $resultCount = count($products);
           
         
           foreach ($category as $cat) {
            echo "<li>";
            echo $this->Html->link($cat['Category']['category'], array('controller' => 'products', 'action' => 'rail', $cat['Category']['id']), array('update' => 'content'));
            echo "</li>";
            
        }
        echo "</ul>";
        ?>
  
      
        
        
        </div>
    
    
    
    
<div class="content">
     <div class='series-static'>
       <div class='series-image'>
          <?php echo $this->Html->image('pitchfourty.jpg', array('alt' => 'logo')); ?>  
       </div>
       
       <div class='series-text'>
            <div class="album1"> Rail </div>
                    <div class="band1">Evolve spaces into commercially viable
                        & unique retail experience along with us.</div>
                </div>
     </div>
    <?php if(empty($category_name)){ ?>
         <div class="content-text">
      
<p>Insync Rail is the cost-effective answer for those who want the 
rich look of Aluminium to enhance the value of their store. </p>
<p>Rail is Aluminium based system that uses same accessories as 
Syntrack. Friction resistant outer and inner strips on the 
accessories reduce the damage caused by the hangers & 
increase the life of the display system. </p>
<p>Rail is a vibrant system with an option of insert able coloured 
strips that can be easily changed to match existing store 
environment or to create a new happy look. The coloured 
strips also conceal the screws. Rail is ideal for stores that want 
colourful and catchy display to attract their customers. </p>
 <p><b>Recommended for: </b> EBOs, boutiques, ladies wear shops, kids 
wear shops </p>

         </div>
         
       <?php } ?>
       <div class='series-product'>
   
    
   
     
           <?php
        if(isset($error)){
            echo $error;
        }
        else{
        $resultCount = count($products);
        
        for ($count = 0; $count < $resultCount; $count++) {
            $product_image=$products[$count]['Product']['image'];
           
            $product_images = explode(',', $product_image);
            $small_image=$product_images[1];
            $big_image=$product_images[0];
             $product_id=$products[$count]['Product']['id'];
            echo "<div class='product-display'>";
            echo "<div class='product-name'>";
            //echo $this->Html->link($products[$count]['Product']['title'],"../img/"."products/" . $products[$count]['Product']['product_url'] ."/". $big_image,array('escape' => false,'class'=>'group4'));
            echo $products[$count]['Product']['title'];
            echo "</div>";
            echo "<div class='product-image'>";
            
            //$big_path="products/" . $products[$count]['Product']['product_url'] ."/". $big_image;
             //echo $this->Html->image("products/" . $products[$count]['Product']['product_url'] ."/". $small_image,array("width"=>"180","height"=>"240",'url' => array('controller' => 'products', 'action' => 'view_image',$product_id)));
             echo $this->Html->link($this->Html->image("products/" . $products[$count]['Product']['product_url'] ."/small/". $small_image,array("width"=>"","height"=>"")),"../img/"."products/" . $products[$count]['Product']['product_url'] ."/". $small_image,array('class'=>'group4','escape' => false));
             //echo $this->Html->image("products/" . $products[$count]['Product']['product_url'] ."/". $small_image,array("width"=>"180","height"=>"240",'#'=>'destination','id'=>'add'));
            
 //echo $this->Html->link('#', $this->Html->image("products/" . $products[$count]['Product']['product_url'] ."/". $small_image,array("width"=>"180","height"=>"240"),"#",array('escape' => false)));
            
           
            
            echo "</div>";
            echo "</div>";
        }}
          ?>
          
          
        
        
        
        
        
     </div>
    <div class="pagination"> 
        <?php echo $this->Paginator->prev('Prev', array(), null, array('class' => 'prev disabled')); ?>   
        ||
        <?php echo $this->Paginator->numbers(array('first' => 'First page')); ?>                
        ||
        <?php echo $this->Paginator->next('Next', array(), null, array('class' => 'next disabled')); ?>
    </div>
</div>
     <div class="sidebar">
    
        <?php echo $this->element('fixture'); ?>

    
    
    
    
</div>
 
  
<div class="clear"></div>







