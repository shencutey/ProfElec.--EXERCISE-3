<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/b3c27dd02c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
</head>

<body>
    <header class="header-fix">
        <div class="header-container">
            <h1><i class="fa-solid fa-table"></i><a href="#">Forms</a></h1>
        </div>
    </header>
    <div class="container">

        <!-- FIRST  SECTION -->
        <section>
            <aside>
                <h2> <i class="fa-solid fa-question"></i> Info</h2>
                <h3>Tags</h3>
                <ul>
                    <li>method: POST</li>
                    <li>Mandatory Fields</li>
                    <li>Standard Field: text and password</li>
                    <li>Checkbox: Checkbox</li>
                    <li>Standard button: submit</li>
                </ul>
            </aside>
            <article>
                <h2>Login Form</h2>
                <p class="marginbot50">Standard form to enter these <span>Login credentials:</span></p>

                <form method="post" class="form-element" id="loginform">
                    <div>
                        <div>
                            <label>Enter your username:</label>
                            <input type="text" name="username">
                        </div>
                        <div>
                            <label>Enter your password:</label>
                            <input type="password" name="password">
                        </div>
                    </div>
                    <div class="align-center">
                        <div>
                            <input type="checkbox" name="remember_me">
                            <label>Remember me</label>
                        </div>
                    </div>

                    <div class="align-right">
                        <input type="submit" title="Login" name="form" value="Login">
                    </div>

                </form>
            </article>
            <?php if (!empty($_POST) && $_POST['form'] === "Login") { ?>
                <div class="result">
                    <b>Values returned by the form:</b><br>
                    <ul>
                        <?php foreach ($_POST as $key => $value) {
                            echo '<li>' . $key . ' => ' . $value . '</li>';
                        } ?>
                    </ul>
                </div>
            <?php } ?>
            <br><br><br><hr><br><br>
        </section>


        <!-- SECOND SECTION -->
        <section>
            <aside>
                <h2> <i class="fa-solid fa-question"></i> Info</h2>
                <h3>Tags</h3>
                <ul>
                    <li>method: POST</li>
                    <li>Mandatory Fields</li>
                    <li>File sending</li>
                    <li>Standard Field: textc email, date, file and password</li>
                    <li>Checkbox: Checkbox</li>
                    <li>Radio button: submit</li>
                    <li>Standard button: submit</li>
                </ul>
            </aside>
            <article>
                <h2>Registration Form</h2>
                <p class="marginbot50">Standard form for <span>online registration</span> on a website</p>

                <form method="post" class="form-element" enctype="multipart/form-data" id="registrationform">
                    <div>
                        <div>
                            <label>Enter your <span>Gender</span>:<span class="mandatory">*</span></label>
                            <div>
                                <input type="radio" name="gender" value="female">
                                <label>Female</label>
                                <input type="radio" name="gender" value="male">
                                <label>Male</label>
                            </div>
                        </div>

                        <div>
                            <label>Enter your <span>Lastname</span>:<span class="mandatory">*</span></label>
                            <input type="text" name="lastname">
                        </div>

                        <div>
                            <label>Enter your <span>First name</span>:<span class="mandatory">*</span></label>
                            <input type="text" name="firstname">
                        </div>

                        <div>
                            <label>Enter your <span>Date of Birth</span>:<span class="mandatory">*</span></label>
                            <input type="date" name="date">
                        </div>

                        <div>
                            <label>Choose your <span>photo</span>:<span class="mandatory">*</span></label>
                            <input type="file" name="myfile" id="myfile">
                        </div>

                        <div>
                            <label>Enter your <span>Email address</span>:<span class="mandatory">*</span></label>
                            <input type="email" name="email">
                        </div>

                        <div>
                            <label>Enter your <span>Password</span>:<span class="mandatory">*</span></label>
                            <input type="password" name="password">
                        </div>

                        <div>
                            <label><span>Confirm</span> your Password:<span class="mandatory">*</span></label>
                            <input type="password" name="confirm_password">
                        </div>
                        <div>
                            <label><span class="mandatory">*mandatory fields</span></label>

                        </div>
                    </div>

                    <div class="align-center">
                        <div>
                            <input type="checkbox" name="tos" value="ok">
                            <label>Accept TOS</label>
                        </div>
                    </div>

                    <div class="align-right">
                        <input type="submit" title="Registration" name="form" value="Register">
                    </div>

                </form>
            </article>


            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!isset($_POST['tos']) || empty($_POST['tos'])) {
                    echo '<div class="error">Please accept the Terms of Service</div>';
                } else {
                    // Proceed with form submission
                    echo '<div class="result">';
                    echo '<b>Values returned by the form:</b><br>';
                    echo '<ul>';
                    foreach ($_POST as $key => $value) {
                        if ($key === 'myfile') {
                            // Check if file was uploaded successfully
                            if ($_FILES['myfile']['error'] === 0) {
                                echo '<li>' . $key . ' => ' . $_FILES['myfile']['name'] . '</li>';
                            }
                        } else {
                            echo '<li>' . $key . ' => ' . $value . '</li>';
                        }
                    }
                    echo '</ul>';
                    echo '</div>';
                }
            }
            ?>
            <br><br><br><hr><br><br>
        </section>

        <!-- THIRD  SECTION -->
        <section>
            <aside>
                <h2> <i class="fa-solid fa-question"></i> Info</h2>
                <h3>Tags</h3>
                <ul>
                    <li>method: POST</li>
                    <li>Mandatory Fields</li>
                    <li>Placeholder attribute</li>
                    <li>Maxlength abd minlength attritbutes</li>
                    <li>Textarea</li>
                    <li>Standard button: submit</li>
                </ul>
            </aside>
            <article>
                <h2>Login Form</h2>
                <p class="marginbot50">Standard form for making an <span>information request:</span> on a website</p>

                <form method="post" class="form-element" id="contactform">
                    <div>
                        <div>
                            <label>Department you wish to contact: <span class="mandatory">*</span></label>
                            <select name="department" >
                                <option>Select...</option>
                                <option>Sales Department</option>
                                <Option>Communication Department</Option>
                                <option>Technical Department</option>
                            </select>
                        </div>
                        <div>
                            <label>Enter a <span>Title</span>:<span class="mandatory">*</span></label>
                            <input type="text" name="title" minlength="20" placeholder="More than 20 characters" >
                        </div>

                        <div>
                            <label>Enter your <span>Question</span>:<span class="mandatory">*</span></label>
                            <textarea class="vertical-top" maxlength="1000" placeholder="Maximum 1000 characters..."></textarea>
                        </div>

                        <div>
                            <label>Enter your <span>Email address</span>:<span class="mandatory">*</span></label>
                            <input type="email" name="contactemail" placeholder="Your Email...">
                        </div>
                    </div>

                    <div class="align-right">
                        <input type="submit" title="Contact" name="form" value="Contact">
                    </div>

                </form>
            </article>
        </section>




    </div>

</body>



</html>