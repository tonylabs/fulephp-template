<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home');?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo (!empty($article->title)) ? $article->title : NULL;?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <?php echo \Asset::cdn('img/authkey/avatar-user.svg', array('class' => 'mb-4 img-fluid'));?>
                <h1 class="display-4"><?php echo (!empty($article->title)) ? $article->title : NULL;?></h1>
                <span class="lead">Here’s a brief introduction on how the business is using your product, a quick teaser of the content to come.</span>
            </div>
        </div>
    </div>
</section>
<section>
    <article class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <?php echo (!empty($article->content)) ? $article->content : NULL;?>
            </div>
            <figure class="figure text-center col-12 col-md-10 col-lg-8">
                <?php echo \Asset::cdn('img/authkey/avatar-user.svg', array('class' => 'img-fluid figure-img rounded'));?>
                <figcaption class="figure-caption"><?php echo (!empty($article->ctime)) ? date('Y-m-d', $article->ctime) : NULL;?></figcaption>
            </figure>
        </div>
    </article>
</section>
<?php if (!empty($block_subscription)) echo $block_subscription;?>