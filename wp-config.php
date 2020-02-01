<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ulteriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'ssf_db' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5Q@wl<0P0g]@&o[CN3LzW4!`XiHi9}6.Df-GN<lw%+I6NMEFwAng6K%*VMz~s^No' );
define( 'SECURE_AUTH_KEY',  'e2Z`m@Uv(= 9%8q|(s[1nNNV=*;k1Bb_.2p%,JrX~xhQEe@rlzw9)T{mF|!&!8~N' );
define( 'LOGGED_IN_KEY',    '[t@v~^)$6U!`/R9/nM`[Vycl7.]o7B8 (:<Zmk}(:|HGt,6gS8OM=34u28E&Vk?y' );
define( 'NONCE_KEY',        '2W9]v$6eqhdG:a2!0wxd8-|V=%kRNp.J-/q+s>tLP,;|k5Ymq=7Zo0c+u8~EKKmN' );
define( 'AUTH_SALT',        'c^e-;x)/y!q7Pv=?E!C:/;Yii$,>_1E/PMy6w:iZ_eWo<03x,bu}Uy.$83x3jat)' );
define( 'SECURE_AUTH_SALT', 'hlw,oEyUK<aj*{Q0e6!oN|xS$S_<Y4onlqBWM &MVCwL,,G}G<.Ks&0Y=^lf=.0S' );
define( 'LOGGED_IN_SALT',   '.{`omu5[{ II|#j{;4 _G)rq?:lcRjQ{8c/]^#.DSja?Vl~JMRysDF4GFaQ!If=x' );
define( 'NONCE_SALT',       '.Ap5k=;8?mPPoJM|KL.q_L2.t?R::#%N=GEk(VJETJbHq]J;$^QxlNcJU>S2Yl <' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
