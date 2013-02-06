<div id="category-main" class="box">
    <div id="category_header" class="heading">
        <h1>Add New Administrator</h1>
        <div class="buttons">
            <a onclick="AdminAddadminForm.submit()">Save</a>
        </div>
    </div>
<div id="category_content" class="content">
<table class="form">
<?php echo $this->Form->create('Admin', array('action' => 'addadmin','name'=>'AdminAddadminForm'));?>

    <tbody><tr><td>Username</td>
            <td><?php echo $this->Form->input('name', array('label' => false));?></td>
        </tr>
        <tr><td>Password</td>
            <td><?php echo $this->Form->input('password', array('label' => false,'type'=>'password','value'=>''));?></td>
        </tr>
        <tr><td>Confirm Password</td>
            <td><?php echo $this->Form->input('repassword', array('label' => false,'type'=>'password','value'=>''));?></td>
        </tr>
        </tbody>
<?php echo $this->Form->end();
?>
</table>

</div>
</div>