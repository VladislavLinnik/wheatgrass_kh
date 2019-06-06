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
define( 'DB_NAME', 'zsuyoobu_wheatgrass' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'onsyX>nFkVOw07V[rW{564eR(s(U jsGW7o7mT4agUgM]D@;qXgC25_F16snBNA9' );
define( 'SECURE_AUTH_KEY',  'M1Ao!1C%aN*Nwxx${M0&|7PR9w,S.ek`=E|0eg_; ~(,.PF>ARl$_+H zGK/xVSU' );
define( 'LOGGED_IN_KEY',    '[HDtG0$4$&(X!1s<?JmML0*siFUNzG1G|&.B<~DNvR](1$DOM{5T)o w(P~<^n$t' );
define( 'NONCE_KEY',        '+_Tj~DL8K{v->n6pN1~%u#*DHucf<=G!*%[r)B=ZSr,(EQLI%Z!=|s,V=_Uhn~3N' );
define( 'AUTH_SALT',        '&>H+G7PP~9&:L`K>x6^dsBR :[Gobt =D{v%wmhn6<M_F`@5Q5OGl[|s(RvGg/)u' );
define( 'SECURE_AUTH_SALT', '1P 72AzMkrU[4_?Fl5*60ztwx5~iWun&IXH`y}ext(+f+aEE,I|yjkE#GE36(R$I' );
define( 'LOGGED_IN_SALT',   '^&b8SaK{3:M*hOMl]E 5c(>qu*UWD:iy.iL]TX!70>>hG{GUOZ#}. zXWid?,%ex' );
define( 'NONCE_SALT',       'mt*GzCl9f$yBNlb3,wC{`Ir*%rZ7}Y,jd(S2kM?gruI&Y}o*kYIR7l/j.Om+)vUz' );

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
