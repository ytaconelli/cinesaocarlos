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
define( 'DB_NAME', 'cinema' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'cinema' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'cinema' );

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
define( 'AUTH_KEY',         '?v@nXg1?t$$Iq?Mkxl$q*<3 nJTHnb@pHV{3Tp[/8rOq|me.MM+/*}y$bjQ{B(z1' );
define( 'SECURE_AUTH_KEY',  'cxYr5l`M<n.^n6855]l$fDlV)<-(@X1JHBvjC/K)aF-S7,h5$F*pi$Wyzibt7in0' );
define( 'LOGGED_IN_KEY',    '97-u$@G&y~y{cj-t%T<0qC)bnfbo5GUL=Vdip/!rW~+UY-=nGdRqF:r,Ow,RYwu_' );
define( 'NONCE_KEY',        'H[$gaaCMR,m:u4K`WW-wg`!q3n8aqn<TvazTXl|5a c^? `~ce9MvFVYEz1mCj05' );
define( 'AUTH_SALT',        '^=_3Y1*Cx8f@HH@42A3jX&#c{tk2ws*;;v!&!W4q%khy<ixFAm2}oE Ril%Ic%YX' );
define( 'SECURE_AUTH_SALT', '-LXAX.ry$a=u+K2:)3KgH:<[=Xs3k-$nZq2.EHI(!En|jNbXsN-C8t(`6Vo0F@ D' );
define( 'LOGGED_IN_SALT',   '/qFf8N`4P,n-5<$1R}N!0%/{qfLuA|T_F*PINw0UC1$PGcEj}7X`d9Y[PPpl peD' );
define( 'NONCE_SALT',       'O)1kfQ{oHIcp*cpW-]9 aHEK[q}I2$k:@f1Ymq24{2Yi{tF7+(y^S?np^ZPZabIo' );

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
