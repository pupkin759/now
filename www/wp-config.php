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
define('DB_NAME', 'bd_759');

/** Имя пользователя MySQL */
define('DB_USER', 'user_759');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'p000000');

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
define('AUTH_KEY',         '|JwXZ~-pG`,[3+5@U_gU@u(2~`E_o&3c/Fj?G?=az,L,#}OeSgA+EdLIW6lF90;K');
define('SECURE_AUTH_KEY',  'S52?<HBC5a,IV2OGQ&}a2<R{);q*#+?nv,#qGIXY%$]5#Wv)nf~3;RMw&BAG;IsO');
define('LOGGED_IN_KEY',    'vm]2:2n7{/wtdw=M$3PN2+^2l`;J`^]<$X*{ShodT}Co rofe~%vofTO;L}d`x>7');
define('NONCE_KEY',        'aLAFcJc1e=o0Z;v|UanYpI1?vyUcOOU#@Jqavis?>@(W*z5G YT;W=WNzoZw= 5}');
define('AUTH_SALT',        'PSb4k&~cx2l9j(8v):gW9uI=|/Pk*Vg<#M3J;V/7]f{#utO+a:#[|$ rjM36?4Px');
define('SECURE_AUTH_SALT', ' nEL)cy=3(Dpxe 9YmU(PycqG#tT7|O4g^T}U00T}-n6dGeB{.*SUU>;X~{1o1|(');
define('LOGGED_IN_SALT',   'X&tDuI>tOS^,*Jtp4L&DfR:!L8C:DT-qZrHZ+YG)QwCTNh0Ub+YX}DE0Vji(Y^H_');
define('NONCE_SALT',       'A5iw0#E! jQ)EL0l3#p4&-qz 2A)*SN_ ggEX3R&f-A]E!`<9=3>7oOS7PYTHa)*');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

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
