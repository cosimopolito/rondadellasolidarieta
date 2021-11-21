<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
//define( 'DB_NAME', 'rondasolidarieta' );

/** Nome utente del database MySQL */
//define( 'DB_USER', 'admin' );

/** Password del database MySQL */
//define( 'DB_PASSWORD', '^IXj4KlULRzWCSF%*o' );

/** Hostname MySQL  */
//define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
//define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
//define('DB_COLLATE', '');

// ** MySQL settings - You can get this info from your web host ** //
$url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('CLEARDB_DATABASE_URL'));

/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&)o{j>vy zAK9SjNzmIV0Eq1bQ7jKU_9cpe%gv/ a`:PfS_QyO6f;ZWCSPJP,1 ;' );
define( 'SECURE_AUTH_KEY',  'P7^@>5CNn>~1!u9eOl6-- jQ_gxMHf>? _fER}#c9Tc7xl;fBVKs.lzSDGolrvn9' );
define( 'LOGGED_IN_KEY',    '~j0IgnqML!,V8@x15,vDX/ZBUHiyi1&_vii=3K*SfK{BG8Gyq^s8mFV#AYK~G#>j' );
define( 'NONCE_KEY',        'N-rVXH`Iq/IOq:r+gTPamwK[3(NU}RGWR8WBT0_N59T!sB7eCr*NG#.krOp:2)U]' );
define( 'AUTH_SALT',        '+G@ /E!]K@U^]?7MP+8r#<JNng=UY%q}0O`P@z_QHgz-kMO]bYXH-;}xPj~,RKS_' );
define( 'SECURE_AUTH_SALT', '_AV(S~~8&(6z3Rs<z.Q9B3i?62H3|!06B-o}N,aF+$X&Qi].hc3}<oRG)1g!]L?.' );
define( 'LOGGED_IN_SALT',   '{rh1g(1AG4G sNU617VQqWD(zC]9T4T6N=S!l-mMa2uM,ICY>H)M.< `9&Dcwb/Z' );
define( 'NONCE_SALT',       '};7C:ON^O3DSun|^!/wl +N!L|wxzJ0(1&!%7&d6cXyMn*bm8;]-G1H~`0mH^C26' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_123';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
