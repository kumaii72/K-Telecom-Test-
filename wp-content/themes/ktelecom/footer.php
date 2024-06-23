<footer>
    <div>
<?php echo get_custom_logo(); ?>
</div>
<div class="company">© 2018–2022 ООО «К-Телеком»</div>
<div class="social">
    <a href=#>
        <img src="wp-content\themes\ktelecom\assets\image\1.png">
    </a>
    <a href=#>
        <img src="wp-content\themes\ktelecom\assets\image\2.png">
    </a>
    <a href=#>
        <img src="wp-content\themes\ktelecom\assets\image\3.png">
    </a>
</div>

</footer>
</div> <!-- .wrapper -->
<?php wp_footer(); ?>
<script src="wp-content\themes\ktelecom\assets\owlcarousel\jquery-3.7.1.min.js"></script>
<script src="wp-content\themes\ktelecom\assets\owlcarousel\owl.carousel.min.js"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoWidth:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})
</script>
</body>
</html> 