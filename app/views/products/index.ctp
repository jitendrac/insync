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
               
              // pr($cat);
               if($cat['Category']['subcategory']==null){
            echo "<li>";
            echo $this->Html->link($cat['Category']['category'], array('controller' => 'products', 'action' => 'index', $cat['Category']['id']), array('update' => 'content'));
            echo "</li>";
               }
               else
               {
                   echo "<li>";
            echo $this->Html->link($cat['Category']['subcategory'], array('controller' => 'products', 'action' => 'index', $cat['Category']['id']), array('update' => 'content'));
            echo "</li>";
               }

        }
        echo "</ul>";
        ?>




        </div>
<div class="content">
   
        <div class='series-product'>
         <?php
if(isset($error)){
            
    ?>
            <div class="project-display">
                <div class="project-name">Syntrack</div>
                <div class="project-list">
                   <?php  echo $this->Html->image("brands/syntrack.jpg",array('alt'=>'syntrack','url'=>array('controller'=>'products','action'=>'sytrack'))); ?>
                </div>
            </div>   
            <div class="project-display">
                <div class="project-name">Rail</div>
                <div class="project-list">
                     <?php  echo $this->Html->image("brands/rail.jpg",array('alt'=>'rail','url'=>array('controller'=>'products','action'=>'rail'))); ?>
                </div>
            </div>
            <div class="project-display">
                <div class="project-name">P 40</div>
                <div class="project-list">
                    <?php  echo $this->Html->image("brands/p40.jpg",array('alt'=>'P40','url'=>array('controller'=>'products','action'=>'post40'))); ?>
                </div>
            </div>
            <div class="project-display">
                <div class="project-name">T 40</div>
                <div class="project-list">
                    <?php  echo $this->Html->image("brands/t40.jpg",array('alt'=>'T40','url'=>array('controller'=>'products','action'=>'t40'))); ?>
                </div>
            </div>
            <div class="project-display">
                <div class="project-name">Safe Retail</div>
                <div class="project-list">
                    <?php  echo $this->Html->image("brands/safe.jpg",array('alt'=>'T40','url'=>array('controller'=>'products','action'=>'saferetail'))); ?>
                </div>
            </div>
    
    <?php
        }
        else{
        $resultCount = count($products);
        
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
            $big_image=$product_images[0];
             $product_id=$products[$count]['Product']['id'];
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
</div>
     <div class="sidebar">

        <?php echo $this->element('fixture'); ?>





</div>


<div class="clear"></div>