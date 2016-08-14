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
define('DB_NAME', 'app_banners_drum');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '369970');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P2a:)Z-KLi0cFH,~4~z`1Rrb{N#*~^:PmNkD&@B45mwmKp}RwKqD)!pXhg]@^Gq#');
define('SECURE_AUTH_KEY',  '?x]&e~=OQKk,)Nt,*.^z|.fmV*S8p7.B^lC8y?RXGh9Af5S6W/ThW.*(;gxU<z4o');
define('LOGGED_IN_KEY',    '<|{<wKRQyR-h+k p5^LIPM}!j=aGFDYr-;e|Gjbi%l]e$FjARJa{*ow$q)+7Pb-d');
define('NONCE_KEY',        '-~Q(pQ&$J/$>5AS*S>`H5-zA}yX0RKk{WAmm/#I*J>D7]=sA$;KA;aMsBkbCAC)A');
define('AUTH_SALT',        'Fv#*vS-i6LC=e0vCL=8$6Jt{L0UsD:b-$A9:IwR`itP,CwC`>z,jL]c5H)0q|[Q+');
define('SECURE_AUTH_SALT', ',3z]h/b-?irj!uOVkUzoej;;!S|0UOx&*`$<IBs~Yjl[,n]#iV#!MF~hvON:dPpW');
define('LOGGED_IN_SALT',   '=+_ E*+q^w9]>M/MXtCBw*xr O0K#MT$Ng6coA]sBZV5%y${,y&N:9%,rn_!J(s]');
define('NONCE_SALT',       'U9fH th}G!AQn$kT|V=:qwFTy~dkgqNBPiUP H;?!=m_1*.$$)N.iQzKTXYx3D`i');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
