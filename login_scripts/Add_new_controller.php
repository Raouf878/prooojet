<?php
require_once 'Add_new_model.php';
class UserController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function createUsers($first_name, $last_name,$role, $email, $password) {
            $result = $this->user->createUser($first_name, $last_name,$role, $email, $password);
            if(true) {
                header("Location: index.php?msg= new record added");
            } 
        
    }
    public function sh_user(){
        $result = $this->user->showUser();
        return $result;

    }
    public function update_users($first_name, $last_name, $role,$email, $password) {
        $result = $this->user->update_user($first_name, $last_name, $role, $email,$password);
        if(true) {
            header("Location: index.php?msg= new record added");
        }}
        public function dl_user(){
            $result = $this->user->delete_user();
            return $result;
    
        }
    public function createoffer($duree_stage, $base_remuneration, $date_d_offre, $Nombre_place_offertes,$promo_concernees,$titre_offre,$desc_offre){
        $result = $this->user->createOffer($duree_stage, $base_remuneration, $date_d_offre, $Nombre_place_offertes,$promo_concernees,$titre_offre,$desc_offre);
        if(true) {
            header("Location: index_offre.php?msg= new record added");
        } 

    }
    public function sh_offre(){
        $result = $this->user->showOffer();
        return $result;

    }
    public function update_offre($duree_stage, $base_remuneration, $date_d_offre, $Nombre_place_offertes,$promo_concernees,$titre_offre,$desc_offre) {
        $result = $this->user->update_Offer($duree_stage, $base_remuneration, $date_d_offre, $Nombre_place_offertes,$promo_concernees,$titre_offre,$desc_offre);
        if(true) {
            header("Location: index_offre.php?msg= new record added");
        }}
    


}

?>






