<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty strlen modifier plugin
 *
 * Tipo:			modifier 
 * Nombre:		strlen
 * Fecha:     	Feb 02, 2020
 * Proposito:  Obtener la longitud de un string(texto)
 * Salida:    	Devuelve la longitud del string dado.
 * Más ayuda:	https://www.php.net/manual/es/function.strlen.php
 * Ejemplo:  	{$variable|strlen > 74}
 * @author   	Joel Miguel Valente
 * @version 	1.0
 * @param 		string
 * @return 		string
 */

function smarty_modifier_strlen($stringStrlen){
	# RETORNAMOS
	return strlen($stringStrlen);
}
