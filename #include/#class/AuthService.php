<?php

namespace App;

use Google_Client;

class AuthService
{
    private $db;
    public function __construct()
    {
        $this->db = new DB(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }

    public function login()
    {
        $client_id = 'YOUR_CLIENT_ID';
        $client_secret = 'YOUR_CLIENT_SECRET';
        $redirect_uri = 'http://localhost/CP-Antara/login';

        $client = new Google_Client();
        $client->setClientId($client_id);
        $client->setClientSecret($client_secret);
        $client->setRedirectUri($redirect_uri);

        $client->addScope(['email', 'profile']);

        if (isset($_GET['code'])) {
            $authCode = $_GET['code'];
            $token = $client->fetchAccessTokenWithAuthCode($authCode);

            if (!isset($token['error'])) {
                $client->setAccessToken($token['access_token']);

                $profile = $client->verifyIdToken($token['id_token']);

                $google_name = $profile['name'];
                $google_email = $profile['email'];
                $google_id = $profile['sub'];
                $logTime = date('Y-m-d H:i:s');

                $query = "SELECT * FROM user WHERE oauth_id = :oauth_id";
                $stmt = $this->db->getConnection()->prepare($query);
                $stmt->bindParam(':oauth_id', $google_id);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    $query = "UPDATE user SET name = :name, email = :email, last_login = :last_login WHERE oauth_id = :oauth_id";
                    $stmt = $this->db->getConnection()->prepare($query);
                    $stmt->bindParam(':name', $google_name);
                    $stmt->bindParam(':email', $google_email);
                    $stmt->bindParam(':last_login', $logTime);
                    $stmt->bindParam(':oauth_id', $google_id);
                    $stmt->execute();
                    $_SESSION['user_id'] = $google_id;
                    $_SESSION['user_name'] = $google_name;
                    $_SESSION['user_email'] = $google_email;
                    header('location: ' . SERVER_NAME);
                } else {
                    $query = "INSERT INTO user (name, email, last_login, oauth_id) VALUES (:name, :email, :last_login, :oauth_id)";
                    $stmt = $this->db->getConnection()->prepare($query);
                    $stmt->bindParam(':name', $google_name);
                    $stmt->bindParam(':email', $google_email);
                    $stmt->bindParam(':last_login', $logTime);
                    $stmt->bindParam(':oauth_id', $google_id);
                    $stmt->execute();
                    $_SESSION['user_id'] = $google_id;
                    $_SESSION['user_name'] = $google_name;
                    $_SESSION['user_email'] = $google_email;
                    header('location: ' . SERVER_NAME);
                }
            } else {
                return "Login Failed!";
            }
        }
        return $client->createAuthUrl();
    }
}
