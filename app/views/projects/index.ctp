<script>
                        $(document).ready(function(){

$(".group4").colorbox({rel:'group4'});
                        });
</script>


    <div class="side-nav">

        <h1> Sectors </h1>
        
 <?php
        echo "<ul>";
       
        
         
             //pr($products);
             //pr($category);
            // $resultCount = count($products);
           
         
           foreach ($sector as $sec) {
            echo "<li>";
            echo $this->Html->link($sec['Sector']['name'], array('controller' => 'indexs', 'action' => 'projects', $sec['Sector']['id']), array('update' => 'content'));
            echo "</li>";
            
        }
        echo "</ul>";
        ?>




    </div>
<div class="content">
    <div class='product'>
       <?php //pr($projects); 
           
       for ($i = 1; $i < 6; $i++)
            {
                  //echo $this->Html->link('slideshow', "../img/"."projects/" . $projects['Project']['project_url'] ."/". $i.".jpg",array('escape' => false,'class'=>'group4'));
                  echo "<div class='project-image'>";
                  //echo $this->Html->image("projects/" . $projects['Project']['project_url'] ."/".  $i.".jpg",array("width"=>"400","height"=>"240",array('escape' => false)));
                  echo $this->Html->link($this->Html->image("projects/" . $projects['Project']['project_url'] ."/".  $i.".jpg",array("width"=>"250",array('escape' => false))),"../img/"."projects/" . $projects['Project']['project_url'] ."/".  $i.".jpg",array('class'=>'group4','escape' => false));
                  echo "</div>";
                 
            }
       
       
       
       
       
       
       ?>
        <div class="clear"></div>
    </div>
</div>
    <div class="sidebar">

        <?php echo $this->element('fixture'); ?>
</div>
<div class="clear"></div>

