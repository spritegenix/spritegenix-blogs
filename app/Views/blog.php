

        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(<?=base_url("/public/")?>images/background/bg10.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>Blog Posts</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="https://www.spritegenix.com/">Home</a></li>
                                <li class="active">Blog Posts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">

                <div class="row clearfix">
                    <?php if (!empty($posts) && is_array($posts)): ?>
                        <?php foreach ($posts as $post): ?>
                            <!--News Block-->
                            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="" style="height: 400px;">
                                        <?php if (!empty($post['featured']) ): ?>
                                            <a  href="<?= base_url(  esc($post['slug'])) ?>"><img style="width: 100%; height: 100%; object-fit: cover" src="<?= base_url("admin_panel/public/images/posts/" . esc($post['featured'])) ?>" alt="<?= esc($post['alt']) ?>"></a>
                                        <?php else: ?>
                                            <a href="<?= base_url("/public/images/resource/default-blog-image.jpg") ?>" alt="Default Blog Image"></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="lower-box">
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><span class="far fa-clock"></span> <?= date('d M', strtotime($post['datetime'])) ?></li>
                                                <li><span class="far fa-user-circle"></span> Admin</li>
                                                <!-- <li><span class="far fa-comments"></span> 0 Comments</li> -->
                                            </ul>
                                        </div>
                                        <h5><a href="<?= base_url(  esc($post['slug'])) ?>"><?= esc(substr($post['title'], 0, 70)) ?><?= strlen($post['title']) > 70 ? '...' : '' ?></a></h5>
                                        <div class="text"><?= esc(substr($post['short_description'], 0, 80)) ?><?= strlen($post['short_description']) > 80 ? '...' : '' ?></div>
                                        <div class="link-box"><a class="theme-btn" href="<?= base_url(  esc($post['slug'])) ?>"><span
                                                    class="flaticon-next-1"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No blog posts found.</p>
                    <?php endif; ?>
                </div>
                <div class="more-box pager">
                    <?php if ($totalPages > 1): ?>
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <?php if ($currentPage > 1): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= base_url('?page=1') ?>" aria-label="First">
                                            <span aria-hidden="true">First</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= base_url('?page=' . ($currentPage - 1)) ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                        <a class="page-link" href="<?= base_url('?page=' . $i) ?>">
                                            <?= $i ?>
                                        </a>
                                    </li>
                                <?php endfor ?>

                                <?php if ($currentPage < $totalPages): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= base_url('?page=' . ($currentPage + 1)) ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="<?= base_url('?page=' . $totalPages) ?>" aria-label="Last">
                                            <span aria-hidden="true">Last</span>
                                        </a>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </nav>
                    <?php endif ?>
                </div>
            </div>
        </section>
                            </div>
                        </div>

                    

                    </div>

                </div>
            </div>

        