<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy, używanej lokalizacji WordPressa
 * i ABSPATH. Więćej informacji znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'itkom_ducray-lato-112017');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'itkom_ducray-lato-112017');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'TEster12');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'itkom.nazwa.pl:3306');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x)?67TRX]|cjM}hRQYO:BcUy#[FWaEq[@>7O2Lb/y`#Ogq/qh=tzEfh+ALENFT.+');
define('SECURE_AUTH_KEY',  '&m}VAs{a;rKQppoZ(S-;h5+tD8Fh2}];S Xbp@p?pNJ/bjj}yoQsz beA|$,p#A3');
define('LOGGED_IN_KEY',    'm1h:|K9R#tmc[D|NomN~e]`9>qaCt.lP+7%t[n5tFrA:<CS/CF|&qBwYw4l.C8})');
define('NONCE_KEY',        'ZII<^z>ppt<@).Tf|1D&bfsSYa|+N eVd9+58)c?{S|81pBv{J-}/vl-itjj?I?-');
define('AUTH_SALT',        'ArUo.n+G|.O7js1tIS4%1g@S83g-%t^s{@?-75+>Xowvi3sT7J|s=a+0Y%s?yh*x');
define('SECURE_AUTH_SALT', 'B7^`[@0C+UHbe3u/]3eeVP46}g#D3SwVf-/$QyY6z![w6fP=5M!UBeLz2r{]x5)i');
define('LOGGED_IN_SALT',   'lBZFxFh[Xq%8_5cQ>A:-5+i4?/ydeT# N71?gu*#Kt:aXaQQmD;hLS;z[P$ GqsI');
define('NONCE_SALT',       '88~VG^oz*k0{|*5jCSM+_OcdAbt/RFA!E7TdAL-6FZ&X`lN9O$lm)v2h-iNjKZTU');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'duc_';

/**
 * Kod lokalizacji WordPressa, domyślnie: angielska.
 *
 * Zmień to ustawienie, aby włączyć tłumaczenie WordPressa.
 * Odpowiedni plik MO z tłumaczeniem na wybrany język musi
 * zostać zainstalowany do katalogu wp-content/languages.
 * Na przykład: zainstaluj plik de_DE.mo do katalogu
 * wp-content/languages i ustaw WPLANG na 'de_DE', aby aktywować
 * obsługę języka niemieckiego.
 */
define('WPLANG', 'pl_PL');

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
