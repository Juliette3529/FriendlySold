<?php

namespace FriendlySold\Domain;



/**
*
*/
class Group
{

    private $id;
    private $groupname;
    private $password;
    private $key;


    /*ici on recupere l'id*/
    public function getId(){
        return $this->id;
    }

    /*ici in definit ou redefinit l'id*/
    public function setId($id){
        $this->id=$id;
    }

    /*ici on recupere username*/

    public function getGroupname(){
        return $this->groupname;
    }

    /*ici on definit ou redefinit username*/
    public function setGroupname($groupname){
        $this->groupname=$groupname;
    }


    /*ici on recupere group*/
    public function getGroup(){
        return $this->groupname;
    }


    /*ici on definit ou redefinit group*/
    public function setGroup($group){
        $this->group=$group;
    }


    /*ici on recupere pwd*/
    public function getPassword(){


        return $this->password;
    }
    /*ici on definit le pass*/
    public function setPassword($password){


        $this->password=$password;

    }


    public function getKey(){

        return $this->key;


    }

    public function setKey($key){

        $this->key=$key;

    }
}






