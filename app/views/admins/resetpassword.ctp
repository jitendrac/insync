<div id="category-main" class="box">

<div class="heading" id="category_header">

        <h1>Reset Password</h1>
        <div class="buttons">
            <a onclick="AdminResetpasswordForm.submit()">Change</a>
        </div>
</div>
       <div class="content" id="category_content">
    <table class="form">
<?php
echo $this->Form->create('Admin',array('controller'=>'admins','action'=>'resetpassword','name'=>'AdminResetpasswordForm'));?>

        <tbody>
            <tr><td>Current Password</td>
                <td><?php echo $this->Form->input('current',array('label'=>false,'value'=>'','type'=>'password'));?></td>
            </tr>

            <tr><td>New Password</td>
                <td><?php echo $this->Form->input('new',array('label'=>false,'value'=>'','div'=>'formfield','type'=>'password'));?></td>
            </tr>
            
            <tr><td>Confirm Password</td>
                <td><?php echo $this->Form->input('confirm',array('label'=>false,'value'=>'','type'=>'password','div'=>'formfield'));?> </td>
            </tr>
            
<?php echo $this->Form->end();?>
    </tbody>
    </table>
</div>
</div>