<div class="push"><!--//--></div>
</div>
<footer>
    <div class="container">
        <blockquote>
            <p>
                <?php
                $rand = rand(0, 13);
                $xml = new SimpleXMLElement(file_get_contents('citates.xml'));
                echo $xml->entry[$rand]->citate;
                ?>
            </p>
            <small><?php echo $xml->entry[$rand]->author ?></small>
        </blockquote>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.0.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#navbar-scroll").hide();
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 30)
                {
                    $('#navbar-scroll').fadeIn();
                } else {
                    $('#navbar-scroll').fadeOut();
                }
            });
            $('#navbar-scroll a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 'fast');
                return false;
            });
        });
    });
</script>
</body>
</html>