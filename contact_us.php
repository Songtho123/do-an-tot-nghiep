<!doctype html>
<html lang="en">
<head>
<title>PHP Contact Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
    <body>
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Thể Thao</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
            </div>
            </div>
        </header>
        <div class="form-container">
            <form name="frmContact" id="" frmContact"" method="post" action=""
                enctype="multipart/form-data" onsubmit="return validateContactForm()">

                <div class="input-row">
                    <label style="padding-top: 20px;">Name</label> <span
                        id="userName-info" class="info"></span><br /> <input type="text"
                        class="input-field" name="userName" id="userName" />
                </div>
                <div class="input-row">
                    <label>Email</label> <span id="userEmail-info" class="info"></span><br />
                    <input type="text" class="input-field" name="userEmail"
                        id="userEmail" />
                </div>
                <div class="input-row">
                    <label>Subject</label> <span id="subject-info" class="info"></span><br />
                    <input type="text" class="input-field" name="subject" id="subject" />
                </div>
                <div class="input-row">
                    <label>Message</label> <span id="userMessage-info" class="info"></span><br />
                    <textarea name="content" id="content" class="input-field" cols="60"
                        rows="6"></textarea>
                </div>
                <div>
                    <input type="submit" name="send" class="btn-submit" value="Send" />

                    <div id="statusMessage"> 
                            <?php
                            if (! empty($message)) {
                                ?>
                                <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                            <?php
                            }
                            ?>
                        </div>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"
            type="text/javascript">
            function validateContactForm() {
                var valid = true;

                $(".info").html("");
                $(".input-field").css('border', '#e0dfdf 1px solid');
                var userName = $("#userName").val();
                var userEmail = $("#userEmail").val();
                var subject = $("#subject").val();
                var content = $("#content").val();

                if (userName == "") {
                    $("#userName-info").html("Required.");
                    $("#userName").css('border', '#e66262 1px solid');
                    valid = false;
                }
                if (userEmail == "") {
                    $("#userEmail-info").html("Required.");
                    $("#userEmail").css('border', '#e66262 1px solid');
                    valid = false;
                }
                if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                    $("#userEmail-info").html("Invalid Email Address.");
                    $("#userEmail").css('border', '#e66262 1px solid');
                    valid = false;
                }

                if (subject == "") {
                    $("#subject-info").html("Required.");
                    $("#subject").css('border', '#e66262 1px solid');
                    valid = false;
                }
                if (content == "") {
                    $("#userMessage-info").html("Required.");
                    $("#content").css('border', '#e66262 1px solid');
                    valid = false;
                }
                return valid;
            }
        </script>
        <!-- include JavaScript validation here -->
    </body>
</html>