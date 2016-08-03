<?php

namespace App\Models\ForgottenPassword;

class ForgottenPasswordModel {
    private $secretCode;
    
    public function isEmailExist($email) {

        $app = \Yee\Yee::getInstance();

        $userEmail = $app->db['default']->where("email", $email)->getOne('users');

        if ($userEmail != NULL) {
            return true;
        }
        return false;
    }

//         public function generateSecretCode(){
//             $app = \Yee\Yee::getInstance();
//           return $secretCode = 5;
//            
//        }
//        
//        public function insertEmailAndCode($email){
//            $app = \Yee\Yee::getInstance();
//            
//           
//            
//            $data = Array(
//                "email" => $email,
//                "code" => 5,
//            );
//            
//            $db = $app->db['default']->insert('forgotten_password', $data);
//            
//        }





    public function generateSecretCode() {
        $app = \Yee\Yee::getInstance();
        return ($this->secretCode = 5);
    }

    public function insertEmailAndCode($email) {
        $app = \Yee\Yee::getInstance();

        $this->secretCode = $this->generateSecretCode();

        $data = Array(
            "email" => $email,
            "code" => $this->secretCode,
        );

        $db = $app->db['default']->insert('forgotten_password', $data);
    }

}
