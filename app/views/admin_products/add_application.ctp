<script type="text/javascript"><!--
$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
			$('#add-application').colorbox({inline:true,href:"#category-box"});

});
//--></script>

<div class="box">
    <div class="heading">
        <h1>Applications</h1>
        <div class="buttons">

            <a href="#" id="add-application"> add </a>
    </div></div>

    <div class="content">
        <table id="candidatetable"class="list">
            <thead>
                <tr>
                    <td class="left">Application</td>
                    <td class="right">Edit</td>
                    <td class="right">Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($apps as $id => $app) {
                ?>
                    <tr>
                        <td class="left"> <?php echo $app ?></td>
                        <td class="right"><?php echo $this->Html->link('Edit', array('controller' => 'admin_products', 'action' => 'edit_application', $id)); ?></td>
                        <td class="right"><?php echo $this->Html->link('Delete', array('controller' => 'admin_products', 'action' => 'delete_application', $id)); ?> </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div style="display:none">
<div id="category-box">
<?php
                echo $this->Form->create(null, array('url' => array('controller' => 'admin_products', 'action' => 'add_application',), 'enctype' => 'multipart/form-data'));
?>
                <table class="form">
                    <tr>
                        <td>New Application </td>
                        <td> <?php
                echo $this->Form->input('newapplication', array('label' => false, 'div' => false));
                echo $this->Form->end(array('label' => 'Add', 'value' => 'add', 'div' => false));
?> </td>
    </tr>
</table>
</div>
</div>
 

