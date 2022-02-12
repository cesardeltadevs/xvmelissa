<?php

namespace datos 
{
	/**
	 * Conexion short summary.
	 *
	 * Conexion description.
	 *
	 * @version 1.0
	 * @author CesarCasasQuiroga
	 */
	class Conexion
	{
		public function ConectarBase() {
			 $base = new \DB\SQL(
				'mysql:host=localhost;port=3306;dbname=cezaryto_xvregina',
				'cezaryto_gralusr', 
				'k1pk{za&Lj8t'
            );
            return $base;
		}
	}
}