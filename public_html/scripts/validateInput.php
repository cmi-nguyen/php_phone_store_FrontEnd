<?php 
class validateInput{
    public $input;
    public function validatePasswordLen(){
        if(strlen($this->input)>8){
            return true;
        }
        else {
            echo "password must have 8 character";
            return false;
        } 
    }
    public function checkSpecialChar(){
        if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $this->input)){
            echo "Must not contains speacial characters";
            return false;
        }
        return true;
    }
    
}