<!DOCTYPE html>
<html>
    <head>
        	<title>
	<?php // Returns the title based on what is being viewed
			bloginfo( 'name' );
	?>
	</title>
        <meta name="author" content="Bastian Widmer" />
        <meta name="email" content="b [dot] widmer [at] dasrecht [dot] net" />
        <meta name="date" content="2010-05-30" />

        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/jquery.history.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/slippy-0.9.0.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/slippy-0.9.0.css"/>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shCore.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushBash.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushCpp.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushCSharp.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushCss.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushDelphi.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushDiff.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushGroovy.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushJava.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushJScript.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushPhp.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushPlain.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushPython.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushRuby.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushScala.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushSql.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushVb.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/highlighter/shBrushXml.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/highlighter/shCore.css"/>
        <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/highlighter/shThemeFadeToGrey.css"/>
        <script type="text/javascript">
            $(function() {
                $(".slide").slippy();
                SyntaxHighlighter.all();
            });
        </script>

    </head>
    <body>
<?php
	$pages = get_pages('child_of=0&sort_column=menu_order');
	$count = 0;
	foreach($pages as $page)
	{
		$content = $page->post_content;
		if(!$content)
			continue;
		//if($count >= 2)
			//break;
		$count++;
		$content = apply_filters('the_content', $content);
	?>
	        <div class="slide">
		<h1><?php echo $page->post_title ?></h1>
		<?php echo $content ?>
		</div>
	<?php
	}
?>
        <div class="footer">
            <span class="left">René Stalder, Bastian Widmer</span>
        </div>
    </body>
</html>
