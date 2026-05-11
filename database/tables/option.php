<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/database/connexion.php');

class Option
{
    private $email;
    private $username;
    private $langue_user;
    private $theme;

    public function __construct($email)
    {
        global $db;

        $query = $db->prepare('SELECT * FROM user WHERE email = :email');
        $query->execute(['email' => $email]);
        $result = $query->fetch();

        if (!$result) {
            http_response_code(401);
            exit;
        }

        $this->email = $result['email'];
        $this->username = $result['username'];
        $this->langue_user = $result['langue_user'];
        $this->theme = $result['theme'];
    }

    public function __destruct()
    {
        exit;
    }

    public function update()
    {
        global $db;

        $query = $db->prepare('UPDATE user SET username = :username, langue_user = :langue_user, theme = :theme WHERE email = :email');
        $query->execute([
            'email' => $this->email,
            'username' => $this->username,
            'langue_user' => $this->langue_user,
            'theme' => $this->theme
        ]);
    }

    public function getEmail() { return $this->email; }
    public function getUsername() { return $this->username; }
    public function getLangue() { return $this->langue_user; }
    public function getTheme() { return $this->theme; }

    public function setUsername($username) { $this->username = $username; }
    public function setLangue($langue) { $this->langue_user = $langue; }
    public function setTheme($theme) { $this->theme = $theme; }

    public static function getLanguesList()
    {
        global $db;

        $query = $db->prepare('SELECT langue FROM langues ORDER BY langue ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_COLUMN);
    }
}
