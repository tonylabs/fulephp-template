<section class="bg-dark text-light height-60">
    <div class="bg-image opacity-30" style="overflow: hidden;">
        <video class="" style="position: absolute; top: 0; left: 0; right: 0; width: 100%;" autoplay loop muted>
            <?php echo \Asset::cdn('video/contact-header-hero.webm');?>
            <?php echo __('env.browser_not_support');?>
        </video>
    </div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-10 col-lg-7">
                <span class="title-decorative"><?php echo __('about.subtitle');?></span>
                <h1 class="display-4"><?php echo __('about.title');?></h1>
                <span class="lead"><?php echo __('about.description');?></span>
            </div>
        </div>
    </div>
</section>
<section class="space-sm">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5 class="mb-4"><?php echo (!empty($article->title)) ? $article->title : NULL;?></h5>
                <article><?php echo (!empty($article->content)) ? $article->content : NULL;?></article>
                <hr />
                <p class="text-muted text-right"><small><?php echo __('env.last_updated');?>: <?php echo (!empty($article->mtime)) ? date('d F, Y', $article->mtime) : NULL;?></small></p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3390.4242922576536!2d117.18851031601801!3d31.81343653979316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1fc998ae51dbde23!2sShengangcheng!5e0!3m2!1sen!2sus!4v1536411605710" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5><?php echo __('about.company.name');?></h5>
                        <p><?php echo __('about.company.address');?></p>
                        <div>
                            <a href="#" class="btn btn-outline-primary"><?php echo __('about.company.directions');?></a>
                            <a href="mailto: support@tonylabs.com" class="btn btn-outline-primary"><i class="icon-email"></i> <?php echo __('about.contact_us');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (!empty($block_subscription)) echo $block_subscription;?>