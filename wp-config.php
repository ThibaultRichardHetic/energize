<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'energize' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:8888' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q.*%EzA-ecHs(h?^`X ST>/FRmPF1|82o@ *)>F=y`~NALzG=c}n.p+<_RFu&Km~' );
define( 'SECURE_AUTH_KEY',  'vuHYCTu0&(!wQ?de(cJ;PtcspyY^i/+|sAO/c%s!$k9q1.y-twAN/ZwKuS[irM==' );
define( 'LOGGED_IN_KEY',    'svw)##q0 XRcEd[o `fpmXt&SQ!,5FMgG>08@OI-CXD+W b@7gj)~ck%/_y8rp`.' );
define( 'NONCE_KEY',        'Yqu$0N;d~Il=Vx3LdT9);_:EF&:_Z)=kN<iY^Wv+-q@s*5vJ%L2UewV>n<}!dBF&' );
define( 'AUTH_SALT',        'W^&#!g,RK]hHiK,7Tgkr- V+szI]MOz_+u4+z&l6-_k=xW#^XnHMD7Cg%gMlB8gB' );
define( 'SECURE_AUTH_SALT', '6;I8-@.mM}[LT?5)_GNKg0m7=|8clmxYFlr)w4EN ,EvUO}YGz;[yE@|::+OxRW3' );
define( 'LOGGED_IN_SALT',   '/*,1^M/F[*:9Q$,js*alGWCOF91{fpW^B|kHJ$A#ioClGIEm<@._obDp3Ps}z!9K' );
define( 'NONCE_SALT',       's>zIyd_ByyPWR<GH-g_N&LK>/zx#g|E9^mU3ZML,kNkTAqRYOa5Yq?)VWN.1?YE|' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
