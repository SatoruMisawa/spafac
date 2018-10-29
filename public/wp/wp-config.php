<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'spafac');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'spafac');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'aHw6SGyxtPm3');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{OW./`YbJEk ^kyqoGU_=F48M(8&~RnyyF=)EqRN}OL}yLY37<Eq v+W<`0K?t-~');
define('SECURE_AUTH_KEY',  'y:}Hm)S[.0Ffm9jTDI0z>a_Z7E8RO.1d!1]+>4P{I0)!rzww[x.JBU?VZ!Oc_2[;');
define('LOGGED_IN_KEY',    'EQdv5Dam[5u{0<L@7D<RGDEO`@YBL8PV:N+X!nE5ngWnG<yzl=!^rqLZ33.`OgJ,');
define('NONCE_KEY',        '*_3!2vGT[]Fd=L[bTG6=Qk466O}&v,e<*O&_F*Dgf$uptP4}#lcW;!F;!NufWf/K');
define('AUTH_SALT',        '3x>$&G^IenWu3)Ic`aAs8Ny,/:@}kZ9r|9)]dph|KV@FzwG)$&]2H?[KF,|2MXqV');
define('SECURE_AUTH_SALT', 'vba,o%uo1d30]{gORNzOjzv1_-l(}q*f4Tlf^J=D?XV8~`}K8mi~t?h`istnG%PU');
define('LOGGED_IN_SALT',   'u;~iSb~>Pt&_y&UN&j#TGi?xlCC8pNV86`nw[r=~/S4U<6r`IRgg0^xO;FJ=~L`E');
define('NONCE_SALT',       'bFN$KmZ[cy.O6$0DTs*1(]0Ys-FLub*6wyf>hVo{qv[)i==&yVsKS.tk<L-v[]ZV');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp0622_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');

define('FS_CHMOD_DIR', (02775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
