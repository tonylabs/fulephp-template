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
                    <li class='breadcrumb-item'><a href='<?php echo \Uri::lang('admin/category/'); ?>'>Categories</a></li>
                    <li class='breadcrumb-item active' aria-current='page'><?php echo (!empty($category->name)) ? $category->name : 'New Category'; ?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class='flush-with-above d-block'>
    <div class='container'>
        <div class='row mb-4'>
            <div class='col'>
                <h5><?php echo (!empty($category->name)) ? $category->name : 'New Category'; ?></h5>
            </div>
        </div>
        <div class='row'>
            <div class='col-12 col-md-12 order-md-1'>
                <?php echo \Form::open(array('action' => \Uri::current(), 'method' => 'post', 'class' => 'row')); ?>
                <div class='col-12'>
                    <div class='form-group'>
                        <?php echo \Form::label('Name', 'name'); ?>
                        <?php echo \Form::input('name', (!empty($category->name)) ? $category->name : NULL, array('class' => 'form-control form-control-lg', 'required')); ?>
                        <small class='text-muted mt-2 pl-2'>https://www.managebus.com/<?php echo (!empty($category->slug)) ? $category->slug : NULL;?></small>
                    </div>
                    <div class='form-group'>
                        <?php echo \Form::label('Slug', 'slug'); ?>
                        <?php echo \Form::input('slug', (!empty($category->slug)) ? $category->slug : NULL, array('class' => 'form-control form-control-lg text-lowercase', 'required')); ?>
                    </div>
                    <div class='form-group'>
                        <?php echo \Form::label('Icon', 'icon'); ?>
                        <?php echo \Form::input('icon', (!empty($category->icon)) ? $category->icon : NULL, array('class' => 'form-control form-control-lg', 'required')); ?>
                        <small class='text-muted mt-2 pl-2'></small>
                    </div>
                </div>
                <div class='col-12'>
                    <div class='form-group'>
                        <div class='custom-control custom-checkbox custom-checkbox-switch'>
                            <?php echo \Form::checkbox('visible', true, (!empty($category->visible)) ? true : false, array('class' => 'custom-control-input')); ?>
                            <?php echo \Form::label('Visible', 'visible', array('class' => 'custom-control-label')); ?>
                        </div>
                    </div>
                </div>
                <div class='col-12'>
                    <div class='form-group text-right'>
                        <?php echo \Form::hidden('id', (!empty($category->id)) ? \Crypt::encode($category->id) : NULL); ?>
                        <button class='btn btn-lg btn-primary text-uppercase' type='submit'>Save</button>
                    </div>
                </div>
                <?php echo \Form::close(); ?>
            </div>
        </div>
    </div>
</section>
<?php //echo \Asset::cdn('js/vendor/ckeditor/classic/ckeditor.js'); ?>
<script type='text/javascript'>

</script>

