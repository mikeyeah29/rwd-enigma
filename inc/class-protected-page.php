<?php

namespace RWD_Enigma;

class ProtectedPage {

    private string $session_key = 'protected_page_access_granted';

    public function __construct() {
        $this->maybe_start_session();
    }

    public function maybe_start_session(): void {
        if (!session_id()) {
            session_start();
        }
    }

    public function has_access(): bool {
        return !empty($_SESSION[$this->session_key]);
    }

    public function password(): string {
        $password = 'emiliana2025';
        return trim($password);
    }

    public function require_access(): bool {
        return $this->password() !== '';
    }

    public function login(): void {
        $_SESSION[$this->session_key] = true;
    }

    public function logout(): void {
        unset($_SESSION[$this->session_key]);
        wp_safe_redirect(home_url()); // Redirect wherever you'd like
        exit;
    }

    public function attempt_login(): bool {
        if (
            isset($_POST['rwd_enigma_password'], $_POST['rwd_enigma_nonce']) &&
            wp_verify_nonce($_POST['rwd_enigma_nonce'], 'rwd_enigma_nonce') &&
            $this->require_access()
        ) {
            if (trim($_POST['rwd_enigma_password']) === $this->password()) {
                $this->login();
                return true;
            }
        }

        return false;
    }

}
