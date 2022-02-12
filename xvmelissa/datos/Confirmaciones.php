<?php

namespace datos 
{
	/**
	 * Confirmaciones short summary.
	 *
	 * Confirmaciones description.
	 *
	 * @version 1.0
	 * @author CesarCasasQuiroga
	 */
	class Confirmaciones
	{

		private $conexion;

		private function conectar () {
			$baseObj = new \datos\Conexion;
			$this->conexion = $baseObj->ConectarBase();
		}

		public function Invitacion($f3) {
			$familia = $f3->get('PARAMS.familia');

			if (empty($familia)) {
				$f3->reroute($f3->get('ruta'));
			}
			else {
				//Obtiene los datos de la Familia 


				$f3->set('familia', true);
			}
		}
	}
}