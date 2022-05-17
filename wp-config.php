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
 * * Настройки MySQL
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
define( 'DB_NAME', 'real' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'dv^b4=-nHYGc7A5d|~5Y|S0tw9|(L|h9Pc`LxOnRIsbo,:edhYul!zC~+k5Kh}5x' );
define( 'SECURE_AUTH_KEY',  'u_$G]4M@oPC&O%CI~~B,H A?U)qbR+p{a3Zt(zKT:)-*]AJ#1984>G[D7azL4qC^' );
define( 'LOGGED_IN_KEY',    'E-;IE]w@W.KmQJKS1tf@E(.RXQVze&%vT)Y4U=I KxJm9y=#&g8DXz{dY{nXLu<f' );
define( 'NONCE_KEY',        '`gkTuO-dVdk;z0Sg?|6y/mVWB!*sGOrP-)JA!CkIxwQW$HGVovCjg&V:F#ZTuPTJ' );
define( 'AUTH_SALT',        '.4@kF,Dg>v|a?k>=`PxK4w[H CUm4p-+xS^I=_GUcxaRHUtSh5C^en7S,Gb,:ZXF' );
define( 'SECURE_AUTH_SALT', '5`ra&V7+e^%f8jj/;u,gmb#QpWy}@/Qn%v>Bba+1b8T)1v[[Rqv2L^_D`/r)/_Tu' );
define( 'LOGGED_IN_SALT',   'Eh`gF?y8bAMuk)KmO_Pap--APGSd ;uNC8K?4-sQl#_)|ay0]#a^g%aV=6/Or[v~' );
define( 'NONCE_SALT',       ' o?+7BmZ3JT<IT9H$4?7Fha/iH~,j?gRmWeNN;p:8vUi7J:EgHcXiR_`O18ua9$_' );

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
