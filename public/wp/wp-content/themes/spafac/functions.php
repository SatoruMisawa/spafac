<?php

//--------------------------------
//絵文字対応削除
//--------------------------------
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');

//--------------------------------
//ショートコードの追加
//--------------------------------
add_shortcode('template_dir', function ($atts, $content = "") {
	return get_template_directory_uri() . $content;
});

//----------------------------------------------------------------------
//「トピックス」カスタム投稿タイプを作成
//----------------------------------------------------------------------
add_action('init', function () {
	$params = array(
			'labels' => array(
				'name' => 'トピックス',
				'singular_name' => 'トピックス',
				'add_new' => '新規追加',
				'add_new_item' => 'トピックスを新規追加',
				'edit_item' => 'トピックスを編集',
				'new_item' => '新規トピックス',
				'all_items' => 'トピックス一覧',
				'view_item' => 'トピックスの説明を見る',
				'search_items' => '検索する',
				'not_found' => 'トピックスが見つかりませんでした。',
				'not_found_in_trash' => 'ゴミ箱内にトピックスが見つかりませんでした。'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'topics'),
			'show_in_nav_menus' =>false,
			'supports' => array(
					'title',
					'editor',
					'author',
			),
			'taxonomies' => array('topics_category','topics_tag')
	);
	register_post_type('topics', $params);
});

// カスタム投稿タイプ（topics）用のカテゴリ＆タグを作成する
add_action('init', function () {
	// カテゴリを作成
	$labels = array(
			'name'                => 'トピックスカテゴリ',        //複数型のときのカテゴリ名
			'singular_name'       => 'トピックスカテゴリ',        //単数型のときのカテゴリ名
			'search_items'        => 'トピックスカテゴリを検索',
			'all_items'           => '全てのトピックスカテゴリ',
			'parent_item'         => '親カテゴリ',
			'parent_item_colon'   => '親カテゴリ:',
			'edit_item'           => 'トピックスカテゴリを編集',
			'update_item'         => 'トピックスカテゴリを更新',
			'add_new_item'        => '新規トピックスカテゴリを追加',
			'new_item_name'       => '新規トピックスカテゴリ',
			'menu_name'           => 'トピックスカテゴリ'        //ダッシュボードのサイドバーメニュー名
	);
	$args = array(
			'hierarchical'        => true,
			'labels'              => $labels,
			'show_in_nav_menus' =>false,
			'rewrite'             => array( 'slug' => 'topics_category' )
	);
	register_taxonomy( 'topics_category', 'topics', $args );

	// タグを作成
	$labels = array(
			'name'                => 'トピックスタグ',        //複数型のときのタグ名
			'singular_name'       => 'トピックスタグ',        //単数型のときのタグ名
			'search_items'        => 'トピックスタグを検索',
			'all_items'           => '全てのトピックスタグ',
			'parent_item'         => null,
			'parent_item_colon'   => null,
			'edit_item'           => 'トピックスタグを編集',
			'update_item'         => 'トピックスタグを更新',
			'add_new_item'        => '新規トピックスタグを追加',
			'new_item_name'       => '新規トピックスタグ',
			'separate_items_with_commas'   => 'トピックスタグをコンマで区切る',
			'add_or_remove_items'          => 'トピックスタグを追加or削除する',
			'choose_from_most_used'        => 'よく使われているトピックスタグから選択',
			'not_found'                    => 'アイテムは見つかりませんでした',
			'menu_name'                    => 'トピックスタグ'        //ダッシュボードのサイドバーメニュー名
	);
	$args = array(
			'hierarchical'            => false,
			'labels'                  => $labels,
			'show_in_nav_menus' =>false,
			'update_count_callback'   => '_update_post_term_count',    //タグの動作に必要なCallback設定
			'rewrite'                 => array( 'slug' => 'topics_tag' )
	);

	register_taxonomy( 'topics_tag', 'topics', $args );
});

//----------------------------------------------------------------------
//「ニュース」カスタム投稿タイプを作成
//----------------------------------------------------------------------
add_action('init', function () {
	$params = array(
			'labels' => array(
				'name' => 'ニュース',
				'singular_name' => 'ニュース',
				'add_new' => '新規追加',
				'add_new_item' => 'ニュースを新規追加',
				'edit_item' => 'ニュースを編集',
				'new_item' => '新規ニュース',
				'all_items' => 'ニュース一覧',
				'view_item' => 'ニュースの説明を見る',
				'search_items' => '検索する',
				'not_found' => 'ニュースが見つかりませんでした。',
				'not_found_in_trash' => 'ゴミ箱内にニュースが見つかりませんでした。'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'news'),
			'show_in_nav_menus' =>false,
			'supports' => array(
					'title',
					'editor',
					'author',
			),
			'taxonomies' => array('news_category','news_tag')
	);
	register_post_type('news', $params);
});

// カスタム投稿タイプ（news）用のカテゴリ＆タグを作成する
add_action('init', function () {
	// カテゴリを作成
	$labels = array(
			'name'                => 'ニュースカテゴリ',        //複数型のときのカテゴリ名
			'singular_name'       => 'ニュースカテゴリ',        //単数型のときのカテゴリ名
			'search_items'        => 'ニュースカテゴリを検索',
			'all_items'           => '全てのニュースカテゴリ',
			'parent_item'         => '親カテゴリ',
			'parent_item_colon'   => '親カテゴリ:',
			'edit_item'           => 'ニュースカテゴリを編集',
			'update_item'         => 'ニュースカテゴリを更新',
			'add_new_item'        => '新規ニュースカテゴリを追加',
			'new_item_name'       => '新規ニュースカテゴリ',
			'menu_name'           => 'ニュースカテゴリ'        //ダッシュボードのサイドバーメニュー名
	);
	$args = array(
			'hierarchical'        => true,
			'labels'              => $labels,
			'show_in_nav_menus' =>false,
			'rewrite'             => array( 'slug' => 'news_category' )
	);
	register_taxonomy( 'news_category', 'news', $args );

	// タグを作成
	$labels = array(
			'name'                => 'ニュースタグ',        //複数型のときのタグ名
			'singular_name'       => 'ニュースタグ',        //単数型のときのタグ名
			'search_items'        => 'ニュースタグを検索',
			'all_items'           => '全てのニュースタグ',
			'parent_item'         => null,
			'parent_item_colon'   => null,
			'edit_item'           => 'ニュースタグを編集',
			'update_item'         => 'ニュースタグを更新',
			'add_new_item'        => '新規ニュースタグを追加',
			'new_item_name'       => '新規ニュースタグ',
			'separate_items_with_commas'   => 'ニュースタグをコンマで区切る',
			'add_or_remove_items'          => 'ニュースタグを追加or削除する',
			'choose_from_most_used'        => 'よく使われているニュースタグから選択',
			'not_found'                    => 'アイテムは見つかりませんでした',
			'menu_name'                    => 'ニュースタグ'        //ダッシュボードのサイドバーメニュー名
	);
	$args = array(
			'hierarchical'            => false,
			'labels'                  => $labels,
			'show_in_nav_menus' =>false,
			'update_count_callback'   => '_update_post_term_count',    //タグの動作に必要なCallback設定
			'rewrite'                 => array( 'slug' => 'news_tag' )
	);

	register_taxonomy( 'news_tag', 'news', $args );
});

//----------------------------------------------------------------------
// トピックス取得クエリー
//----------------------------------------------------------------------
function my_topics_query($cnt = 3) {
	
	$args = array(
		'post_type' => 'topics',
		'posts_per_page' => $cnt,
	);
	
	$posts = array();
	$query = new WP_Query($args);
	
	return $query;
}

//----------------------------------------------------------------------
// ニュース取得クエリー
//----------------------------------------------------------------------
function my_news_query($cnt = 3) {
	
	$args = array(
		'post_type' => 'news',
		'posts_per_page' => $cnt,
	);
	
	$posts = array();
	$query = new WP_Query($args);
	
	return $query;
}

//----------------------------------------------------------------------
// 新着？
//----------------------------------------------------------------------
function my_is_new($post, $days = 5) {
	
	$now = date_i18n('U');
	$entry = get_the_time('U', $post);
	$term = date('U', $now - $entry) / 86400;
	
	return $term <= $days;
	
}

//----------------------------------------------------------------------
// URL
//----------------------------------------------------------------------
function my_url($path) {
	return '/' . $path;
}
