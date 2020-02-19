<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'lab1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cgk4l{hh=7ynU8JJ^o{9ZoP sEQpwb?-[>6=(zS6q7_xEU[J+K=?AAUj&(]Nedp)');
define('SECURE_AUTH_KEY',  '.-jdVVTRLPc0+f$]T1(bF`H[DiILf`k@8|{|oAfh8l`N6i+E|)NY? J9a4|5o2I`');
define('LOGGED_IN_KEY',    '`|#3reuH`hk.tfJ=,z_d}Im@v0lfC,E]P=lGdy; W.JM-KXMAwQgu1@=D|Xx8H%#');
define('NONCE_KEY',        '@og|wol$PXQPI!;os=N4*ba6PZ!t.j>`I+<VP+7}XND}?tE_CAhZyZ<-2~0PrQSt');
define('AUTH_SALT',        'Gl*5d.,@-^g~l:wZ7`.E~dM-l^(AMxogeK(4H K0%Fq%/cOTfW+!jB}1Kr*NwtF ');
define('SECURE_AUTH_SALT', '`&pI8*H=oB-(/(~62@2Iw?UB-xL+~ec;/Q|<|6,JFZoq]IAU0>]widk8TEWG;~2V');
define('LOGGED_IN_SALT',   '5Wa@A}`Knw}A!D-8H^9Quv}o4<yCNwVa7ok|9 &rQycT;|5UeA-by7~}~6X5~ZW+');
define('NONCE_SALT',       'smDq_0rI8IgW/|Ac-*[u?%4-x-_M )p|7&*Ec*NDNJBO&=9`wOFl=QQek0&-n@|0');

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
