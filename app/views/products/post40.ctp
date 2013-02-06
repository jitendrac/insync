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
            echo $this->Html->link($cat['Category']['category'], array('controller' => 'products', 'action' => 'post40', $cat['Category']['id']), array('update' => 'content'));
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
            <div class="album1"> P 40 </div>
                    <div class="band1">Evolve spaces into commercially viable
                        & unique retail experience along with us.</div>
                </div>
    </div>
    <?php if(empty($category_name)){ ?>
        
        <div class="content-text">
       <p> Due to high volume of footfalls, large format stores require display solutions that 
can carry large stocks. INSYNC Post 40 is robust to hold maximum weight, with a 
distance standardization of 600/900/1200 between two posts. </p>
       <p><b>Decorative Panels? Backlighting? Seasonal changes? </b></p><p>Post 40 lets you design your 
store walls to suit your individual concept, need and style. This highly versatile 
product can be covered with decorative side panels of glass, leather and metal to 
create a stylist look, or can be left open for a rugged look.
       Post 40 also allows 
acrylic panelling and backlighting for in-store branding.</p>
 <p>INSYNC's copyright protected corner joints make sizeable accessories like 
hanger bars or cross bars modular, thereby minimising packaging, transport and 
storage costs. The design of Post 40 is seamless with no visible screwing, to 
ensure better aesthetics. </p>

<p>Post 40 comes in four variants: <b>Basic, Classic, Neo and Struc.</b>  </p>

<p><b>Basic </b></p>
<p>Basic Post 40 is developed to answer the need of denim and casual wear 
retailers. It boasts of double slotted pipes to give a much stronger hold. 
Open post, coupled with metal or wooden shelves, creates a very 
rugged look. So, Basic Post 40 not only imparts a youthful ruggedness to 
the interiors of the store, but also easily holds huge stock loads on its 
shelves. </p>
<p><b>Recommended for:</b> Display of Jeans and casual wear, all weather shoes, 
etc </p>
<p><b>Classic </b></p>
<p>The USP of Classic Post 40 is its cost-effective versatility. It allows using 
back panels of different materials and finishes along with powder coated 
accessories & a choice of glass or wooden rectangular shelves. As Post 40 
Classic is robust to allow more products stocking on its shelves, it is an 
ideal solution for large format stores were stockpile is of utmost 
importance. Its back panels can be easily changed to complement the 
mood of the store or season and to enhance aesthetics. </p>
<p><b>Recommended for:</b> Value for money formats, discount clothing stores, 
departmental stores, CDIT & electronics stores </p>
<p><b>Neo</b></p>
<p>Neo, simply put, is the INSYNC EXCLUSIVE. It is the perfect 
eye catching solution for drawing customers to a product 
category. Neo's copy right protected curved and angled 
shelves of wood and glass are attention grabbers that enhance 
merchandise presentation multi-fold. Neo uses Post 40 
platform and copy right protected Aluminium accessories used 
in Syntrack and Rail. Aluminium accessories enhance the look, 
while friction protection strip reduces the wear and tear and 
ensures longevity. </p>
<p><b>Recommended for:</b>MBOs and Departmental stores, home 
and bath wear stores, gifts and stationary stores, etc  </p>
<p><b>Struc</b></p>
<p>INSYNC Struc allows the retailers to create different 
structures to suit their specific retail needs. It can be used to 
form niches like partitions, cabinets and focal points to create 
divisions of merchandise categories within a store. Structures 
can be created in a combination of wood, glass, acrylic or 
metal shelves, depending on the retailer's specific display need. 
Struc is based on the Post 40 slotted pipe profile; but it can 
also be used in sync with other INSYNC product lines, such 
as Syntrack & Rail, to create unique display solutions. </p>
<p><b>Recommended for:</b> Stores selling clothes, jewellery, shoes, 
gifts, etc 

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
            echo "<div class='product-display'>";
            echo "<div class='product-name'>";
             //echo $this->Html->link('slideshow', "../img/"."projects/" . $projects['Project']['project_url'] ."/". $big_image,array('escape' => false,'class'=>'group4'));
           // echo $this->Html->link($products[$count]['Product']['title'],"../img/"."products/" . $products[$count]['Product']['product_url'] ."/". $big_image,array('escape' => false,'class'=>'group4'));
            echo $products[$count]['Product']['title'];
            echo "</div>";
            echo "<div class='product-image'>";
//            $product_image=$products[$count]['Product']['image'];
//           
//            $product_images = explode(',', $product_image);
//            $small_image=$product_images[1];
//            $big_image=$product_images[0];
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