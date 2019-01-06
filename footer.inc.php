        <!-- Script voor back to top functie -->   
        <script>
            $(document).ready(function(){
            
                // Check to see if the window is top, if not then display button
                $(window).scroll(function(){
                    if ($(this).scrollTop() > 300) {
                        $(".backtotop").css("display","block");
                    $('.backtotop').fadeIn();
                    } else {
                    $('.backtotop').fadeOut();
                    }
                });
            
                // Click event to scroll to top
                $('.backtotop').click(function(){
                    $('html, body').animate({scrollTop : 0},400);
                    return false;
                });
            });
        </script>

          <a class="backtotop" title="Omhoog" href="#top"><img src="img/upArrow.png" alt="Back to top" /></a>
        <!-- Footer include -->
<!-- Footer include -->
        <footer>
          <section id="footer_copyright">
              <p>&copy;&nbsp;<?php echo date("Y"); ?></p>
          </section>
          <section id="footer_contact">
              <p>
                <a href="contact.php">Contact</a>
              </p>
          </section>
        </footer>

    <script src="js/jquery.slimmenu.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script>
        $('ul.slimmenu').slimmenu(
        );
    </script>

    </body>
</html>