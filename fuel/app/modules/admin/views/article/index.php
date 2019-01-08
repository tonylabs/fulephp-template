<nav aria-label='breadcrumb' role='navigation' class='bg-primary text-white'>
    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item'><a href='<?php echo \Uri::base(); ?>'>Home</a></li>
                    <li class='breadcrumb-item'><a href='<?php echo \Uri::lang('admin'); ?>'>Administration</a></li>
                    <li class='breadcrumb-item active' aria-current='page'>Article</li>
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
                            <h1 class='h2 mb-2'>Article</h1>
                            <span>Useful for listing associated members of a group</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-auto'>
                <a href='<?php echo \Uri::lang('admin/article/manage'); ?>' role='button' class='btn btn-sm btn-primary text-uppercase'><i class='icon-plus mr-1'></i> New Article</a>
            </div>
        </div>
    </div>
</section>
<section class='space-sm'>
    <div class='container'>
        <div class='row justify-content-between'>
            <div class='col-12 col-md-3'>
                <?php if (!empty($sidebar)) echo $sidebar; ?>
            </div>
            <div class='col-12 col-md-9'>
                <div class='d-flex justify-content-between align-items-center mb-4'>
                    <div>
                        <span class='text-muted text-small'>Results 1 - 12 of 25</span>
                    </div>
                    <form class='d-flex align-items-center'>
                        <span class='mr-2 text-muted text-small text-nowrap'>Sort by:</span>
                        <select class='custom-select'>
                            <option value='alpha'>Alphabetical</option>
                            <option value='old-new' selected>Newest</option>
                            <option value='new-old'>Oldest</option>
                            <option value='recent'>Recently Modified</option>
                        </select>
                    </form>
                </div>
                <table class='table align-items-center'>
                    <thead>
                    <tr>
                        <th scope='col'>Title</th>
                        <th scope='col'>Created</th>
                        <th scope='col'></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($articles)): ?>
                        <?php foreach ($articles as $article): ?>
                            <tr class='text-small'>
                                <th scope='row'>
                                    <a href='<?php echo \Uri::create('admin/article/:action', array('action' => 'manage', 'id' => ':id'), array('id' => \Crypt::encode($article->id))); ?>'
                                       class='d-flex align-items-center'>
                                        <div class='thumbnail thumbnail-sm'>
                                            <i class='icon-eye text-<?php echo ($article->publish) ? 'primary' : 'gray'; ?> h4'></i>
                                        </div>
                                        <span class='text-body'><?php echo $article->title; ?></span>
                                    </a>
                                </th>
                                <td><?php echo \Date::forge($article->ctime)->format('%Y-%m-%d'); ?></td>
                                <td class='text-right'>
                                    <div class='dropdown d-inline-block'>
                                        <button class='btn btn-sm btn-outline-primary dropdown-toggle dropdown-toggle-no-arrow'
                                                type='button' id='dropdownMenuButton-1' data-toggle='dropdown'
                                                aria-haspopup='true' aria-expanded='false'>
                                            <i class='icon-dots-three-horizontal'></i>
                                        </button>
                                        <div class='dropdown-menu dropdown-menu-sm'
                                             aria-labelledby='dropdownMenuButton'>
                                            <a class='dropdown-item'
                                               href='<?php echo \Uri::create('admin/article/:action', array('action' => 'manage', 'id' => ':id'), array('id' => \Crypt::encode($article->id))); ?>'>Edit</a>
                                            <div class='dropdown-divider'></div>
                                            <a class='dropdown-item'
                                               href='<?php echo \Uri::create('admin/article/:action', array('action' => 'delete', 'id' => ':id'), array('id' => \Crypt::encode($article->id))); ?>'
                                               onclick='return confirm("Please confirme");'>Delete</a>
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