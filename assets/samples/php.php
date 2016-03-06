&lt;?php include("includes/global/header.php"); ?&gt;
&lt;div id="contact_page"&gt;
    &lt;?php include("includes/content/header.php"); ?&gt;
    &lt;div id="content"&gt;
        &lt;?php include("includes/content/subNav.php"); ?&gt;
        &lt;img src="images/banner/contact.png" alt="Contact Pacific Crush" id="main_image" /&gt;
        &lt;div id="main_content"&gt;
            &lt;!-- begin form --&gt;
                &lt;?php
                    if(isset($_POST['submit']))
                    {
                        $to = "removed@gmail.com";
                        $name_field = $_POST['c_name'];
                        $email_field = $_POST['c_email'];
                        $phone_field = $_POST['c_phone'];
                        $message = $_POST['c_message'];
                        $subject = "Removed Contact from ". $name_field;
                        $headers = 'From: ' . $name_field . ' &lt;' . $email_field . '&gt;' . "\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1 ";
                        $headers .= "MIME-Version: 1.0 "; 
                        $body = "$message&lt;br /&gt;&lt;br /&gt;$name_field&lt;br /&gt; &lt;b&gt;E-Mail:&lt;/b&gt; $email_field , &lt;b&gt;Phone:&lt;/b&gt; $phone_field";
            
                        mail($to, $subject, $body, $headers);
                        mail($toMe, $subject, $body, $headers);
        ?&gt;
        
        &lt;div class="alone"&gt;
            &lt;h1&gt;We appreciate your contact! Thank You!&lt;/h1&gt;
        &lt;?php
                    }
                    else
                    {
                ?&gt;
            &lt;form method="post" action="contact.php"&gt;
                &lt;fieldset class="column col_1 contact_column"&gt;
                    &lt;h2&gt;Contact Us&lt;/h2&gt;
                    &lt;div&gt;
                        &lt;label for="c_name"&gt;Name:&lt;/label&gt;
                        &lt;input type="text" value="" id="c_name" name="c_name" /&gt;
                    &lt;/div&gt;
                
                    &lt;div&gt;
                        &lt;label for="c_email"&gt;Email:&lt;/label&gt;
                        &lt;input type="text" value="" id="c_email" name="c_email" /&gt;
                    &lt;/div&gt;
                
                    &lt;div&gt;
                        &lt;label for="c_phone"&gt;Phone:&lt;/label&gt;
                        &lt;input type="text" value="" id="c_phone" name="c_phone" /&gt;
                    &lt;/div&gt;
                
                    &lt;div&gt;
                        &lt;label for="c_message"&gt;Message:&lt;/label&gt;
                        &lt;textarea value="" id="c_message" name="c_message"&gt;&lt;/textarea&gt;
                    &lt;/div&gt;
                
                    &lt;div class="buttonDiv"&gt;
                        &lt;span&gt;&lt;input type="submit" value="Submit" name="submit" id="frm_submit" class="button" /&gt;&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/fieldset&gt;&lt;!-- .col_1 --&gt;
            &lt;/form&gt;
            &lt;div class="column col_2 twitter"&gt;
            &lt;?
                }
            ?&gt;
                &lt;div class="twitter"&gt;
                    &lt;h2&gt;Latest Tweets&lt;/h2&gt;
                    &lt;script src="http://widgets.twimg.com/j/2/widget.js"&gt;&lt;/script&gt;
                    &lt;script&gt;
                    new TWTR.Widget({
                      version: 2,
                      type: 'profile',
                      rpp: 30,
                      interval: 30000,
                      width: 'auto',
                      height: 239,
                      theme: {
                        shell: {
                          background: '#ffffff',
                          color: '#333333'
                        },
                        tweets: {
                          background: 'transparent',
                          color: '#333333',
                          links: '#579ab1'
                        }
                      },
                      features: {
                        scrollbar: true,
                        loop: false,
                        live: true,
                        hashtags: false,
                        timestamp: false,
                        avatars: false,
                        behavior: 'all'
                      }
                    }).render().setUser('Removed', 'all').start();
                    &lt;/script&gt;
                &lt;/div&gt;&lt;!-- .col_2 --&gt;
            &lt;/div&gt;&lt;!-- .alone --&gt;
        &lt;/div&gt;&lt;!-- #main_content --&gt;
        &lt;?php include("includes/content/sponsors.php"); ?&gt;
    &lt;/div&gt;&lt;!-- #content --&gt;
    &lt;?php include("includes/content/footer.php"); ?&gt;
&lt;/div&gt;&lt;!-- #contact --&gt;
&lt;?php include("includes/global/footer.php"); ?&gt;