<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?>">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">

<?php require_once(dirname(__FILE__).'/alerts.php'); ?>

    <header id="page-header" class="clearfix">
        <?php echo $html->heading; ?>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>

        <div class="scontent">
            <form action="<?php echo $CFG->wwwroot;?>/blocks/search/" method="get" class="SsearchBlockForm">
                <input type="text" placeholder="Sök i hela The CELL" value="" class="SsearchBlockInput" name="q">
                <button class="searchButton"><i class="fa fa-search"></i> Sök</button>
            </form>
        </div>

        <div id="header-nav" class = "clearfix">
            <nav class="header-navbar">
                <ul>
                    <li><a href = "<?php echo $CFG->wwwroot;?>">Hem</a></li>
                    <li><a href = "<?php echo $CFG->wwwroot;?>/my">Min Sida</a></li>
                    <li><a href = "<?php echo $CFG->wwwroot;?>/course">Kurser</a></li>
                    <li><a href = "<?php echo $CFG->wwwroot;?>/course/view.php?id=8&section=0&sesskey=<?php echo $USER->sesskey;?>&edit=on">Rutiner</a></li>
                    <li><a href = "<?php echo $CFG->wwwroot;?>/blocks/repo_filemanager/index.php?id=1">Material</a></li>
                    <li><a href = "<?php echo $CFG->wwwroot;?>/calendar">Kalender</a></li>
                    <li><a href = "<?php echo $CFG->wwwroot;?>">Kontakt</a></li>
                </ul>
            </nav> 
        </div>
        
        <div id="page-navbar" class="clearfix">
            <div class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></div>
            <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
        </div>
        
        
    </header>

    <div id="page-content" class="row-fluid">

        <?php
if (!$left) { ?>
    <section id="region-main" class="span9 pull-left">
<?php } else { ?>
    <section id="region-main" class="span9">
<?php } ?>

        <?php
        echo $OUTPUT->course_content_header();
        echo $OUTPUT->main_content();
        echo $OUTPUT->course_content_footer();
        ?>
    </section>
        <?php echo $OUTPUT->blocks('side-pre', 'span3'); ?>
        <?php echo $OUTPUT->blocks('side-post', 'span3 pull-right'); ?>
    </div>
