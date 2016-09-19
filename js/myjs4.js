jQuery("html").addClass("togglejs");
jQuery(document).ready(function(){
	jQuery("#wp-admin-bar-advanced-options").click(function(){
    	     jQuery("#adminmenu li:not(.wp-menu-separator,#menu-pages,#menu-pages li,#menu-media, #menu-media li,#menu-posts,#menu-posts li,#menu-dashboard,#menu-dashboard li),#wpadminbar li:not(#wp-admin-bar-menu-toggle,#wp-admin-bar-wp-logo,#wp-admin-bar-wp-logo li,#wp-admin-bar-site-name,#wp-admin-bar-site-name li,#wp-admin-bar-advanced-options),#screen-meta-links").toggle();
	});
});