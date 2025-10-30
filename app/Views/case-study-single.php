<!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(<?=base_url("/public/")?>images/background/bg10.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1><?= esc(substr($post['title'], 0, 40)) ?></h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="https://www.spritegenix.com/">Home</a></li>
                                <li><a href="<?= base_url('/casestudy') ?>">Case Study</a></li>
                                <li class="active"><?= esc(substr($post['title'], 0, 40)) ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-details">
                            <!--News Block-->
                            <div class="post-details">
                                <div class="inner-box">
                                    <div class="">
                                        <?php if (!empty($post['featured']) ): ?>
                                            <a href="#"><img src="<?= base_url("admin_panel/public/images/posts/" . esc($post['featured'])) ?>" alt="<?= esc($post['alt']) ?>"></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="lower-box">
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><span class="far fa-clock"></span> <?= date('d M, Y', strtotime($post['datetime'])) ?></li>
                                                <li><span class="far fa-user-circle"></span> Admin</li>
                                                <!-- <li><span class="far fa-comments"></span> 0 Comments</li> -->
                                            </ul>
                                        </div>
                                        <h4><?= esc($post['title']) ?></h4>
                                        <div class="text">
                                            <?= $post['description'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-row clearfix">
                                    <div class="tags-info"><strong>Tags:</strong>
                                        <?php if (!empty($post['post_tags']) && is_array($post['post_tags'])): ?>
                                            <?php foreach ($post['post_tags'] as $tag): ?>
                                                <a href="<?= base_url('casestudy/tag/' . esc($tag['slug'])) ?>"><?= esc($tag['name']) ?></a>
                                                <?php if (next($post['post_tags'])): ?>, <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="cat-info"><strong>Category:</strong> <a href="<?= base_url('casestudy/category/' . esc($post['category_slug'])) ?>"><?= esc($post['cat_name']) ?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                       <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar blog-sidebar sticky-sidebar">
                            <!--Sidebar Widget-->


                            <div class="sidebar-widget recent-posts">
                                <div class="widget-inner" >
                                    <div class="sidebar-title">
                                        <h4>Latest Posts</h4>
                                    </div>

                                    <?php if (!empty($latestPosts)): ?>
                                        <?php foreach ($latestPosts as $latestPost): ?>
                                            <div class="post">
                                                <?php if (!empty($latestPost['featured']) ): ?>
                                                    <figure class="post-thumb "><img src="<?= base_url("admin_panel/public/images/posts/" . esc($latestPost['featured'])) ?>" alt="<?= esc($latestPost['alt']) ?>"></figure>
                                                <?php endif; ?>
                                                <h5 class="text"><a href="<?= base_url('casestudy/' . esc($latestPost['slug'])) ?>"><?= esc(substr($latestPost['title'], 0, 45)) ?><?= strlen($latestPost['title']) > 50 ? '...' : '' ?></a></h5>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>No latest posts available.</p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="sidebar-widget archives">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Categories</h4>
                                    </div>
                                    <ul>
                                        <?php if (!empty($categories)): ?>
                                            <?php foreach ($categories as $category): ?>
                                                <li><a href="<?= base_url('casestudy/category/' . esc($category['slug'])) ?>"><?= esc($category['category_name']) ?></a></li>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <li>No categories available.</li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>



                        </aside>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End pagewrapper-->
