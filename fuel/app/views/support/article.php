<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home'); ?></a></li>
                    <li class="breadcrumb-item"><?php echo __('breadcrumb.support'); ?></li>
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::create("support/:category", array("category" => $category->slug)); ?>"><?php echo (!empty($category)) ? $category->name : NULL; ?></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo (!empty($article)) ? $article->title : NULL; ?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-4"><?php echo (!empty($article)) ? $article->title : NULL; ?></h1>
                <span class="lead"></span>
            </div>
        </div>
    </div>
</section>
<section class="space-sm bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 mb-3">
                <article><?php echo (!empty($article->content)) ? $article->content : NULL; ?></article>
                <hr>
                <div class="card">
                    <div class="card-header bg-secondary d-flex justify-content-between">
                        <button class="btn btn-success" type="button" data-target="#comment-reply" data-toggle="collapse" aria-expanded="false" aria-controls="comment-reply"><?php echo __('comment.reply');?></button>
                        <form class="d-flex align-items-center">
                            <span class="mr-2 text-muted text-small text-nowrap"><?php echo __('comment.sort_by');?>:</span>
                            <select class="custom-select">
                                <option value="alpha"><?php echo __('comment.sort.alphabetical');?></option>
                                <option value="old-new" selected><?php echo __('comment.sort.newest');?></option>
                                <option value="new-old"><?php echo __('comment.sort.popular');?></option>
                            </select>
                        </form>
                    </div>
                    <div class="collapse" id="comment-reply">
                        <form class="card-body">
                            <div class="form-group">
                                <?php echo \Form::textarea('content', NULL, array('class' => 'form-control form-control-lg', 'rows' => 4, 'placeholder' => ''));?>
                            </div>
                            <div class="mb-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="notify-reply" id="check-notify">
                                    <label class="custom-control-label text-small" for="check-notify"><?php echo __('comment.notify');?></label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-success mr-3"><?php echo __('comment.submit');?></button>
                                <a href="#comment-reply" class="text-small text-muted" data-toggle="collapse"
                                   aria-expanded="true" aria-controls="comment-reply"><?php echo __('comment.cancel');?></a>
                            </div>
                        </form>
                    </div>
                    <!--
                    <ul class="list-group list-group-flush list-group-comments">
                        <li class="list-group-item py-4">
                            <div class="media">
                                <?php echo \Asset::cdn("img/avatar-default-265px.png", array("class" => "avatar avatar-sm")); ?>
                                <div class="media-body">
                                    <div class="mb-2">
                                        <span class="h6 mb-0">Kelly Fraiser</span>
                                        <span class="text-muted">Making awesome products</span>
                                    </div>
                                    <p>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        dolore magnam aliquam quaerat voluptatem.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="mr-2">
                                            <button class="btn btn-sm btn-outline-primary">Reply</button>
                                            <button class="btn btn-sm btn-outline-primary"><i
                                                    class="icon-thumbs-up"></i>&nbsp;(2)
                                            </button>
                                        </div>
                                        <small class="text-muted">1st Dec 2017 • 10:15am</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    -->
                </div>
                <h5 class="mb-4"><?php echo __('comment.helpful');?>?</h5>
                <div class="d-flex justify-content-between">
                    <div>
                        <button class="btn btn-outline-primary" type="submit"><i class="icon-thumbs-up"></i></button>
                        <button class="btn btn-outline-primary" type="submit"><i class="icon-thumbs-down"></i></button>
                    </div>
                    <div>
                        <a href="mailto: support@tonylabs.com" class="btn btn-outline-primary"><?php echo __('comment.contact_support');?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-text-document mr-1"></i> <?php echo __('article.created');?></div>
                                <span><?php echo date('d F, Y', $article->ctime);?></span>
                            </div>
                        </li>
                        <?php if (!empty($article->mtime)):?>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-edit mr-1"></i> <?php echo __('article.updated');?></div>
                                <span><?php echo date('d F, Y', $article->mtime);?></span>
                            </div>
                        </li>
                        <?php endif;?>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-thumbs-up mr-1"></i> <?php echo __('article.likes');?></div>
                                <span>214</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-share mr-1"></i> <?php echo __('article.shares');?></div>
                                <span>52</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header bg-secondary">
                        <span class="h6"><?php echo __('article.categories');?></span>
                    </div>
                    <div class="list-group list-group-flush">
                        <?php if (!empty($categories)): ?>
                            <?php foreach ($categories as $cat): ?>
                                <a class="list-group-item d-flex justify-content-between" href="<?php echo \Uri::create("support/:category", array("category" => $cat->slug)); ?>">
                                    <div>
                                        <i class="<?php echo $cat->icon;?> mr-1"></i>
                                        <span><?php echo $cat->name;?></span>
                                    </div>
                                    <div><i class="icon-chevron-right"></i></div>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">

</script>