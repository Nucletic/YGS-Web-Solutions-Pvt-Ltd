<?php
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $website = $_POST['website'];
    $web_design = $_POST['web_design'];
    $graphic_design = $_POST['graphic_design'];
    $app_development = $_POST['app_development'];
    $other = $_POST['other'];
    $message = $_POST['message'];
    $budget = $_POST['budget'];
    $timeline = $_POST['timeline'];

    $email_from = "sales@yatiglobalsolutions.com";

    $email_subject = "New Form Submission";
    $email_body = "User Name: $first_name $last_name .\n" .
        "Email: $visitor_email .\n" .
        "Phone: $phone .\n" .
        "Company: $company .\n" .
        "Website: $website .\n" .
        "Service: $web_design $graphic_design $app_development $other .\n" .
        "Message: $message .\n" .
        "Budget: $budget .\n" .
        "Timeline: $timeline .\n";

    $to = "sales@yatiglobalsolutions.com";

    $headers = "From $email_from \r\n";
    $headers = "Reply-To $visitor_email \r\n";
    $mail_done =  mail($to, $email_subject, $email_body, $headers);

    if ($mail_done) {
        echo '<script>
    alert("Never Gonna Give You Up");
    </script>';
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | YGS Web Solutions Pvt Ltd.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon_io/favicon-32x32.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>
    <?php require 'partials/header.php'; ?>
    <section id="other_page_header" style="background-repeat:no-repeat;
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/inner-banner-small.jpg);">
        <h1>GET IN TOUCH</h1>
        <p><a href="">Home </a> / Contact Us</p>
    </section>
    <section id="contact">
        <div class="contact_main">
            <div class="left_contact_main">
                <div class="contact_main_title">
                    <h1>India Office</h1>
                </div>
                <div class="left_contact_main_first_sec">
                    <p><i class="fa fa-map-marker"></i>11b Raj vihar nawada mathura (281001)</p>
                    <p><i class="fa fa-phone"></i><a href="tel:8218025546">821 802-5546</a></p>
                    <p><i class="fa fa-envelope"></i><a href="mailto:sales@yatiglobalsolutions.com">sales@yatiglobalsolutions.com</a></p>
                </div>
            </div>
            <div class="right_contact_main">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="contact_main_title">
                        <h1>First tell us a bit about yourself</h1>
                    </div>
                    <div class="right_contact_main_first_sec">
                        <label>
                            <input type="text" id="firstname" name="first_name" placeholder="First Name" required>
                        </label>
                        <label>
                            <input type="text" id="lastname" name="last_name" placeholder="Last Name" required>
                        </label>
                        <label>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </label>
                        <label>
                            <input type="phone" id="phone" name="phone" placeholder="Phone" required>
                        </label>
                        <label>
                            <input type="text" id="company" name="company" placeholder="Company">
                        </label>
                        <label>
                            <input type="text" id="website" name="website" placeholder="Current Website">
                        </label>
                    </div>
                    <div class="contact_main_title">
                        <h1>Now let us know what you're looking for</h1>
                    </div>
                    <div class="right_contact_main_second_sec">
                        <label>
                            <input type="checkbox" id="web_deisgn" name="web_design" value="Website Deisgn">
                            <span>Website Design</span>
                        </label>
                        <label>
                            <input type="checkbox" id="graphic_design" name="graphic_design" value="graphic Design">
                            <span>Graphic design</span>
                        </label>
                        <label>
                            <input type="checkbox" id="app_development" name="app_development" value="App Development">
                            <span>App Development</span>
                        </label>
                        <label>
                            <input type="checkbox" id="Other" name="other" value="Other">
                            <span>Others</span>
                        </label>
                    </div>
                    <div class="right_contact_main_third_sec">
                        <label>
                            <textarea name="message" id="message" name="message" cols="5" rows="4" placeholder="Describe Your Project" required></textarea>
                        </label>
                        <label>
                            <select id="budget" name="budget">
                                <option value="Not Entered">what's Your Budget?</option>
                                <option value="$2,000 - $5,000">$2,000 - $5,000</option>
                                <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                                <option value="$10,000 - $15,000">$10,000 - $15,000</option>
                                <option value="$15,000 - $25,000">$15,000 - $25,000</option>
                                <option value="$25,000+">$25,000+</option>
                            </select>
                        </label>
                        <label>
                            <input type="text" id="timeline" name="timeline" placeholder="What's Your timeline?">
                        </label>
                        <button type="submit" name="submit" value="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.8362984700125!2d77.6856423146958!3d27.443212043657642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397377145e471819%3A0x30245dee36f6df98!2sYati%20Global%20Solutions!5e0!3m2!1sen!2sin!4v1666022345666!5m2!1sen!2sin" style="width:99.7%;height:350px;margin:45px 0 0 0;border:none;" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <?php require 'partials/footer.php'; ?>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</body>

</html>