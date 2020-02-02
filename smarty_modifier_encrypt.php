<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty Openssl Encrypt modifier plugin
 *
 * Tipo:			modifier 
 * Nombre:		openssl_encrypt
 * Fecha:     	Feb 02, 2020
 * Proposito:  Cifra la información dada con el método y la clave dados!
 * Salida:    	Devuelve la cadena cifrada si se tuvo éxito o FALSE en caso de error.
 * Más ayuda:	https://www.php.net/manual/es/function.openssl-encrypt.php
 * Ejemplo:  	
 *            $string = 'String para se cifrado';
 *            $metodo = 'aes128'; # Tipo de cifrado
 *            $password = '$dfsa12441#IH'; # Contraseña
 * 			  # PHP openssl_encrypt($string, $metodo, $password);
 *            {$string|encrypt}
 *
 * @author   	Joel Miguel Valente
 * @version 	1.0
 * @param 		string
 * @return 		string
 */

function smarty_modifier_encrypt($metodo, $password){
	# RETORNAMOS
	return openssl_encrypt($metodo, $password);
}
