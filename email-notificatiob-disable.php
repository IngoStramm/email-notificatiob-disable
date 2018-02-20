<?php
/*
Plugin Name: E-mail Notification Disable
Plugin URI: http://laf.marketing
Description: Este plugin desabilita o envio de e-mail para o administrador quando a senha de um usuário é alterada.
Version: 1.0
Author: Ingo Stramm
License: GPLv2
*/

add_action( 'init', 'email_notification_disable' );

function email_notification_disable() {

	add_filter( 'send_email_change_email', '__return_false' );

}