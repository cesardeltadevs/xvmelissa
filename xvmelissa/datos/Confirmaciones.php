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
		private function conectar () {
			$baseObj = new \datos\Conexion;
			return $baseObj->ConectarBase();
		}

		public function Invitacion($f3) {
			$codigo = $f3->get('PARAMS.codigo');

			if (empty($codigo)) {
				$f3->reroute($f3->get('ruta'));
			}
			else {
				$baseObj = $this->conectar();
				//Obtiene los datos de la Familia
				$familia = $baseObj->exec("select apellidos as 'familia', tipo from familias where md5(id_familia) = ?;", $codigo)[0];
				//OBtiene los datos de los Invitados
				$invitados = $baseObj->exec("select id_persona as 'invitado', nombre, confirmacion from personas p inner join familias f on p.familia = f.id_familia where md5(id_familia) = ? order by nombre;", $codigo);
				unset($baseObj);

				if (!empty($familia) && !empty($invitados)) {
					$f3->set('codigo', true);
					$f3->set('familia', $familia);
					$f3->set('invitados', $invitados);

					echo \Template::instance()->render('Invitacion.html');
				}
				else {
					$f3->reroute($f3->get('ruta'));
				}
			}
		}

		public function Confirmar($f3) {
			$invitado = $f3->get('PARAMS.inv');

			if (empty($invitado)) {
				return false;
			}
			else {
				$invitadoOk = str_replace("i", "", $invitado);

				$baseObj = $this->conectar();
				$confirma = $baseObj->exec("update personas set confirmacion = 1 where id_persona = ?;", $invitadoOk);
				var_dump($confirma);
				exit;
				unset($baseObj);

				if ($confirma == 1) {
					return true;
				}
				else {
					return false;
				}
			}
		}
	}
}