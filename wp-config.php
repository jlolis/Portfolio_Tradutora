<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_tradutor' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'joaololis' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Fabiololis01.' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6qh.bi<ia;D(WAp4KQ DKrwGB_11vZV@KpvwS.Zv7ej;U`A?X%M=R6ClsP0h&t8Q' );
define( 'SECURE_AUTH_KEY',  '0<H%[0k@w}(HK;OC ;PI|(7h>BD2VL|&* 9^NgfVD&E mXukexiz6>Pf/<.@[;@$' );
define( 'LOGGED_IN_KEY',    'H{p-$A+>Du?fF~9guYe`Bak(`%7sh6e$jFp7-fg+69jX-.f+@=jZ2Bc*76~-8-c6' );
define( 'NONCE_KEY',        'U>^s,|7d8mtVZ[;s_No687nEDe5ZP$Xi-zvb/{>VkV10Q1!FwPkR{XT(U<+[E9iw' );
define( 'AUTH_SALT',        'lZ+MaYTB-:E}) x(7uYm!]Ny`mp]XqW6PvX@uTHoDxHF[}kQ(HAd!K#;r_,HNw#S' );
define( 'SECURE_AUTH_SALT', '~C PIqx!rOq;jRa<TLOU+?(MKHEs8e,D{?E?1x#0V,*b)H+]f!HG pR&X!?u[kgJ' );
define( 'LOGGED_IN_SALT',   'Evwy4u[* 1+nEeO2grP:d9,alQdIxDGO28{i5wmB9&k;vd4H(,]O>5y+h6?YU!o-' );
define( 'NONCE_SALT',       '+E%23IxYB3KHlB8DHj@;?d_1_QR^;k/G[k5MO8Z:`RI/bX6suIX,j6{uHo11-b8/' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

