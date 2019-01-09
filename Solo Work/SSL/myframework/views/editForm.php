

    <main role="main" style="padding-top: 80px;">
    <div class="container">
        <h1>Edit <?echo $_GET["name"]?></h1>

        <form action="/about/editAction/?id=<?php echo ($_GET["id"]); ?>" method="post">
            <input type="text" name="name" placeholder="Bananas?" value="<?php echo ($_GET["name"]); ?>"/>
            <input type="submit"/>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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

