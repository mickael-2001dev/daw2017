<?php  

class UserModel extends Model {

	public function getUserByLogin($login) {
        $sql = "SELECT * FROM user WHERE login = :login";
        $results = $this->ExecuteQuery($sql, [':login' => $login]);
        
        if($results){
          $user = $results[0];
          return new User($user['login'],$user['senha'],$user['username'],$user['id']);
        }else{
          return $results;
        }
    }   
}