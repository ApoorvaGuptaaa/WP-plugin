<?php
/*
Plugin Name:  Sample123
Plugin URL:   https://www.sample123.local
Description:  To add your contact information at the end.
Version:      1.0
Author:       Apoorva Gupta
Author URL:   https://www.sample123.local
License:      GPL2
License URL:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  sample123
Domain Path:  /languages
*/

function sample123_follow_us($content) {
 
// Only do this when a single post is displayed
if ( is_single() ) { 
 
// Message you want to display after the post
// Add URLs to your own Twitter and Facebook profiles
 
$content .= '<p class="follow-us">If you liked this article, then please follow us on <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D" title="Sample123_Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://www.facebook.com/campaign/landing.php?campaign_id=14884913640&extra_1=s%7Cc%7C550525804791%7Cb%7Cfacebook%7C&placement=&creative=550525804791&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D14884913640%26adgroupid%3D128696220912%26matchtype%3Db%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-592856129%26loc_physical_ms%3D9151662%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjwvL-oBhCxARIsAHkOiu2KwvGEJFfPynt3IAQ9Exn0mGjMT1dEFXYWgHkHf-RsYqk1EACSk4oaAs7WEALw_wcB" title="Facebook_sample123" target="_blank" rel="nofollow">Facebook</a>.</p>';
 
}
// Return the content
return $content; 
 
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'sample123_follow_us'); 