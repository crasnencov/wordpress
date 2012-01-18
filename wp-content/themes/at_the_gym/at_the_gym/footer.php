<div class="art-Footer">
    <div class="art-Footer-inner">
                <a href="<?php bloginfo('rss2_url'); ?>" class="art-rss-tag-icon" title="RSS"></a>
                <div class="art-Footer-text">
<p>
<?php 
 global $default_footer_content;
 $footer_content = get_option('art_footer_content');
 if ($footer_content === false) $footer_content = $default_footer_content;
 echo $footer_content;
?>
</p>
</div>
    </div>
    <div class="art-Footer-background">
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="cleared"></div>
<p class="art-page-footer">
		<b>Powered By:</b> <a href="http://www.wpfree.ru/">Темф для WordPress</a> |

        <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> |

        <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a> |

        <b>Designed By:</b> InMotion <a href="http://www.inmotionhosting.com/vps_hosting.html">VPS Hosting</a> |

        <a href="http://www.wpland.ru">Шаблоны Wordpress</a>

        <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
</p>
</div>

<!-- <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?> -->
<div><?php wp_footer(); ?></div>
</body>
</html>
