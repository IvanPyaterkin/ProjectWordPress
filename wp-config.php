<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'ProjectWP');

/** Имя пользователя MySQL */
define('DB_USER', 'projectwp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*<{f+)ErA5fB;{5_]PN+!tq]S33v:7BF<Lf5I[_(&e!^df^$PF2Kv+iyTEhN`l.}');
define('SECURE_AUTH_KEY',  '/lXsp=Z:XRkD=C~ol))^P16;ZQV++%OdT( 0Al)m^;Qs`|AJRp|0,qh3JadH~Mc^');
define('LOGGED_IN_KEY',    'kUp@~+w%2QbIQbd6UO Wp%]YF#Jn{t/n~91jnmhSwz,T`4[K$aSHxO;5C|U{4Y]D');
define('NONCE_KEY',        'uym)|PF|~8S2/(e,pwwBwx||t=6*+5-/Cvg]C*g!MX4UF/$_:/Qd~`GX-7_:/:14');
define('AUTH_SALT',        '|h8L:|#~x!9u7x%X{DR^vArC(dNQ96q:I/>:I0hi!~M3Bv9<-/q|:irMH1Dc-wZV');
define('SECURE_AUTH_SALT', 'lG2+*-;MvP`/~K*x^L8y.pkh0xcLkwuN&IVn@q-i7!N;$yO6p(f]QEU0i]B}@kyr');
define('LOGGED_IN_SALT',   '6dGQ+`Je./-:FbF {N,X1#=uzW,Lx^v}]hvx*|,!LFP+,nARf|#+}+~9#L72KoiF');
define('NONCE_SALT',       '3xE03r5Tjp@!IY:P^T7-9JR)jwuiyZI.|Usu&%1b1J@g&C`l@G}k}]+XK-iRG+V<');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
