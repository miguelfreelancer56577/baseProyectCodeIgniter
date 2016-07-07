<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
    
    public function getModulos($idUser, $nameSistema) {
        $rs = $this->db->query("SELECT
                                catSistema.nombreSistema,
                                catSistema.urlSistema,
                                catAplicacion.nombreAplicacion,
                                catAplicacion.urlAplicacion,
                                catModulo.nombreModulo,
                                catModulo.urlModulo,
                                tblPermisosUsuario.idModulo,
                                (CONCAT(catSistema.urlSistema,'/',catAplicacion.urlAplicacion,'/',catModulo.urlModulo)) as uri
                                FROM
                                catAplicacion
                                INNER JOIN catModulo ON catAplicacion.idAplicacion = catModulo.idAplicacion
                                INNER JOIN catSistema ON catSistema.idSistema = catAplicacion.idSistema
                                INNER JOIN tblPermisosUsuario ON catModulo.idModulo = tblPermisosUsuario.idModulo
                                INNER JOIN users ON tblPermisosUsuario.id_user = users.id
                                WHERE users.id = $idUser
                                and nombreSistema = '$nameSistema'
                                ");
        if($rs->num_rows() > 0){
            return $rs->result();
        }else{
            return false;
        }
    }
    
    public function getSistema($idUser) {
        $rs = $this->db->query("SELECT
                                catSistema.nombreSistema
                                FROM
                                catAplicacion
                                INNER JOIN catModulo ON catAplicacion.idAplicacion = catModulo.idAplicacion
                                INNER JOIN catSistema ON catSistema.idSistema = catAplicacion.idSistema
                                INNER JOIN tblPermisosUsuario ON catModulo.idModulo = tblPermisosUsuario.idModulo
                                INNER JOIN users ON tblPermisosUsuario.id_user = users.id
                                WHERE users.id = $idUser
                                GROUP BY nombreSistema ;
                                ");
        if($rs->num_rows() > 0){
            return $rs->result();
        }else{
            return false;
        }
    }
}