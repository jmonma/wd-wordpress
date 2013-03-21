<?php
/*
Plugin Name: Wiredrive.com oEmbed
Description: Enable Wiredrive oEmbed support. Paste a wiredrive.com URL from the embed form into your post to embed the media.
Version: 1.0
Author: Wiredrive
Author URI: http://wiredrive.com/
*/

wp_oembed_add_provider('#(http:|https:)//.+\.wiredrive.com/\?routekey=iframe-embed&token=.+#i', 'https://cache.wdcdn.net/oembed?url=', true);
