<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home');?></a></li>
                    <li class="breadcrumb-item"><?php echo __('breadcrumb.notifications');?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class="space-sm">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9 mb-1 order-md-2">
                <div class="card card-sm">
                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Active Conversations</h6>
                        </div>
                        <form class="d-flex align-items-center">
                            <span class="mr-2 text-muted text-small text-nowrap">Sort by:</span>
                            <select class="custom-select">
                                <option value="old-new" selected>Newest</option>
                                <option value="new-old">Popular</option>
                                <option value="most">Most Comments</option>
                            </select>
                        </form>
                    </div>
                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media">
                                <div class="media-body">
                                    <div>
                                        <span class="text-muted text-small">Kevin Young</span>
                                        <h5 class="h6 mb-1">Found this cool UX resource, thoughts?
                                            <span class="badge badge-indicator badge-success">&nbsp;</span>
                                        </h5>
                                        <ul class="list-inline text-small text-muted">
                                            <li class="list-inline-item"><i class="icon-code mr-1"></i>Development</li>
                                            <li class="list-inline-item"><i class="icon-message mr-1"></i>7</li>
                                            <li class="list-inline-item">
                                                <small>Updated: 3 days ago</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center">

                </div>
            </div>
            <div class="col-12 col-md-3 mb-1 order-md-1">
                <div class="card">
                    <div class="card-body">
                        <form class="mb-4">
                            <input class="form-control" placeholder="Search" type="search" name="search-conversations" />
                        </form>
                        <nav class="nav flex-md-column">
                            <a href="#" class="nav-link active">All</a>
                            <a href="#" class="nav-link">
                                <span class="badge badge-indicator badge-success mr-1">&nbsp;</span>On track</a>
                            <a href="#" class="nav-link">
                                <span class="badge badge-indicator badge-warning mr-1">&nbsp;</span>Falling behind</a>
                            <a href="#" class="nav-link">
                                <span class="badge badge-indicator badge-danger mr-1">&nbsp;</span>Needs attention</a>
                            <a href="#" class="nav-link">
                                <span class="badge badge-indicator badge-secondary mr-1">&nbsp;</span>Archived</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>