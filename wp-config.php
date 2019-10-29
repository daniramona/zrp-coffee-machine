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
define( 'DB_NAME', "danielle_zrp" );


/** Usuário do banco de dados MySQL */
define( 'DB_USER', "danielle_dr" );


/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', "6]Sn3h93El#PfS" );


/** Nome do host do MySQL */
define( 'DB_HOST', "localhost" );


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
define( 'AUTH_KEY',         ':?7p[Y^i<}r%o*/5@z,>BSwl(>)!B&4HKslp+so~s8N8(pM<Q]`E h6zb<gC(j P' );

define( 'SECURE_AUTH_KEY',  '(~g8*WtdpkRLrv-y5T=C;[aGy{lP3L2[M[4! -9wcdjNc&u};j!FaKyE5rUuX.*A' );

define( 'LOGGED_IN_KEY',    'Y=]IJDhusjZdOOSieQ@U%3,di)yS.&{PSwqZhc|)B2t S~IG}7 7oD}9#{D1icU/' );

define( 'NONCE_KEY',        '4%I[-%K.jHNege4NloFKxG5r>=cL,nr)>7a!p)n8f:eT>n9Yfr`R#T%0*]rvv Ch' );

define( 'AUTH_SALT',        '?CBHBqXw aBTY$M62t2ukD<r^F~nVXO6v>)Z7*jt|=SPG5D5La<,k}nG8;+3+[)b' );

define( 'SECURE_AUTH_SALT', 'vk@4#^Vz/3k8#lkSnc2MZio-.oI{tJvm S*_HeuT,q1wv*$,UVAN0GKtFo]y8ZF6' );

define( 'LOGGED_IN_SALT',   '>OXs|i=SFr2Pxw*emhLH` 2Ppbg^15XIIxz%Xa.S] nK|ls|I;82LF10;Q)ol`yU' );

define( 'NONCE_SALT',       'Z]q8}w3qid_IHo=%]v)~vin,L}xZro<2jV_fghJEG)=3]BvmP>^W*.4$nYYXY&]t' );


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
