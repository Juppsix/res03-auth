<?php  
 
class AuthController extends AbstractController {  
  
    public function __construct()  
    {  
  
    }  
    
    /* Pour la page d'inscription */  
    public function register() : void  
    {  
        // render la page avec le formulaire d'inscription  
    }  
      
    /* Pour vérifier l'inscription */  
    public function checkRegister() : void  
    {  
        // vérifier que le formulaire a été soumis  
        // récupérer les champs du formulaire    
        // chiffrer le mot de passe    
        // appeler le manager pour créer l'utilisateur en base de données   
        // connecter l utilisateur    
        // le renvoyer vers l'accueil
    }  
      
    /* Pour la page de connexion */  
    public function login() : void  
    {  
        // render la page avec le formulaire de connexion  
    }  
      
    /* Pour vérifier la connexion */  
    public function checkLogin() : void  
    {  
        // vérifier que le formulaire a été soumis  
        // récupérer les champs du formulaire    
        // utiliser le manager pour vérifier si un utilisateur avec cet email existe    
        // si il existe, vérifier son mot de passe        
            // si il est bon, connecter l'utilisateur        
            // si il n'est pas bon renvoyer sur la page de connexion    
        // si il n'existe pas renvoyer vers la page de connexion
    }

    
}