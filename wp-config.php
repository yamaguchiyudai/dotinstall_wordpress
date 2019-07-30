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
define('DB_NAME', 'dotinstall_wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ia@MR|cd0b}#@i9MMrp=>:--a)41Vnz0g:?@j,.*H}(! =CWtqz)zsE6 &c0j<-U');
define('SECURE_AUTH_KEY',  'WYUwx8uX02>=`-QNJpC)pVP3)a7T446*+8iPe?-`/70+>;}@{SFRmeL7w*Xvgu?/');
define('LOGGED_IN_KEY',    'vN+}-b&[~K&da)#DZ|iw^5Q{S3fnt|gEuCu*zF&],xcDwBWEBj#OLJ()s-/@hj`^');
define('NONCE_KEY',        'Zv0z+f]S[EB*1OO_}(*A.XHoepK|?z]zIwq]}0x2p~|2CA*l`*nlh=Y-,}qSOBLL');
define('AUTH_SALT',        '0n<|#~] CQ@M^O(-A?vMRQuq<y`q1DX8/FQ}D%~J`!R@p6|E)eNym[#)Du@)9!c:');
define('SECURE_AUTH_SALT', 'w4|O):Q<:.w!b3ey>mhZbyMXe]ZE#|J{Eb- {?5Fviy3sETb-Irn2;xOOXTvfe@4');
define('LOGGED_IN_SALT',   'x)ApJ|c1g$`-Hqd-F)vF^4,mDgCj.fHpo<`Ur+j|2qML0#?XIx=L*gV7*|mxaqsM');
define('NONCE_SALT',       'u>*nhryzCe$z@{p$Ez=|B!AJp5Ci^9M->pe/Qad0YV9[:6r5R$-yI@vs+qDX@TCf');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
