<!-- Blogs -->
<?php
$blog_shuffle = $blog->getData();
?>
<section id="blogs">
    <div class="container py-4">
        <h4 class="font-rubik font-size-20">Latest Blogs</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach ($blog_shuffle as $item) { ?>
                <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                        <h5 class="card-title font-size-16"><?php echo $item['blog_name'] ?? "Blog-name"; ?></h5>
                        <img src="<?php echo $item['blog_image'] ?? "Blog-Image"; ?>" alt="Blog1" class="card-img-top">
                        <p class="card-text font-size-14 text-black-50 py-1"><?php echo $item['blog_description'] ?? "Blog-Description"; ?></p>
                        <a href="" class="color-second text-left">Details</a>
                    </div>
                </div>
            <?php } //closing foreach function ?>
        </div>
    </div>
</section>
<!-- End Blogs -->
