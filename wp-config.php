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
define( 'DB_NAME', 'hometown_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'hometown_user' );

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
define( 'AUTH_KEY',         'px7wZOpUp@YZGYAA:VDg3gq;HZlBifF3a7jOrZ.-L(|PXD.&9diE]!g(:/v9i~Uz' );
define( 'SECURE_AUTH_KEY',  'dnDQ[+j+3,dbbMqF}X[$s:u%-a9=P<MVm_`2F~ZP.$h&k(a1>ocs^)BiR L(HTpm' );
define( 'LOGGED_IN_KEY',    'F]5k{s#Y7fe+8*KPE4BA3*Iz=^qaRPIlS2za^GZz$BfRs5~(Oa)Rrkc@V;a.f@?L' );
define( 'NONCE_KEY',        'i1C!NSSz7aDYeOyhuVA}*WG..`dfwNgrbUO?DMEo=j+&wuvz{<_7=.ri-;r{u^wo' );
define( 'AUTH_SALT',        'c-$W#p~HJzryWYyI(yX_G6@D3Z13-6Eb^zupk/<z):7o&UGv/c{;@AEd2L<hd< k' );
define( 'SECURE_AUTH_SALT', 'v3[Ab4gUn(go40dw2We7H2Qtqgtyf!tm8Vl2J)^ie(tl=h;]gLxDTxvJC8F|5nY{' );
define( 'LOGGED_IN_SALT',   '=),#$]$m8sq(s#dc_y:^sq.6I.=vq:+7y0xMn,,UBT41uVO0(Hqsl_? @UcR7.|T' );
define( 'NONCE_SALT',       's!s<~)MyK`%F<sLEtD/#mxAtyB_Qb>AL+[Ns1xLmJT:>p~X~@`43e1a0+cM:0[E#' );

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
