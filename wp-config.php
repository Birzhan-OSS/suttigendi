<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'agroplem_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'agroplem_user' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Yfehsp2023@@' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0itG)}n%&l-&J.mRW%?iRUw^YVkW0ix0/(65:*hH;n(p5R;9;4tNZj(u<.b_#]*w' );
define( 'SECURE_AUTH_KEY',  'HmYUTE%*NL3kEhM`7t^ W( n2<*OEmo@>w]Uw)LfAkg^GHZywaQ0kI15!F|%e_`{' );
define( 'LOGGED_IN_KEY',    'hbi.z&$1 s!?uI&q[/ycD?kO`ra:^q,V:,}x-I[l<8BEh*%aXDYnA=uz(xBNi[iQ' );
define( 'NONCE_KEY',        'BN=jnVlg~cxih:Fto7SgkX3I75LAa^}H/bd9*?CyUS;r&a={8sW`9.GRI`@F}RLz' );
define( 'AUTH_SALT',        '_0hU0iZkx9d4JdO2B5YRVVDboC5pmkU+%9bLk[?2?@G)gDjDrl{kAhPC-~|W,IIj' );
define( 'SECURE_AUTH_SALT', '7Fzi[S-Rup=8NoU[:)QGIt!}Df>iE<n``X}}`#sNqVbP[EwjU~+QpX@r0`o-g]cW' );
define( 'LOGGED_IN_SALT',   'hClmi!Qz}oZ*X^a(;ISmWFC0IgOP$h&#fvwmA!$xSE8)jQ!ryQ70$8NOnd[WsUcw' );
define( 'NONCE_SALT',       '}]wU``S5|*~-<F=HPX0+mKe}XH9SJuI67se@RSz,>UVDGHNDQ4F;._4J)s}ceZAs' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
