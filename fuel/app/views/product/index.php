<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home');?></a></li>
                    <li class="breadcrumb-item"><?php echo __('breadcrumb.product');?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row justify-content-center text-center section-intro">
            <div class="col-12 col-md-9 col-lg-8">
                <span class="title-decorative">Success Stories</span>
                <h2 class="display-4">They did it with Wingman</h2>
                <span class="lead">We’re a growing team of passionate designers and developers looking to disrupt the industry with our bold endeavours</span>
            </div>
        </div>
        <ul class="feature-list feature-list-sm row">
            <li class="col-12">
                <a href="#" class="case-study">
                    <div class="card card-lg bg-dark text-white">
                        <?php echo \Asset::cdn('img/authkey/password-protection-hero.jpeg', array('class' => 'bg-image opacity-20'));?>
                        <div class="card-body">
                            <div>
                                <img alt="Image" src="assets/img/logo-pitstop.svg" />
                            </div>
                            <span class="h2">“The ability to quickly assemble compelling pages quickly has been a game changer.”</span>
                            <span>Pitstop launched their MVP in under 3 months with Wingman</span>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>