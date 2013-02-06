<?php echo $this->Html->script('validate'); ?>
<h2>Fixture Assistant</h2>
<?php //pr($secs); ?>
<?php
//echo $this->Form->create('Insert', array('url' => array('controller' => 'products', 'action' => 'query',), 'enctype' => 'multipart/form-data'));

echo $this->Form->create('Product', array('name' => 'find-fixture', 'url' => array('controller' => 'products', 'action' => 'query',), 'enctype' => 'multipart/form-data'));

echo $this->Form->select('sector', $secs, '1', array('escape' => false, 'empty' => 'sector', 'div' => 'fixture-select', 'class' => 'fixture-input', 'error' => array(
        'wrap' => 'div', 'value' => 'find fixture',
        'class' => 'formerror'
        )));
echo $this->Form->select('application', $apps, '1', array('escape' => false, 'empty' => 'application', 'div' => 'fixture-select', 'class' => 'fixture-input', 'error' => array(
        'wrap' => 'div',
        'class' => 'formerror'
        )));
echo $this->Form->select('weight', $weis, '1', array('escape' => false, 'empty' => 'capacity', 'div' => 'fixture-select', 'class' => 'fixture-input', 'error' => array(
        'wrap' => 'div',
        'class' => 'formerror'
        )));
?>		
<?php
//echo $this->Form->input('submit',array('value'=>'find fixture','class'=>'fixture-submit'));
echo $this->Form->end('find-fixture', array('class' => 'fixutre'));
?>

<div class="locate-showroom">
    <h3>Locate Showroom</h3>
    <form id="aform">
        <select id="selectMe" size="1">

            <option value="navi"selected="selected ">Navi Mumbai</option>
            <option value="mumbai">Mumbai</option>
            <option value="pune">Pune</option>
            <option value="pimpari">Pimpari</option>
            <option value="hyderabad">Hyderabad</option>
            <option value="cochin">Cochin</option>
            <option value="indore">Indore</option>
        </select>
    </form>


    <div id="navi" class="group">
        <div class="location">
            D-372, TTC Ind. Area,<br/>
            Turbhe MIDC,<br/>
            Navi Mumbai-400703.
        </div>

    </div>
    <div id="mumbai" class="group">
        <div class="location">
            9 Mirza Street, 
            Off Abdul Rahman Street, 
            Mumbai.
        </div>

    </div>
    <div id="pune"class="group">
        <div class="location" >
            116/Mahatma Gandhi Rd,
            Opp Royal builders,
            Pune Camp, Pune.
        </div>
    </div>
    <div id="pimpari"class="group">
        <div class="location" >
            16 -2, Mahalaxmi heights,
            Pune-Mumbai Road,
            Pimpari, Pune.
        </div>
    </div>
    

    <div id="hyderabad" class="group">
        <div class="location" >
            6-2-37/ A & B,First Floor,
            Midas Touch Complex,
            LakadiKapul,Hyderabad.
        </div>
    </div>
    
    <div id="cochin"class="group">
        <div class="location" >
           30/1524 - A4 Surendra Arcade,
           N.A. Road, Ponnurunthy, 
           Near Gold Souk,
           Cochin– 682019. 
        </div>
    </div>
    
    <div id="indore"class="group">
        <div class="location" >
            Variety Hardware Center,
            14 Jawahar Marg, Mohammadi Market,
            near Patel Bridge,
            Indore. 
        </div>
    </div>



</div>
<div class="enquiry">

    <ul>

        <li id="mail"><a href="#">Send Enquiry</a></li>
    </ul>

</div>			
<div class="social">
<?php echo $this->Html->link($this->Html->image('facebook.png', array('alt' => 'facebook')), "https://www.facebook.com/insyncrpm",array('escape' => false,'target'=>'_blank')); ?>
    <?php echo $this->Html->link($this->Html->image('twitter.png', array('alt' => 'twitter')), "https://twitter.com/#!/insyncrpm",array('escape' => false,'target'=>'_blank')); ?>
    <?php echo $this->Html->link($this->Html->image('blog.png', array('alt' => 'facebook')), "https://www.facebook.com/insyncrpm",array('escape' => false,'target'=>'_blank')); ?>
    <?php echo $this->Html->link($this->Html->image('linkedin.jpg', array('alt' => 'facebook')), "http://www.linkedin.com/company/insync-rpm-pvt.-ltd",array('escape' => false,'target'=>'_blank')); ?>
    
</div>			
<div class="clear"></div>


<script type="text/javascript">
$(document).ready(function () {
    $('.group').hide();
    $('#navi').show();
    $('#selectMe').change(function () {
        $('.group').hide();
        $('#'+$(this).val()).show();
    })
});

</script>







<script type="text/javascript"><!--
    $(document).ready(function(){
        //Examples of how to assign the ColorBox event to elements
        $('#mail').colorbox({scrolling:false,inline:true,href:"#contact-box",width:'560px',height:'520px'});

     });
     //--></script>




<script type="text/javascript">

    $(document).ready(function() {
                 


        var validator = $("#contact-form").validate({

            //ignore: ".ignore",

            rules: {

                name: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                contact: {
                    required: true,
                    digits: true
                }
            },
            messages: {



                name: {
                    required: "Enter a name",
                    minlength: jQuery.format("Enter at least {0} characters")

                },
                contact: {
                    required: "Enter a valid phone number",
                    minlength: jQuery.format("Enter at least {0} characters")

                },

                email: {
                    required: "Enter a valid email address",
                    minlength: "Enter a valid email address"
                }


            },


            submitHandler:function(form) {
                            
                            
                form.submit();
                            
                            
            }


        });

                   
    });

</script>

<div style="display:none">
    <div id="contact-box">

        <div id="contact_us_enquiry" class="content">
            <div id="contact_us_form">

                <div class="contact_error"></div>
                <form id="contact-form"  name="contact-form" method="post" action="">
                    <ul>
                        <li>
                            <label class="contact_us_form_label">Name:</label>
                            <input type="text" name="name" class="contact_us_input" />
                        </li>
                        <li>
                            <label class="contact_us_form_label">Organization:</label>
                            <input type="text" name="organization" class="contact_us_input" />
                        </li>
                        <li>
                            <label class="contact_us_form_label">Email:</label>
                            <input type="email" name="email"  class="contact_us_input" />
                        </li><li>
                            <label class="contact_us_form_label">Contact No:</label>
                            <input type="text" name="contact"  class="contact_us_input" />
                        </li><li>
                            <label class="contact_us_form_label">Query:</label>
                            <textarea class="contact_us_area" name="query"></textarea>
                        </li>
                        <li>
                            <input type="submit" name="submitContact" value="Send" id="con_submit" />
                        </li>
                    </ul>
                </form>

            </div>


        </div>


    </div>
    <div id="thanks-box">
        "Thank you for contacting us. We will get back to you shortly."
    </div>
</div>




</body>
</html>

<?php
//print_r($_POST);
if (isset($_POST['submitContact'])) {

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $organisation = $_POST['organization'];
    $phone = $_POST['contact'];
    $message = $_POST['query'];

//Validate first
    if (empty($name) || empty($visitor_email)) {
        echo "Name and email are mandatory!";
        exit;
    }

    if (IsInjected($visitor_email)) {
        echo "Bad email value!";
        exit;
    }

    //echo "yo";
    ?>
    <?php
    $email_from = $visitor_email; //<== update the email address
    $email_subject = "New Contact ";
    $email_body = "You have received a new message from the user $name.\n" .
            "Organisation: $organisation .\n" . " Phone: $phone .\n" .
            "mail:$visitor_email.\n" .
            "Here is the message: $message \n";
    $to = "yogesh@pyxis.co.in"; //<== update the email address
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
    mail($to, $email_subject, $email_body, $headers);
//done. redirect to thank-you page
    ?>
    <script type="text/javascript"><!--
        $(document).ready(function(){
            $.colorbox({inline:true,href:"#thanks-box"});
            setTimeout($.colorbox.close, 3000);
        });

                 




            //--></script>


    <?php
}

// Function to validate against any email injection attempts
function IsInjected($str) {
    $injections = array('(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
    );
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    if (preg_match($inject, $str)) {
        return true;
    } else {
        return false;
    }
}
?>



