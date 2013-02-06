
    <?php echo $this->Html->script('jquery.colorbox'); ?>
    <?php echo $this->Html->css('colorbox'); ?>
<?php echo $this->Html->script('validate'); ?>  
                <?php echo $this->Html->script('jquery.colorbox'); ?>
                <?php echo $this->Html->css('colorbox'); ?>
   
      <div class="content">  
        <div id="contact_us" class="content">
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

            </div>
            <div style="display: none">
                <div id="thanks-box" >
                    "Thank you for contacting us. We will get back to you shortly."
                </div></div>

           
        </div>
       
    </div>
<div class="clear"></div>
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
        <script type="text/javascript"><!--
            $(document).ready(function(){
                $.colorbox({inline:true,href:"#thanks-box"});
                setTimeout($.colorbox.close, 6000);
            });

                 




         //--></script>

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

