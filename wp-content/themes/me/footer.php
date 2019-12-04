<?php
$year = get_field('year', 7);
$company_name = get_field('company_name', 7);

$facebook = get_field('facebook', 7);
$twitter = get_field('twitter', 7);
$youtube = get_field('youtube', 7);
?>
<div class="footer px-4 py-5">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $twitter; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $facebook; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/face.svg"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $youtube; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.svg"></a>
        </li>
    </ul>
    <p class="text-center">Copyright <?php echo $year; ?> All rights reserved — <?php echo $company_name; ?></p>
</div>


<?php $video_id = get_field('video_id', 7); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
	setTimeout(function(){ $("#msg").hide(); }, 3000);
        var uri = window.location.toString();
        if (uri.indexOf("?") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("?"));
            window.history.replaceState({}, document.title, clean_uri);
        }
        $('#play').click(() => {
            // $('#video').removeClass('d-none');
            // $('#poster').addClass('d-none'); setTimeout(function(){ alert("Hello"); }, 3000);
            $("#video>iframe").attr("src", "https://www.youtube.com/embed/<?php echo $video_id; ?>?autoplay=1")
        });
    });
</script>

<?php wp_footer(); ?>

</body>

</html>