<style>
    .ck-editor__editable {
        min-height: 400px;
    }
</style>
<nav aria-label='breadcrumb' role='navigation' class='bg-primary text-white'>
    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item'><a href='<?php echo \Uri::base(); ?>'>Home</a></li>
                    <li class='breadcrumb-item'><a href='<?php echo \Uri::lang('admin'); ?>'>Administration</a></li>
                    <li class='breadcrumb-item'><a href='<?php echo \Uri::lang('admin/article/'); ?>'>Articles</a></li>
                    <li class='breadcrumb-item active' aria-current='page'><?php echo (!empty($article->title)) ? $article->title : 'New Article'; ?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class='flush-with-above d-block'>
    <div class='container'>
        <div class='row mb-4'>
            <div class='col'>
                <h5><?php echo (!empty($article->title)) ? $article->title : 'New Post'; ?></h5>
            </div>
        </div>
        <div class='row'>
            <div class='col-12 col-md-10 order-md-1'>
                <?php echo \Form::open(array('action' => \Uri::current(), 'method' => 'post', 'class' => 'row')); ?>
                <div class='col-12'>
                    <div class='form-group'>
                        <?php echo \Form::label('Title', 'title'); ?>
                        <?php echo \Form::input('title', (!empty($article->title)) ? $article->title : NULL, array('class' => 'form-control form-control-lg', 'required')); ?>
                    </div>
                </div>
                <div class='col-12'>
                    <div class='form-group'>
                        <?php echo \Form::label('Slug', 'slug'); ?>
                        <?php echo \Form::input('slug', (!empty($article->slug)) ? $article->slug : NULL, array('class' => 'form-control')); ?>
                        <small class='text-muted mt-2 pl-2'>https://www.managebus.com/<?php echo (!empty($article->slug)) ? $article->slug : NULL;?></small>
                    </div>
                </div>
                <div class='col-6'>
                    <div class='form-group'>
                        <?php echo \Form::label('Category', 'category[]'); ?>
                        <?php echo \Form::select('category[]', (!empty($article->categories)) ? $article->categories : array(), (!empty($categories)) ? array('' => 'Please Choose') + $categories : array(), array('class' => 'custom-select', 'multiple'));?>
                    </div>
                </div>
                <div class='col-12'>
                    <div class='form-group'>
                        <?php echo \Form::textarea('content', (!empty($article->content)) ? $article->content : NULL, array('class' => 'form-control form-control-lg editor', 'rows' => 10)); ?>
                    </div>
                </div>
                <div class='col-12'>
                    <div class='form-group'>
                        <div class='custom-control custom-checkbox custom-checkbox-switch'>
                            <?php echo \Form::checkbox('publish', true, (!empty($article->publish)) ? true : false, array('class' => 'custom-control-input')); ?>
                            <?php echo \Form::label('Publish', 'publish', array('class' => 'custom-control-label')); ?>
                        </div>
                    </div>
                </div>
                <div class='col-12'>
                    <div class='form-group text-right'>
                        <?php echo \Form::hidden('id', (!empty($article->id)) ? \Crypt::encode($article->id) : NULL); ?>
                        <button class='btn btn-lg btn-primary text-uppercase' type='submit'>Save</button>
                    </div>
                </div>
                <?php echo \Form::close(); ?>
            </div>
        </div>
    </div>
</section>
<?php echo \Asset::cdn('js/vendor/ckeditor/ckeditor.js'); ?>
<script type='text/javascript'>
    window.onload = function() {
        CKEDITOR.replace( 'content' );
    };
</script>

