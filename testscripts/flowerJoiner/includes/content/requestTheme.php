<!-- begin theme request -->
	<?php
        if(isset($_POST['submit']))
        {
        	$to = "benn@flowerjoiner.com";
            $subject = "Drupal Theme Request";
            $name_field = $_POST['frm_fullName'];
            $email_field = $_POST['frm_email'];
            $copy = $_POST['frm_copy'];
            $design = $_POST['frm_design'];
            $updates = $_POST['frm_updates'];
            $message = $_POST['frm_message'];
            $headers = 'From: ' . $name_field . ' <' . $email_field . '>' . "\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1 ";
            $headers .= "MIME-Version: 1.0 "; 
            $body = "$message<br /><br /> <b>From:</b> $name_field<br /> <b>E-Mail:</b> $email_field<br />";
            
                if ($copy)
                {
                    $body .= "<b>Copy Needed:</b> $copy<br />";
                }
                
                if ($design)
                {
                    $body .= "<b>Design Needed:</b> $design<br />";
                }
                
                if ($updates)
                {
                    $body .= "<b>Updates Needed:</b> $updates<br />";
                }
                
                if ($referred)
                {
                    $body .= "<b>Referred by:</b> $referred<br />";
                }            
            
                if ($name_field && $email_field)
                {
                    mail($to, $subject, $body, $headers);
                    mail($toMe, $subject, $body, $headers);
                    echo "<h1>Thank you, $name_field.</h1>";
                    echo "<p>Your request for a Drupal theme has been sent and I will get back to you shortly.</p>";
                    echo "<p>Benn</p>";
                    echo "<p>*all information submitted is completely private</p>";
                }
                elseif ($name_field == "" && $email_field) 
                {
                    echo "<h4>Please enter a name</h4>";
                }
                elseif ($name_field && $email_field == "")
                {
                    echo "<h4>Please enter an email address</h4>";
                }
                elseif ($name_field == "" && $email_field == "")
                {
                    echo "<h4>Please enter a name and email address</h4>";
                }
        }
        else
        {
    ?>
        <form method="post" action="requestTheme.html">
			<fieldset class="contact">
				<div>
					<label class="label" for="frm_fullName">Name:</label>
					<input type="text" name="frm_fullName" id="frm_fullName" class="text" />
					<span class="asterix" id="error_FullNameAsterix">*</span>
					<span id="error_FullName" class="error hidden">Please Enter Your Name</span>
				</div>
            	<div>
					<label class="label" for="frm_email">Email:</label>
					<input type="text" name="frm_email" id="frm_email" class="text" />
					<span id="error_EmailAsterix" class="asterix">*</span>
					<span id="error_Email" class="error hidden">Please Enter Your Email Address</span>
				</div>
				<div class="hList">
					<span class="label">Needed Items (besides base theme):</span>
					<input type="checkbox" name="frm_copy" id="frm_copy" class="checkbox" />
					<label for="frm_copy">Copy/Text</label>
					<input type="checkbox" name="frm_design" id="frm_design" class="checkbox" />
					<label for="frm_design">Design</label>
					<input type="checkbox" name="frm_updates" id="frm_updates" class="checkbox" />
					<label for="frm_updates">Regular Updates</label>
				</div>
            	<div>
					<label class="label" for="frm_message">Details about your site you wish to tell me:</label>
					<textarea name="frm_message" id="frm_message"></textarea>
				</div>
            	<div class="buttonDiv">
					<input type="submit" value="Submit" name="submit" id="frm_submit" class="button" />
					<span>* Required Information</span>
				</div>
			</fieldset>
        </form>
    <?
        }
    ?>
<!-- end theme request -->