<?php
/*
Plugin Name: Description And Keyword
Plugin URI:  http://www.axesor.co.jp/others/description-and-keyword
Description: 記事ページと固定ページ毎にDescriptionとKeywordを設定する
Author: 株式会社AXESOR
Version: 0.1
Author URI: https://www.axesor.co.jp
*/
class DescriptionAndKeyword {


	public function __construct()
	{
		add_filter("wp_head", [$this, "showInHeader"]);
		add_action('admin_menu', [$this, "adminMenuCallBack"]);
		add_action('save_post', [$this, "savePostCallBack"]);
	}


	public function adminMenuCallBack()
	{
		add_meta_box(__CLASS__, "DescriptionとKeyword", [$this, "showCustomField"], "post");
		add_meta_box(__CLASS__, "DescriptionとKeyword", [$this, "showCustomField"], "page");
	}


	public function savePostCallBack($postId)
	{
		foreach (["keyword", "description"] as $key)
		{
			update_post_meta($postId, $key, $_POST[$key]);
		}
	}


	public function showCustomField()
	{
		require_once("edit-form.php");
	}


	public function showInHeader()
	{
		require_once("in-header.php");
	}

}
new DescriptionAndKeyword();