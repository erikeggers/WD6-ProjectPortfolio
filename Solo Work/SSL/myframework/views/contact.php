

    <main role="main" style="padding-top: 80px;">
    <div class="container">
        <form action="/welcome/contactRecv" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password (At least 10 characters)</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="selectExample">Select</label>
                <select class="form-control" id="selectExample" name="selection">
                    <option disabled selected>Select your option</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="radios" class="form-check-input" type="radio" name="radioExample" id="radioExample1" value="Cool">
                    <label class="form-check-label" for="radioExample1">
                        Cool radio
                    </label>
                </div>
                <div class="form-check">
                    <input name="radios" class="form-check-input" type="radio" name="radioExample" id="radioExample2" value="Awesome">
                    <label class="form-check-label" for="radioExample2">
                        Awesome radio
                    </label>
                </div> 
            </div>
            <div class="form-group">
                <label  for="textareaExample">Textarea</label>
                <textarea name="textarea" class="form-control" id="textareaExample" rows="3"></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="checkbox1" class="form-check-input" type="checkbox" value="yes" id="checkExample1">
                    <label class="form-check-label" for="checkExample1">
                        I agree to be contacted by Website
                    </label>
                </div>
            </div>
            <div>
            <?

                function create_image($cap)

                {

                //unlink("./assets/image1.png");

                global $image;

                $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

                $background_color = imagecolorallocate($image, 255, 255, 255);

                $text_color = imagecolorallocate($image, 0, 255, 255);

                $line_color = imagecolorallocate($image, 64, 64, 64);

                $pixel_color = imagecolorallocate($image, 0, 0, 255);

                imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

                for ($i = 0; $i < 3; $i++) {

                imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);

                }

                for ($i = 0; $i < 1000; $i++) {

                imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);

                }

                $text_color = imagecolorallocate($image, 0, 0, 0);

                ImageString($image, 22, 30, 22, $cap, $text_color);

                imagepng($image, "./assets/image1.png");

                }

                create_image($data["cap"]);

                echo "<img src='/assets/image1.png'>";

            ?>
            <br/>
                <label for="captcha">Enter Captcha </label>
                <input name="captcha" type="captcha" id="captcha"  placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


  <!-- FOOTER -->
  <footer class="container">
    <p>&copy; 2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/main.js"></script>
<script>
    $("#ajaxsubmit").click(function(){
        $.ajax({
            method: "POST", 
            url: '/welcome/ajax',
            data: {email: $("#loginemail").val(), password: $("#loginpassword").val()},
            success: function( response ) {
                console.log(response);
                if (response=="welcome") {
                    alert("Login successful");
                    window.location.href = "/";
                } else {
                    alert("Login unsuccessful, please try again");
                }
            }
        });
    });
</script>
</body>

