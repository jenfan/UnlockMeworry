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
define('DB_NAME', 'jenfan_worry');

/** Имя пользователя MySQL */
define('DB_USER', 'jenfan');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'ctvtyjd');

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
define('AUTH_KEY',         '$E[xU,-vSl@3JHThl>G>4J+.IV8|%E&(J2IYk`sXKKgYe2<%@o|Uf@r@joh>IVj|');
define('SECURE_AUTH_KEY',  '[/)t$%kuBF0D!5-8v6|-HBulwN(}&LmS6N-3%O1-sjT(`ZR)@f@}]N2?kQ7/Oa{+');
define('LOGGED_IN_KEY',    '(oPx}e~LnJG39%rSKPrOm4z,8cce5W5QTLK-+{W]$^F4]%H3%[uC[y-Hrw-+:VEE');
define('NONCE_KEY',        '-d:K7|F)R^a0((5W$LrR)j+U9R407l?l??NkHD-zfih>5cO,+:H4SNch3t-gXI.[');
define('AUTH_SALT',        'sC!RvbI`gYUYD:ew*CP;^y?P/MHEm(R#(@48 kw:Q,t}*$Dz6y@n$.rv8t*F#Wte');
define('SECURE_AUTH_SALT', '%!?aQrAVB*#d5>>}:>qJ+_k<A_47hlHy3|G^3q+t96L1^W@Yz#gD)fB>9}}<Fq*+');
define('LOGGED_IN_SALT',   '+bj8ZOQ%FlfFQ_z|m^+BFG|hL(.q<Hm-At.>k{IB]^Uj@I7w;6p0i5RCq*;;}1Hl');
define('NONCE_SALT',       'Y=45Ibaf0Du7rdZ#?Mv?5sBl>Y$I$^ [{Sj2P+X$y6d|P0D*YO<^v|hx!AA!Z_B,');

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
