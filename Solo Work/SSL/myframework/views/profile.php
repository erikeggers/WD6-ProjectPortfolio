<div class="container" style="padding-top: 80px;">
    <div class="row panel">
        <div class="col-md-12 col-xs-12">
            <img src="/assets/profile.png" class="img-thumbnail picture">
            <form action="/profile/update" method="post" enctype="multipart/form-data">
                    <input name="img" type="file"">
                <input type="submit" value="Update" class="btn btn-primary">
            </form>
            <div class="profile-header">
                <h4>Bio:</h4>
                <?
                echo "<p>$_SESSION[bio]</p>";             
                ?>
            </div>
        </div>
    </div>
</div>