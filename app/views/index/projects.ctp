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
       <?php
        //pr($projects);
        //pr($sec_name);
        //pr($sector_name);
        $resultCount = count($projects);
        
        for ($count = 0; $count < $resultCount; $count++) {

            echo "<div class='project-display'>";
            echo "<div class='project-name'>";
           
            echo $projects[$count]['Project']['name'];
            
            echo "</div>";
            echo "<div class='project-list'>";
            $project_id=$projects[$count]['Project']['id'];
            
             echo $this->Html->image("projects/" . $projects[$count]['Project']['project_url'] ."/". "1.jpg",array("width"=>"220",array('escape' => false),'url' => array('controller' => 'projects', 'action' =>'index',$project_id)));
            //echo $this->Html->image("projects/" . $projects[$count]['Project']['project_url'] ."/". "1.jpg",array("width"=>"300","height"=>"240",array('escape' => false),'url' => ("../img/"."projects/" . $projects[$count]['Project']['project_url'] ."/". "1.jpg")));
            //echo $this->Html->link('slideshow', "../img/"."projects/" . $projects[$count]['Project']['project_url'] ."/". "1.jpg",array('escape' => false,'class'=>'group4'));
           
            
            echo "</div>";
            echo "</div>";
        }
          ?>


    </div>
</div>
    <div class="sidebar">

        <?php echo $this->element('fixture'); ?>





    </div>
<div class="clear"></div>






<!--
<p><a class="group4"  href="../img/projects/jadeblue/3.jpg" title="Me">Grouped Photo 1</a></p>
 
    <p><a class="group4"  href="../img/projects/jadeblue/4.jpg" title="me111" > Grouped Photo 2</a></p>
    <p><a class="group4"  href="../img/projects/jadeblue/5.jpg" title="me2222222">Grouped Photo 3</a></p>

      
            <?php 
            
//echo $this->Html->image('projects/jadeblue/1.jpg',array("width"=>"300","height"=>"240",'class'=>'group4','url' => array('controller' => 'index', 'action' => 'projects/index',$project_id)));
echo $this->Html->link('test', '../img/projects/jadeblue/1.jpg',array('escape' => false,'class'=>'group4'));
//echo $this->Html->link('test', '../img/projects/jadeblue/1.jpg',array('escape' => false,'class'=>'group4'));

        
          

?>

-->