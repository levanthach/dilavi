<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'dilavi');

/** Username của database */
define('DB_USER', 'dilavi');

/** Mật khẩu của database */
define('DB_PASSWORD', 'admin');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']}$!$_,~9E.%YEb6f!30:rA|_#>ug1uh0~beTSAu+.J*-=M@Ua0`W,5x]1j~L{5_');
define('SECURE_AUTH_KEY',  'G7B]3w3<~&Gc;7}65!sd53+},-?Kr*l|.e:6rE!]dOalVC>D.Z*[vm.j36.g]!w#');
define('LOGGED_IN_KEY',    '5f/*-+=|HIX@pG?xr_<j/ ?3I18AvC}?Z|Dh|_!HbB8ZD8HWwBjzO3$5QIxXO$wW');
define('NONCE_KEY',        'k0FB~wh00dDcGJ=Btw|}r/ihSEU{}_h[J]+6|.4!LgjhuueE<83n_a3W4i^,vC/I');
define('AUTH_SALT',        'y:xa]J)|eYYvae+jpSS#%!*,_|w;?p{TZIa)0<5G0I|+_{xluyyRMJACWOt0H!fX');
define('SECURE_AUTH_SALT', 'B5l &y5hn}.eVK36@w#Q3-<D]o%*l4&/Ezio(n0`q6Ns??Hb1/l6^CG4ORZ?R@o<');
define('LOGGED_IN_SALT',   'n<Qkbdb~,&a/MT%<(h`/^$O]]$5S_t0v=ndoH0A]sQ%irfheODo|oz?5Af@Q*UV3');
define('NONCE_SALT',       'Cx[GK*p~H/p>^9XF|X&:W)MfvOc;2/xz}{f =.mQ]B|45>:/}URXxZNJ$n`(?^||');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
