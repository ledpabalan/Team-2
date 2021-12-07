<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    private $table = "users";

    public function __construct()
    {
        parent::__construct();
    }

    public function createUser($data){

        if(!$this -> checkUsernameIfExists($data['user_username'])){
            $data['user_password'] = md5($data['user_password']); //hashing password using m5 algo
            // $data['user_pwdRepeat'] = md5($data['user_password']); //hashing password using m5 algo
             $data['user_acc_status'] = "Active";
             $data['user_acc_createddate'] = date('Y-m-d H:i:s');
             $data['user_profpic_URL'] = "https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg";
     
             $this -> db -> insert($this -> table, $data);
             echo "<br/><br/> [  Successfully Registered!  ] <br/> ";
             echo " data = ".print_r($data, true); //Prints data array, to reflect lang for a while kung ano nainput sa database after magregister

        }
        else {
           echo"<br/> Registration Failed <br/>"; 
           echo "UserName already taken";
        }

        return;
    }
////////////////////////////////////////////////////////////////////////////////////////////////

    public function checkUsernameIfExists($user_username){
        if(isset($user_username) && $user_username != null){
            $this->db->where('user_username', $user_username);
        }

        $query = $this -> db -> get($this -> table); 
        $return = $query -> result_array();
        echo"Registered Failed!";

        print_r($return);

        if(count($return) > 0 )
            return true;
            echo"Registered Successfully!";

        return false;
        
    }
/////////////////////////////////////////////////////////////////////////////////////////////////

    public function login($user_username, $user_password) {
        $this->db->where( 'user_username', $user_username);
        $this->db->where( 'user_password', md5($user_password));
        $query = $this->db->get ($this->table);
        $return = $query->result_array();
        if(count($return) > 0 && $return[0]['user_acc_status'] == 'Active')
            return $return;
        }
        return false;
    }

 ////////////////////////////////////////////////////////////////////////////////////////////////

    public function getUsers($user_id = null, $user_acc_status = null){
        if(isset($user_id) && $user_id != null){
            $this->db->where('user_id', $user_id);
        }

        if (isset($user_acc_status) && $user_acc_status != null){
            $this -> db -> where ('user_acc_status', $user_acc_status);
        }

        $query = $this -> db -> get($this -> table); 
        return $query -> result_array();
    }

/////////////////////////////////////////////////////////////////////////////////////////////////

    public function updateUser($data){
        $this->db->where('user_id', $data['user_id']);
        unset($data['user_id']);
        unset($data['user_pwdRepeat']);

        $data['user_password'] = md5($data['user_password']);

        $this->db->update($this->table, $data);                                //di ko mafigure out yung sa gender so sila sila lang muna pwera sa gender yung pwede maupdate
        return;                                                              // may konting problem lang rin sa password so siguro gagawa tayo bagong tab na nakahiwalay don ganon 

    }

/////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function updateUserStatus($user_id, $user_acc_status){
        $this->db->where('user_id', $user_id);
        
        $data ['user_acc_status'] = $user_acc_status;

        $this->db->update($this->table, $data);    
        return;

    }
}

