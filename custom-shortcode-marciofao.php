<?php
/*
 * Plugin Name: Shortcode custom Marciofao
 * Description:       Cria Shortcodes para o usuário: [nome_usuario], [primeiro_nome_usuario], [sobrenome_usuario]
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Márcio Fão
 * Author URI:        https://marciofao.github.io/
 * License:           GPL v2 or later
 */

// [nome_usuario]
function display_nome_usuario()
{
    $user = wp_get_current_user();
    return $user->display_name;
}
add_shortcode('nome_usuario', 'display_nome_usuario');

// [primeiro_nome_usuario]
function display_primeiro_nome_usuario()
{
    $user = wp_get_current_user();
    return $user->first_name;
}
add_shortcode('primeiro_nome_usuario', 'display_primeiro_nome_usuario');

// [sobrenome_usuario]
function display_sobrenome_usuario()
{
    $user = wp_get_current_user();
    return $user->last_name;
}
add_shortcode('sobrenome_usuario', 'display_sobrenome_usuario');