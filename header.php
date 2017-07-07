<?php/**
* @package DLang
* @subpackage DBlog
* @since DBlog 1.0
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script type="text/javascript">document.body.className += ' have-javascript'</script>
    <div id="top">
        <div class="helper">
            <div class="helper expand-container">
                <div class="logo">
                <a href="https://dlang.org/"><image id="logo" alt="D Logo" src="<?php bloginfo('template_directory') ?>/images/dlogo.svg"></image></a>
                </div>
                <a href="https://dlang.org/menu.html" title="Menu" class="hamburger expand-toggle">
                    <span>Menu</span>
                </a>
                <div id="cssmenu">
                    <ul>
                        <li><a href="https://tour.dlang.org"><span>Learn</span></a></li>
                        <li class="expand-container">
                            <a class="expand-toggle" href="https://dlang.org/documentation.html"><span>Documentation</span>
                            </a>
                            <ul class="expand-content">
                                <li><a href="https://dlang.org/spec/spec.html">Language Reference</a></li>
                                <li><a href="https://dlang.org/phobos/index.html">Library Reference</a></li>
                                <li><a href="http://dlang.org/dmd.html">Command-line Reference</a></li>
                                <li><a href="https://dlang.org/comparison.html">Feature Overview</a></li>
                                <li><a href="https://dlang.org/articles.html">Articles</a></li>
                            </ul>
                        <li>
                        <li><a href="https://dlang.org/download.html"><span>Downloads</span></a></li>
                        <li><a href="https://code.dlang.org"><span>Packages</span></a></li>
                        <li class="expand-container active">
                            <a class="expand-toggle" href="https://dlang.org/community.html"><span>Community</span>
                            </a>
                            <ul class="expand-content">
                                <li><a class="active" href="https://dlang.org/blog">Blog</a></li>
                                <li><a href="http://dlang.org/orgs-using-d.html">Orgs using D</a></li>
                                <li><a href="https://twitter.com/search/q=%23dlang">Twitter</a></li>
                                <li><a href="https://forum.dlang.org">Forums</a></li>
                                <li><a href="irc://irc.freenode.net/d">IRC</a></li>
                                <li><a href="https://wiki.dlang.org">Wiki</a></li>
                                <li><a href="https://github.com/dlang">GitHub</a></li>
                                <li><a href="http://dlang.org/bugstats.php">Issues</a></li>
                            </ul>
                        </li>
                        <li class="expand-container">
                            <a class="expand-toggle" href="https://dlang.org/resources.html"><span>Resources</span>
                            </a>
                            <ul class="expand-content">
                                <li><a href="https://wiki.dlang.org/Books">Books</a></li>
                                <li><a href="https://wiki.dlang.org/Tutorials">Tutorials</a></li>
                                <li><a href="https://wiki.dlang.org/Development_tools">Tools</a></li>
                                <li><a href="https://wiki.dlang.org/Editors">Editors</a></li>
                                <li><a href="https://wiki.dlang.org/IDEs">IDEs</a></li>
                                <li><a href="http://rainers.github.io/visuald/visuald/StartPage.html">Visual D</a></li>
                                <li><a href="https://dlang.org/acknowledgements.html">Acknowledgements</a></li>
                                <li><a href="https://dlang.org/dstyle.html">D Style</a></li>
                                <li><a href="https://dlang.org/glossary.html">Glossary</a></li>
                                <li><a href="https://dlang.org/sitemap.html">Sitemap</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

    <div id="sidebar" class="sidebar">
        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <?php
                    twentyfifteen_the_custom_logo();

                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description"><?php echo $description; ?></p>
                    <?php endif;
                ?>
                <button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
            </div><!-- .site-branding -->
        </header><!-- .site-header -->

        <?php get_sidebar(); ?>
    </div><!-- .sidebar -->

    <div id="content" class="site-content">
