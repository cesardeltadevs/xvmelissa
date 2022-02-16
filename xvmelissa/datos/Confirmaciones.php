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

			$respuesta = array();

			if (empty($invitado)) {
				$respuesta['confirma'] = 'false';
			}
			else {
				$invitadoOk = str_replace("i", "", $invitado);

				$baseObj = $this->conectar();
				$confirma = $baseObj->exec("update personas set confirmacion = 1 where id_persona = ?;", $invitadoOk);
				unset($baseObj);

				if ($confirma == 1) {
					$respuesta['confirma'] = 'true';
				}
				else {
					$respuesta['confirma'] = 'false';
				}
			}

			exit(json_encode($respuesta));
		}

		private const FRASE = "REGINA2204";
		public function ListaInvitados($f3) {
			//Metodo para descargar la Lista de Invitados Confirmados
			$pass = $f3->get('PARAMS.c');

			if (is_null($pass) || empty($pass)) {
				$f3->reroute($f3->get('ruta'));
			}
			else {
				if ($pass == self::FRASE) {
					$f3->set('SESSION.acceso', true);
					$f3->reroute($f3->get('ruta') . 'lista/descargar');
				}
				else {
					echo "<script>alert('Contrase\u00F1a Incorrecta');window.location.href = '" . $f3->get('ruta') . "';</script>";
				}
			}
		}

		public function DescargarLista ($f3) {
			if ($f3->get('SESSION.acceso')) {
				//Obtiene los datos de los asistentes
				$baseObj = $this->conectar();
				$asistentes = $baseObj->exec("select id_persona as 'ASISTENTE', f.apellidos as 'FAMILIA', nombre as 'INVITADO', case when confirmacion = 0 then 'NO' else 'SI' end as 'CONFIRMADO' from personas p inner join familias f on p.familia = f.id_familia order by apellidos, nombre;");
				$resumen = $baseObj->exec("select count(id_persona) as 'TOTAL', (select count(id_persona) from personas where confirmacion = 1) as 'CONF', (select count(id_persona) from personas where confirmacion = 0) as 'FALTA' from personas;");
				unset($baseObj);

				//var_dump($resumen, $asistentes);
				//exit;
					
				$f3->set('asistentes', $asistentes);
				$f3->set('resumen', $resumen[0]);

				echo \Template::instance()->render("Confirmados.html");
			}
			else {
				$f3->clear($f3->get('SESSION'));				
				if (ini_get("session.use_cookies")) {
					$params = session_get_cookie_params();
					setcookie(session_name(), '', time() - 42000,
						$params["path"], $params["domain"],
						$params["secure"], $params["httponly"]
					);
				}
				session_destroy();
			}
		}

		public function AccesoLista($f3) {
			//Pide la contraseña para el acceso a la lista
			echo "<script>var c = prompt('CONTRASE\u00D1A DE ACCESO');window.location.href = '" . $f3->get('ruta') . "lista/' + c;</script>";
		}
	}
}
