<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?? 'Sprite Genix | Digital Marketing, Web Development & Graphic Design Experts' ?> </title>

    <!-- === START: SEO / Social / Performance additions (added, did not change your structure) === -->
    <?php
    // Minimal fallbacks — set these in your controller if you want page-specific values
    $site_url = rtrim($site_url ?? 'https://www.spritegenix.com','/');
    $meta_description = $meta_description ?? "Sprite Genix specializes in digital marketing, web development, and graphic design, offering innovative solutions to boost your brand's online presence.";
    $meta_keywords = $meta_keywords ?? "Digital Marketing Agency Delhi, Web Development Services Delhi, Graphic Design Agency Delhi, SEO Services Uttar Pradesh, Web Development Uttar Pradesh, Digital Marketing Uttar Pradesh, Graphic Design Services Delhi";
    $canonical = $canonical ?? ($site_url . strtok($_SERVER['REQUEST_URI'],'?'));
    $og_image = $og_image ?? ($site_url . '/og.webp');
    $twitter_handle = $twitter_handle ?? '@SpriteGenix';
    $language = $language ?? 'en-IN';
    $page_type = $page_type ?? 'article'; // set to 'article' for blog posts
    $publish_date = $publish_date ?? null; // ISO8601 if available
    $modified_date = $modified_date ?? $publish_date;
    $author_name = $author_name ?? 'Sprite Genix';

    
    ?>
    <!-- Primary SEO -->
    <meta name="description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($meta_keywords, ENT_QUOTES) ?>">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="<?= htmlspecialchars($author_name, ENT_QUOTES) ?>">
    <meta name="language" content="<?= htmlspecialchars($language, ENT_QUOTES) ?>">

    <!-- Canonical & hreflang scaffold -->
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES) ?>">
    <link rel="alternate" href="<?= htmlspecialchars($site_url, ENT_QUOTES) ?>" hreflang="x-default">
    <link rel="alternate" href="<?= htmlspecialchars($site_url.'/en-in/', ENT_QUOTES) ?>" hreflang="en-IN">

    <!-- Open Graph -->
    <meta property="og:locale" content="<?= htmlspecialchars($language, ENT_QUOTES) ?>">
    <meta property="og:site_name" content="Sprite Genix">
    <meta property="og:title" content="<?= htmlspecialchars($title ?? 'Sprite Genix | Digital Marketing, Web Development & Graphic Design Experts', ENT_QUOTES) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES) ?>">
    <meta property="og:type" content="<?= htmlspecialchars($page_type, ENT_QUOTES) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?= htmlspecialchars($twitter_handle, ENT_QUOTES) ?>">
    <meta name="twitter:creator" content="<?= htmlspecialchars($twitter_handle, ENT_QUOTES) ?>">
    <meta name="twitter:title" content="<?= htmlspecialchars($title ?? 'Sprite Genix', ENT_QUOTES) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES) ?>">

  
    <!-- Preconnects & Performance hints -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- optional preload example (uncomment and point to your hero image if you want) -->
    <!-- <link rel="preload" as="image" href="<?= $site_url ?>/public/images/hero-large.webp"> -->

    <!-- Structured Data (Organization + WebSite + optional BlogPosting) -->
    <?php
    $orgJson = [
      "@context" => "https://schema.org",
      "@type" => "Organization",
      "name" => "Sprite Genix",
      "url" => $site_url,
      "logo" => $site_url . '/public/images/favicon.png',
      "sameAs" => [
        // add your real social URLs
        $site_url . '/?social=facebook',
        $site_url . '/?social=twitter',
        $site_url . '/?social=linkedin'
      ]
    ];
    $websiteJson = [
      "@context" => "https://schema.org",
      "@type" => "WebSite",
      "name" => "Sprite Genix",
      "url" => $site_url,
      "potentialAction" => [
        "@type" => "SearchAction",
        "target" => $site_url . "/search?q={search_term_string}",
        "query-input" => "required name=search_term_string"
      ]
    ];
    echo "\n    <script type=\"application/ld+json\">".json_encode($orgJson, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)."</script>\n";
    echo "    <script type=\"application/ld+json\">".json_encode($websiteJson, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)."</script>\n";
    if ($page_type === 'article' || $publish_date) {
        $blogJson = [
          "@context" => "https://schema.org",
          "@type" => "BlogPosting",
          "mainEntityOfPage"=>["@type"=>"WebPage","@id"=>$canonical],
          "headline"=>$title,
          "description"=>$meta_description,
          "image"=>[$og_image],
          "datePublished"=>$publish_date,
          "dateModified"=>$modified_date ?: $publish_date,
          "author"=>["@type"=>"Person","name"=>$author_name],
          "publisher"=>["@type"=>"Organization","name"=>"Sprite Genix","logo"=>["@type"=>"ImageObject","url"=>$site_url . '/public/images/favicon.png']]
        ];
        echo "    <script type=\"application/ld+json\">".json_encode($blogJson, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)."</script>\n";
    }
    ?>
    <!-- === END: SEO / Social / Performance additions === -->

    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Teko:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/fontawesome-all.css" rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/owl.css" rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/flaticon.css" rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/linoor-icons-2.css" rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/animate.css" rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/hover.css" rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/custom-animate.css" rel="stylesheet">
    <link href="<?= base_url("/public/")?>css/style.css" rel="stylesheet">
    <!-- rtl css -->
    <link href="<?= base_url("/public/")?>css/rtl.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="<?= base_url("/public/")?>css/responsive.css" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="<?= base_url("/public/")?>css/colors/color-default.css">

    <link rel="shortcut icon" href="<?= base_url("/public/")?>images/favicon.png" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="<?= base_url("/public/")?>images/favicon.png" id="fav-icon" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    
    <!-- === Analytics / Tracking (kept minimal & load inline; move behind consent if required) === -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5MX6EYRLT0"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-5MX6EYRLT0', { 'anonymize_ip': true });
    </script>

    <!-- Microsoft Clarity -->
    <script>
      (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, "clarity", "script", "p71cbfhpbe");
    </script>

    <!-- Meta Pixel -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '631337204991135');
      fbq('track', 'PageView');
    </script>
    <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=631337204991135&ev=PageView&noscript=1"/>
    </noscript>
    <!-- === End analytics additions === -->

</head>

<body>

    <!-- If you use Google Tag Manager, place the GTM noscript iframe immediately after this <body> tag (example commented below):
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7SNTP5K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    -->
    
    <div class="page-wrapper">
        
        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

     

        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="https://www.spritegenix.com/" title="Sprite Genix"><img
                                    src="<?= base_url("/public/")?>images/logo.png" id="thm-logo" alt="Sprite Genix"
                                    title="Sprite Genix"></a></div>
                    </div>
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                                class="txt">Menu</span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li ><a
                                            href="https://www.spritegenix.com">Home</a>
                                   
                                    </li>
                                    <li class="">
                                        <a href="https://www.spritegenix.com/about-us">About Us</a>
                                     
                                    </li>
                                    <li class=""><a href="https://www.spritegenix.com/how-it-works">How It Works</a>
                                     
                                    </li>
                                    <li class="dropdown"><a href="https://www.spritegenix.com/services">Services</a>
                                        <ul>
                                            <li><a href="https://www.spritegenix.com/graphic-designing">Graphic & Designing</a></li>
                                            <li><a href="https://www.spritegenix.com/digital-marketing">Digital Marketing</a></li>
                                            <li><a href="https://www.spritegenix.com/programming-tech">Programming & Tech</a></li>
                                            <li><a href="https://www.spritegenix.com/video-animation">Video & Animation</a></li>
                                            <li><a href="https://www.spritegenix.com/writing-translation">Writing & Translation</a></li>
                                            <li><a href="https://www.spritegenix.com/business-solution">Business Solution</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="https://www.spritegenix.com/portfolio">Portfolio</a>
                                       
                                    </li>
                               
                                    <li class="current"><a href="<?= base_url('/') ?>">Blog</a>
                                    
                                    </li>
                                    <li class="">
                                        <a href="https://www.spritegenix.com/contact">Contact</a>
                                      
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">
                    
                        <div class="link-box">
                            <div class="call-us">
                                <a class="link" href="tel:+918957865554">
                                    <span class="icon"></span>
                                    <span class="sub-text">Call Anytime</span>
                                    <span class="number">+91 8957865554</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->


        </header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="<?= base_url("/public/")?>images/icons/close-1-1.png"
                            alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <p>We're a group of creative geeks that look forward to getting up every day and doing something we enjoy.</p>
                    <p><a href="mailto:hello@spritegenix.com">hello@spritegenix.com</a> <br> <a href="tel:+918957865554">+91 8957865554</a></p>
                    <div class="side-menu__social">
                        <a href="https://www.facebook.com/spritegenix/"><i class="fab fa-facebook-square"></i></a>
                     
                        <a href="https://www.instagram.com/spritegenix/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/spritegenix/"><i class=" fab fa-linkedin"></i></a>
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->
