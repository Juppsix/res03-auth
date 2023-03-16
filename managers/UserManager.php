<?php  
 
class UserManager extends AbstractManager {  
  
    public function getUserByEmail(string $email) : User  
    {  
        $query = $this->db->prepare('SELECT * FROM users WHERE email=:email');
        $parameters = [
            'email' => $email
    ];
        $query->execute();
        $res = $query->fetch(PDO::FETCH_ASSOC);
        
        //$prod = new Product($product['name'], $product['slug'], $product['description'], $product['price']);
        $user = new User($res['id'], $res['username'], $res['email'], $res['password']);
        // Pour accéder à la base de données utilisez $this->db  
  
        return $user;  
    }  
  
    public function createUser(User $user) : User  
    {  
        $query = $this->db->prepare('INSERT INTO users VALUES (null, :username, :email, :password');
        $parameters = [
            'username' => $user -> getUsername(),
            'email' => $user ->getEmail(),
            'password' => $user ->getPassword()
            ];
            $query->execute($parameters);
            $query->fetch(PDO::FETCH_ASSOC);
            $id = $query->lastInsertId();
            $user->setId($id);
        // Pour accéder à la base de données utilisez $this->db  
  
        return $user;  
    }  
  
}