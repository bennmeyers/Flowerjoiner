<?php include("assets/includes/global/header.php"); ?>
<div id="contact" class="container">
    <?php include("assets/includes/content/header.php"); ?>

    <div id="content" class="container">
    
        <div id="main_content">
            <!-- begin theme request -->
                <?php
                    if(isset($_POST['submit']))
                    {
                        $to = "gregpwong@gmail.com";
                        $name_field = $_POST['c_name'];
                        $email_field = $_POST['c_email'];
                        $phone_field = $_POST['c_phone'];
                        $message = $_POST['c_message'];
                        $subject = "pivatolminds contact from ". $name_field;
                        $headers = 'From: ' . $name_field . ' <' . $email_field . '>' . "\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1 ";
                        $headers .= "MIME-Version: 1.0 "; 
                        $body = "$message<br /><br />$name_field<br /> <b>E-Mail:</b> $email_field , <b>Phone:</b> $phone_field";

                        mail($to, $subject, $body, $headers);
                        mail($toMe, $subject, $body, $headers);
        ?>
        <h1>We appreciate your contact! Thank You!</h1>
        <?php
                    }
                    else
                    {
                ?>
            <h1>Contact</h1>
            <form class="form-horizontal" role="form" method="post" action="contact.php">
                <fieldset>
                    <div class="form-group">
                        <label for="c_name" class="col-lg-2 control-label">Name:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="" id="c_name" name="c_name" placeholder="Enter Full Name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="c_email" class="col-lg-2 control-label">Email:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="" id="c_email" name="c_email" placeholder="email@email.com" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="c_phone" class="col-lg-2 control-label">Phone:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="" id="c_phone" name="c_phone" placeholder="XXX-XXX-XXXX" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="c_message" class="col-lg-2 control-label">Message:</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" value="" id="c_message" name="c_message" placeholder="Enter a Message"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="submit" value="submit" name="submit" id="frm_submit" class="btn btn-default pull-right" />
                        </div>
                    </div>
                </fieldset>
            </form>
            <?
                }
            ?>
        </div><!-- #main_content -->
        <?php include("assets/includes/content/subNav.php"); ?>

    </div><!-- #content -->
    <?php include("assets/includes/content/footer.php"); ?>
</div><!-- #contact -->
<?php include("assets/includes/global/footer.php"); ?>