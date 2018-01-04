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
define('DB_NAME', 'itkom_ducray');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'itkom_ducray');

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
define('AUTH_KEY',         ',p_ 7nXjNUJ8Xl8kh.$.C1#+StYr-Q1|}[o>;hK|-{_Iy#BNsA~%BgCI93G$%#B)');
define('SECURE_AUTH_KEY',  'sn=,&h]4gpT:=?4}5XGz<c-DC=]gp]ePYDo^s{cLU-vJYI9ijJKY##gj!zh,=[HE');
define('LOGGED_IN_KEY',    '2m)jFW+8qR)Dy&P[{bH`c]Fo``Eho2b^w6Ww-SwEccG~2|^MronZB[gm1udT|*L{');
define('NONCE_KEY',        '5)Dso%/H}l{1.W$RW=e1B,30AN4J6[}4u|Yo*ns2wxmgQdb}Q;DY8lFCL~(OQ/G{');
define('AUTH_SALT',        'Fyl +;/wk.;NY^Rl=8?>0-?8rfk2c[Ldrm$0.k]m/XH5(LF}ecGykt2cpvkjjRmP');
define('SECURE_AUTH_SALT', 'FhS1sl]||yPAbAk9b#r8Tu!$kH(ovj1-6&X}z!ff<{/MYZXn e+%*)}(:3/QZsMp');
define('LOGGED_IN_SALT',   'U|Ktb!vFG_J[@n9[zPAa|S!7r*9zAQ57Ojvo2q;-mJayg.6R4hODa.C[GlE_jg3 ');
define('NONCE_SALT',       'Xw;l|J|A:~B n-i4Ql#y|+v;jAR6U-0o7Erwo%|g322QK6?&-BXc!R^wB|F(9yKo');

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
