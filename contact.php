<?php
    session_start();
    include 'conn.php';

    if($_SESSION){
        header('location: index.php');
    } else{
        $sql = "SELECT * FROM users";

        $rows = mysqli_query($conn, $sql);
        $i = 0;
        if(isset($_POST['submit'])){

        
            // Check for empty fields
            if(empty($_POST['name'])   ||
            empty($_POST['email'])     ||
            empty($_POST['phone'])     ||
            empty($_POST['message'])   ||
            !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
            {
            echo "No arguments Provided!";
            return false;
            }
            
            $name = strip_tags(htmlspecialchars($_POST['name']));
            $email_address = strip_tags(htmlspecialchars($_POST['email']));
            $phone = strip_tags(htmlspecialchars($_POST['phone']));
            $message = strip_tags(htmlspecialchars($_POST['message']));
            
            // Create the email and send the message
            $to = "akuntumbalku42069@gmail.com"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
            $email_subject = "Website Contact Form:  $name";
            $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
            $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
            $headers .= "Reply-To: $email_address"; 
        
            mail($to,$email_subject,$email_body,$headers);
            return true;  
        }
        mysqli_close($conn);

    }
    
    /*
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE `id`= $id";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    mysqli_close($conn);
    */

    $pageTitle = 'Ini Homepage';
    echo ("<title> $pageTitle </title>");

    include 'header.php';
?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Contact
        <small>Subheading</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe style="width: 100%; height: 400px; border: 0;" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Contact Details</h3>
                <p>
                3481 Melrose Place
                <br>Beverly Hills, CA 90210
                <br>
                </p>
                <p>
                <abbr title="Phone">P</abbr>: (123) 456-7890
                </p>
                <p>
                <abbr title="Email">E</abbr>:
                <a href="mailto:name@example.com">name@example.com
                </a>
                </p>
                <p>
                <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php
    include 'header 2.php';
    include 'footer.php'
?>    