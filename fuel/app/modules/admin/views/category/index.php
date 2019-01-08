<nav aria-label='breadcrumb' role='navigation' class='bg-primary text-white'>
    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item'><a href='<?php echo \Uri::base(); ?>'>Home</a></li>
                    <li class='breadcrumb-item'><a href='<?php echo \Uri::lang('admin'); ?>'>Administration</a></li>
                    <li class='breadcrumb-item active' aria-current='page'>Category</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class='mb-0 mt-0 pt-3 pb-0'>
    <div class='container'>
        <div class='row justify-content-center align-items-center'>
            <div class='col'>
                <div class='media align-items-center'>
                    <div class='media-body'>
                        <div class='mb-3'>
                            <h1 class='h2 mb-2'>Category</h1>
                            <span>Useful for listing associated members of a group</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-auto'>
                <a href='<?php echo \Uri::lang('admin/category/manage'); ?>' role='button' class='btn btn-sm btn-primary text-uppercase'><i class='icon-plus mr-1'></i> New Category</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class='container'>
        <div class='row justify-content-between'>
            <div class='col-12 col-md-10 col-lg-12'>
                <table class='table align-items-center'>
                    <thead>
                    <tr>
                        <th scope='col'>Name</th>
                        <th scope='col'>Slug</th>
                        <th scope='col'></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($categories)): ?>
                        <?php foreach ($categories as $category): ?>
                            <tr class='text-small'>
                                <th scope='row'>
                                    <a href='<?php echo \Uri::lang('admin/category/:action', array('action' => 'manage', 'id' => ':id'), array('id' => \Crypt::encode($category->id)));?>' class='d-flex align-items-center'>
                                        <span class='text-body'><?php echo $category->name;?></span>
                                    </a>
                                </th>
                                <td><?php echo $category->slug;?></td>
                                <td class='text-right'>
                                    <div class='dropdown d-inline-block'>
                                        <button class='btn btn-sm btn-outline-primary dropdown-toggle dropdown-toggle-no-arrow'
                                                type='button' id='dropdownMenuButton-1' data-toggle='dropdown'
                                                aria-haspopup='true' aria-expanded='false'>
                                            <i class='icon-dots-three-horizontal'></i>
                                        </button>
                                        <div class='dropdown-menu dropdown-menu-sm'
                                             aria-labelledby='dropdownMenuButton'>
                                            <a class='dropdown-item' href='<?php echo \Uri::lang('admin/category/:action', array('action' => 'manage', 'id' => ':id'), array('id' => \Crypt::encode($category->id)));?>'>Edit</a>
                                            <div class='dropdown-divider'></div>
                                            <a class='dropdown-item' href='<?php echo \Uri::lang('admin/category/:action', array('action' => 'delete', 'id' => ':id'), array('id' => \Crypt::encode($category->id)));?>' onclick='return confirm("Please confirme");'>Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>