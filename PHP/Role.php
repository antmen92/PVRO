<?php

/**
 * Created by PhpStorm.
 * User: Antonio Méndez
 * Date: 25.01.2018
 * Time: 08:38
 */
class Role
{
    protected $permissions;

    protected function __construct() {
        $this->permissions = array();
    }


    public static function getRolePerms($role_id) {
        $role = new Role();
        $sql = "SELECT t2.perm_desc FROM role_perm as t1
                JOIN permissions as t2 ON t1.perm_id = t2.perm_id
                WHERE t1.role_id = :role_id";
        $sth = $GLOBALS["DB"]->prepare($sql);
        $sth->execute(array(":role_id" => $role_id));

        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $role->permissions[$row["perm_desc"]] = true;
        }
        return $role;
    }


    public function hasPerm($permission) {
        return isset($this->permissions[$permission]);
    }
}