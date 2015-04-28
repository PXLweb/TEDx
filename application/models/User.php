<?php

/**
 * Description of User
 *
 * @author Kristof
 */
class User {

    private $user_id;
    private $username;
    private $password;
    private $email;
    private $creation_date;
    private $user_level;
    private $location_profile_pic;
    private $roles;

    public function __construct() {
        
    }

    public function initRoles() {
        $this->roles = [];
        $sql = "SELECT t1.role_id, t2.role_name FROM user_role  as t1 "
                . "JOIN roles as t2 ON t1.role_id = t2.role_id "
                . "WHERE t1.user_id = :user_id";

        $pdo = $GLOBALS["DB"];
        $statementHandle = $pdo->prepare($sql);
        $statementHandle->execute([':user_id' => $this->user_id]);
        
        while($row = $statementHandle->fetch(PDO::FETCH_ASSOC)){
            $this->roles[$row["role_name"]] = Role::getRolePerms($row["role_id"]);
        }
    }

    public function getUser_id() {
        return $this->user_id;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
        return $this;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getCreation_date() {
        return $this->creation_date;
    }

    public function setCreation_date($creation_date) {
        $this->creation_date = $creation_date;
        return $this;
    }

    public function getUser_level() {
        return $this->user_level;
    }

    public function setUser_level($user_level) {
        $this->user_level = $user_level;
        return $this;
    }

    public function getLocation_profile_pic() {
        return $this->location_profile_pic;
    }

    public function setLocation_profile_pic($location_profile_pic) {
        $this->location_profile_pic = $location_profile_pic;
        return $this;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function setRoles($roles) {
        $this->roles = $roles;
        return $this;
    }

}
