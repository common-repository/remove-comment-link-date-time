<?php
/*
 Plugin Name: Remove Comment Link Date Time
 Plugin URI:  https://github.com/lastlap1/WP_Remove_Comment_Link_Date_Time
 Description: Remove comment author link, comment date and comment time, remove comment url field from comment formm
 Version: 1.0.0
 Author: https://github.com/comment-manager-for-wp
 Author URI: https://github.com/lastlap1/
 Text Domain: wcrldt-remove-comment-data
 License: GPLv3
 */

if (!defined('ABSPATH'))
{
	exit;
}

function wcrldt_remove_comment_author_link($return, $author, $comment_ID)
{
	return $author;
}
add_filter('get_comment_author_link','wcrldt_remove_comment_author_link',10,3);


function wcrldt_remove_url_field_from_comment_form( $fields )
{
	unset($fields['url']);
	return $fields;
}
add_filter( 'comment_form_default_fields', 'wcrldt_remove_url_field_from_comment_form' );

function wcrldt_remove_comment_date($date, $d, $comment)
{
	if (!(is_admin()))
	{
		return ;
	}
	else 
	{
		return $date;
	}
	
	
}

add_filter('get_comment_date','wcrldt_remove_comment_date',10,3);

function wcrldt_remove_comment_time($date, $d, $comment)
{
	if (!(is_admin()))
	{
		return ;
	}
	else
	{
		return $date;
	}


}

add_filter('get_comment_time','wcrldt_remove_comment_time',10,3);

