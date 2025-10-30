<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(<?=base_url("/public/")?>images/background/bg10.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Case Studies</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="https://www.spritegenix.com/">Home</a></li>
                        <li class="active">Case Studies</li>
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
                <div class="blog-posts">
                    <?php if (!empty($posts) && is_array($posts)): ?>
                        <?php foreach ($posts as $post): ?>
                            <!--News Block-->
                            <div class="news-block-two">
                                <div class="inner-box">
                                    <?php if (!empty($post['featured'])): ?>
                                        <div class="image-box">
                                            <a href="<?= base_url('casestudy/' . esc($post['slug'])) ?>"><img src="<?= base_url("admin_panel/public/images/posts/" . esc($post['featured'])) ?>" alt="<?= esc($post['alt']) ?>"></a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="lower-box">
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><span class="far fa-clock"></span> <?= date('d M', strtotime($post['datetime'])) ?></li>
                                                <li><span class="far fa-user-circle"></span> Admin</li>
                                                <!-- <li><span class="far fa-comments"></span> 2 Comments</li> -->
                                            </ul>
                                        </div>
                                        <h4><a href="<?= base_url('casestudy/' . esc($post['slug'])) ?>"><?= esc($post['title']) ?></a></h4>
                                        <div class="text"><?= esc(substr($post['short_description'], 0, 150)) ?><?= strlen($post['short_description']) > 150 ? '...' : '' ?></div>
                                        <div class="link-box"><a class="theme-btn" href="<?= base_url('casestudy/' . esc($post['slug'])) ?>">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No case studies found.</p>
                    <?php endif; ?>
                </div>
                <div class="more-box pager">
                    <?php if ($totalPages > 1): ?>
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <?php if ($currentPage > 1): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= base_url('casestudy?page=1') ?>" aria-label="First">
                                            <span aria-hidden="true">First</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= base_url('casestudy?page=' . ($currentPage - 1)) ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                        <a class="page-link" href="<?= base_url('casestudy?page=' . $i) ?>">
                                            <?= $i ?>
                                        </a>
                                    </li>
                                <?php endfor ?>

                                <?php if ($currentPage < $totalPages): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= base_url('casestudy?page=' . ($currentPage + 1)) ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= base_url('casestudy?page=' . $totalPages) ?>" aria-label="Last">
                                            <span aria-hidden="true">Last</span>
                                        </a>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </nav>
                    <?php endif ?>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 order-first">
                <aside class="sidebar blog-sidebar">
                    <!--Sidebar Widget-->
                    <div class="sidebar-widget recent-posts">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Latest Cases</h4>
                            </div>

                            <?php if (!empty($latestPosts)): ?>
                                <?php foreach ($latestPosts as $latestPost): ?>
                                    <div class="post">
                                        <?php if (!empty($latestPost['featured'])): ?>
                                            <figure class="post-thumb"><img src="<?= base_url("admin_panel/public/images/posts/" . esc($latestPost['featured'])) ?>" alt="<?= esc($latestPost['alt']) ?>"></figure>
                                        <?php endif; ?>
                                        <h5 class="text"><a href="<?= base_url('casestudy/' . esc($latestPost['slug'])) ?>"><?= esc(substr($latestPost['title'], 0, 50)) ?></a></h5>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No latest case studies available.</p>
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

                    <!-- Add more sidebar widgets if needed -->

                </aside>
            </div>

        </div>
    </div>
</div>
