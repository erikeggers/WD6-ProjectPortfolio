

    <main role="main" style="padding-top: 80px;">
    <div class="container">

        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div>

        <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Cool Popover" data-content="It's very cool. Right?">Click to toggle popover</button>

        <!-- FOOTER -->
        <footer class="container">
            <p>&copy; 2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>
    </main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
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

