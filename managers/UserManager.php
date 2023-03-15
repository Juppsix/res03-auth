<?php  
 
class UserManager extends AbstractManager {  
  
    public function getUserByEmail(string $email) : User  
    {  
        $query = $this->db->prepare('SELECT email FROM users');
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        
        // Pour accéder à la base de données utilisez $this->db  
  
        return $user;  
    }  
  
    public function createUser(User $user) : User  
    {  
        // Pour accéder à la base de données utilisez $this->db  
  
        return $user;  
    }  
  
}