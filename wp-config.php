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
define( 'DB_NAME', 'suttigen_wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'suttigen_user' );

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
define( 'AUTH_KEY',         '7F<=#MAo2Fxn9oZf0D(&91{7z6}%$/{~BFeWZsd)E/GHiY.bF/U}>g $2i%X+El~' );
define( 'SECURE_AUTH_KEY',  '(xq(.T/M6 Q.}Fx#pl0SM?nuuu>8LZ]If(BaY%_L1J_(&O[p_hjT$>:K^`T-G.ut' );
define( 'LOGGED_IN_KEY',    'QLJ]D9o(97*NH^;)6|C@EQ$jmD)7>{K^lXll`q^2Y#f+c;6s@-a|qk4:<osT5/Aw' );
define( 'NONCE_KEY',        'f.t{rfJqv-KKHk8gM!X=q?G?(hK)D{pAy: ocWb00K7FpKVzrQ3Sox1[*Jn nyH,' );
define( 'AUTH_SALT',        '+OuMiQ>?qo1.A$z4ad60kOmTiW}_Q3dlc|}KY.ZxiS;=*sh$@tYl#x0a}7So/]Mi' );
define( 'SECURE_AUTH_SALT', 'ji}+).e=i!@d54kL,?1-$JP>,cv&-6J;m:potf6)%;tOvJ.@A{uu[:ldoS4T+hMK' );
define( 'LOGGED_IN_SALT',   '(_xJm!+jNky2B,A_.fhQWfbs$fVlt/a/_--eG%d^*kq-L:<:l#IB_V(>As~A^;R_' );
define( 'NONCE_SALT',       'lW@2&Ev<3ArFjL2z+RL#3=MfA[zXAPPc<j`rX/GbfC*]fy>rk7IKrOp92da%,GbV' );

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
