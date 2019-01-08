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
                    <li class='breadcrumb-item'><a href='<?php echo \Uri::lang('admin/product/'); ?>'>Products</a></li>
                    <li class='breadcrumb-item active' aria-current='page'><?php echo (!empty($product->name)) ? $product->name : 'New Product'; ?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class='flush-with-above d-block'>
    <div class='container'>
        <div class='row mb-4'>
            <div class='col'>
                <h5><?php echo (!empty($product->name)) ? $product->name : 'New Product'; ?></h5>
            </div>
        </div>
        <div class='row'>
            <div class='col-12 col-md-10 order-md-1'>
                <?php echo \Form::open(array('action' => \Uri::current(), 'method' => 'post', 'class' => 'row')); ?>
                <div class='col-12'>
                    <div class='form-group'>
                        <?php echo \Form::label('Name', 'name'); ?>
                        <?php echo \Form::input('name', (!empty($product->name)) ? $product->name : NULL, array('class' => 'form-control form-control-lg', 'required')); ?>
                        <small class='text-muted mt-2 pl-2'>https://www.managebus.com/<?php echo (!empty($product->slug)) ? $product->slug : NULL;?></small>
                    </div>
                </div>
                <div class='col-12'>
                    <div class='form-group'>
                        <?php echo \Form::label('Code', 'code'); ?>
                        <?php echo \Form::input('code', (!empty($product->code)) ? $product->code : NULL, array('class' => 'form-control form-control-lg', 'required')); ?>
                    </div>
                </div>
                <div class='col-12'>
                    <div class='form-group'>
                        <?php echo \Form::textarea('content', (!empty($product->content)) ? $product->content : NULL, array('class' => 'form-control form-control-lg editor', 'rows' => 10)); ?>
                    </div>
                </div>
                <div class='col-12'>
                    <div class='form-group'>
                        <div class='custom-control custom-checkbox custom-checkbox-switch'>
                            <?php echo \Form::checkbox('promote', true, (!empty($product->promote)) ? true : false, array('class' => 'custom-control-input')); ?>
                            <?php echo \Form::label('Promote', 'promote', array('class' => 'custom-control-label')); ?>
                        </div>
                    </div>
                </div>
                <div class='col-12'>
                    <div class='form-group text-right'>
                        <?php echo \Form::hidden('id', (!empty($product->id)) ? \Crypt::encode($product->id) : NULL); ?>
                        <button class='btn btn-lg btn-primary text-uppercase' type='submit'>Save</button>
                    </div>
                </div>
                <?php echo \Form::close(); ?>
            </div>
        </div>
    </div>
</section>
<?php echo \Asset::cdn('js/vendor/ckeditor/classic/ckeditor.js'); ?>
<script type='text/javascript'>
    ClassicEditor
        .create(document.querySelector('.editor'))
        .catch(error => {
            console.error(error);
        });
</script>

