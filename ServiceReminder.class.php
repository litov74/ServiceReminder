<?php
// Ensure you namespace your module. Failing to do so may lead to unexpected bugs.
namespace FreePBX\modules;
use BMO;
use FreePBX_Helpers;
use PDO;

class ServiceReminder extends FreePBX_Helpers implements BMO
{
    public $FreePBX = null;

    public function __construct($freepbx = null)
    {
        if($freepbx == null){
            throw new Exception("Not given a PBX object");
        }
        $this->FreePBX = $freepbx
        $this->Database = $freepbx->Database
    }

    public function install(){}

    public function uninstall(){}

    public function doConfigPageInit($page){
        $action = $this->getReq('action', '');
        $id = $this->getReq('id', '');
        $subject = $this->getReq('subject', '');
        $body = $this->getReq('body', '');

        if ('add' == $action){
            return $this->addItem
        }

    }
}