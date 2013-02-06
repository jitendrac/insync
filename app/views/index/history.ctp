<script src="http://cdn.webrupee.com/js" type="text/javascript"></script>
<div class="contain">

<div class="side-nav">
<ul>
 <li><?php echo $this->Html->link('Insync Touch Points', array('controller' => 'indexs', 'action' => 'touchpoints'), array('escape' => false)); ?>
</li>
<li><?php echo $this->Html->link('Evolution Of Insync', array('controller' => 'indexs', 'action' => 'evolution'), array('escape' => false)); ?>
</li>
<li><?php echo $this->Html->link('Why Insync', array('controller' => 'indexs', 'action' => 'why_insync'), array('escape' => false)); ?>
</li>
<li><?php echo $this->Html->link('Team', array('controller' => 'indexs', 'action' => 'team'), array('escape' => false)); ?>
</li>
<li><?php echo $this->Html->link('Facility', array('controller' => 'indexs', 'action' => 'facility'), array('escape' => false)); ?>
</li>
<li><?php echo $this->Html->link('Show Rooms', array('controller' => 'indexs', 'action' => 'showrooms'), array('escape' => false)); ?>
</li>
 <div class="current">
<li><?php echo $this->Html->link('History', array('controller' => 'indexs', 'action' => 'history'), array('escape' => false)); ?>
</li>
 </div>
</ul>
</div>
<div class="content">
<div class="content-header">
<h1>Safe Group</h1>
</div>
<div class="content-text">

</div>
</div>

<div class="sidebar">
<?php echo $this->element('fixture'); ?>




</div> 
</div> 
<div class="clear"></div>

