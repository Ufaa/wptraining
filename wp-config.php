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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'wptrainingdb' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6{S-0cg5mq+fbe0:}-Tt6K-8iq/01QEzwOv9aE(Kd5e^{aFdi]^0-4[Q?=dD-]{f' );
define( 'SECURE_AUTH_KEY',  '0=Y9@2IflL*M,^e92<c?y@hveu+]jcJ-H:~T;[X),;?~Xd[RqH( &HO}*];{?10R' );
define( 'LOGGED_IN_KEY',    'X~qRkrfrai4or&D+>^%5I$J5;70*O=Bvvo9,H`KTFb{2&E 7zEqLz)g!D_&mG?>a' );
define( 'NONCE_KEY',        '@bHuRq<805mKaf=vcMoWo{P2 SR[[wz+8{`qkO7I1_;V4Ie-2Y=(|B=O+*e)=s::' );
define( 'AUTH_SALT',        'Q[2k7(n1p)@2]G2beN>%L}wg!J`%MNOF!-LMJ]!eZ1}<.{l%CnBdFXS>4Li^& %&' );
define( 'SECURE_AUTH_SALT', '?P6VaL1@CKa7MaC*&dy1IJS|]Cf:r)6&E0OUY^hbv,nh>K)5,PLoi04(`z?W@3(&' );
define( 'LOGGED_IN_SALT',   '.3D/XHHjy^|lI3i1rgJi7w~aS6FiY:8+C 4#F{8HrMlz~CXZY9+;*^lfp@Iv.t(R' );
define( 'NONCE_SALT',       '&^.90/$GUa;QXu+vfUnZ]-k+;si_idC&*Fg6p8<}5G;By+HA,PDjxk_jRb$/3RP3' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
