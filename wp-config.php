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
define( 'DB_NAME', 'ktelecom' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         'vx=Mu`RnZ!2QV`,joiR0F78z-3q bftxkl=`Zg?jGG(bu^Yq9:R2!,M8.*5FU^K,' );
define( 'SECURE_AUTH_KEY',  'Nf_H4XDmlM2zThmQ0hXx3$)U5L+majV[sqC5nS.7xW2#f<m1/Zz><sh oHOZbs-z' );
define( 'LOGGED_IN_KEY',    'fvZ^dkx}*2U>p7i9jSie`I>}t=QU##!%AJ{c)AwnXGzNSZd/w1{C >|%]/f[x4lG' );
define( 'NONCE_KEY',        '5[Zr,[O~07E9-%]C~att]7o ybb,j7n5~iQ4/=d-IO*>W_(U!cVW#]WHT8F|z{H}' );
define( 'AUTH_SALT',        '`dn]XfX_q6=ibi-_{ ~s&X9?oK-ph*3#I3uS6n{2 LlIBx>xPGdYS{knyNuvf!D>' );
define( 'SECURE_AUTH_SALT', '7j#eV/lMco+`,y@eHTu%k=EPptc1@4 4sA|,d[~_4_3vkjh8pXIo#A-H<::JqD8E' );
define( 'LOGGED_IN_SALT',   'Fo|4490@A%kIDV W#fD^iCUTSu@;yUZIUucfl$]_kD+{_k+oG`BeSLACw_Sj=,en' );
define( 'NONCE_SALT',       'A|,K-%OvE[Wn&Vhf)}?+7IJ>[NZZE$F:Bywcrqtj5]d*hJk0giWe>xJ;nTMcIERR' );

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
