<div class="container">


    <div id="slider-wrap">
        <ul id="slider1">
            <li>
                <div class="left">
                    <?php echo $this->Html->image('slider/1.gif', array('alt' => 'slider1')); ?>  

                </div>
                <div class="right">
                    <div class="album"> T40</div>
                    <div class="band">Evolve spaces into commercially viable
                        & unique retail experience along with us.</div>
                </div>
            </li>

            <li>
                <div class="left">
                    <?php echo $this->Html->image('slider/2.gif', array('alt' => 'slider2')); ?> 

                </div>
                <div class="right">
                    <div class="album">Syntrack</div>
                    <div class="band">Evolve spaces into commercially viable
                        & unique retail experience along with us.</div>
                </div>

            </li>
            <li>
                <div class="left">
                    <?php echo $this->Html->image('slider/3.gif', array('alt' => 'slider3')); ?> 

                </div>
                <div class="right">
                    <div class="album">Syntrack</div>
                    <div class="band">Evolve spaces into commercially viable
                        & unique retail experience along with us.</div>

                </div>
            </li>
            <li>
                <div class="left">
                    <?php echo $this->Html->image('slider/4.gif', array('alt' => 'slider4')); ?> 

                </div>
                <div class="right">
                    <div class="album">Rail</div>

                    <div class="band">Evolve spaces into commercially viable
                        & unique retail experience along with us.</div>
                </div>
            </li>
            <li>
                <div class="left">
                    <?php echo $this->Html->image('slider/5.gif', array('alt' => 'slider5')); ?> 

                </div>
                <div class="right">
                    <div class="album">Syntrack</div>

                    <div class="band">Evolve spaces into commercially viable
                        & unique retail experience along with us.</div>
                </div>
            </li>
            
            <li>
                <div class="left">
                    <?php echo $this->Html->image('slider/6.gif', array('alt' => 'slider5')); ?> 

                </div>
                <div class="right">
                    <div class="album">Syntrack</div>

                    <div class="band">Evolve spaces into commercially viable
                        & unique retail experience along with us.</div>
                </div>
            </li>
        </ul>
    </div>
    <div id="fixture-wrap">
        <div id="fixture-box">
            <?php echo $this->Html->image('fix-assist.png', array('alt' => 'partner with us4', array("class" => "left"))); ?>  
            <div class="left">Advanced assistance to help you <br/> select fixtures as per your needs</div>
           <!-- <form>
                <input class="fixture-input" type="text" value="Sector"/>
                <input class="fixture-input" type="text" value="Use On"/>
                <input class="fixture-input" type="text" value="Weight"/>
                <input class="fixture-submit" type="submit" value="Find Fixture" />
            </form>  
           -->
           
            <?php 
 //echo $this->Form->create('Insert', array('url' => array('controller' => 'products', 'action' => 'query',), 'enctype' => 'multipart/form-data'));

 echo $this->Form->create('Product', array('name' => 'find-fixture', 'url' => array('controller' => 'products', 'action' => 'query',), 'enctype' => 'multipart/form-data')); 
 
echo $this->Form->select('sector', $secs,'1', array('escape'=>false,'empty'=>'sector','div' => 'fixture-select','class'=>'fixture-input', 'error' => array(
                    'wrap' => 'div','value'=>'find fixture',
                    'class' => 'formerror'
                    )));
echo $this->Form->select('application', $apps, '1', array('escape'=>false,'empty'=>'application','div' => 'fixture-select','class'=>'fixture-input', 'error' => array(
                    'wrap' => 'div',
                    'class' => 'formerror'
                    )));
echo $this->Form->select('weight', $weis, '1', array('escape'=>false,'empty'=>'capacity','div' => 'fixture-select','class'=>'fixture-input', 'error' => array(
                    'wrap' => 'div',
                    'class' => 'formerror'
                    )));


?>		
 <?php
 //echo $this->Form->input('submit',array('value'=>'find fixture','class'=>'fixture-submit'));
            echo $this->Form->end('find-fixture',array('class'=>'fixutre'));
               ?>
        
           
           
           
        </div>
        <div id="partner-box">
            <?php echo $this->Html->image('partner-gray.png', array('alt' => 'partner ', array("class" => "left"))); ?>  

            <div class="left clear">
                Evolve spaces into commercially viable<br/> & unique retail experience along with us.</div>
        </div>
        <div id="video-box">
<iframe width="251" height="170" src="http://www.youtube.com/embed/tyLVJ0w-TBg" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="clear"></div>
    </div>
</div>














