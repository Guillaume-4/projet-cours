<?php
class AuthController {
    public function showLoginForm() {
        include('../app/views/login.php');
    }

    public function showRegisterForm() {
        include('../app/views/register.php');
    }

    // Ajoutez d'autres méthodes pour gérer l'authentification (connexion, inscription, déconnexion, etc.)
}