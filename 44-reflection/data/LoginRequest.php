<?php

class LoginRequest
{
    private string $username;
    private string $password;

    public function __construct()
    {
        # Kode Kosong
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function unsetPassword(): void
    {
        unset($this->password);
    }

    public function unsetUsername(): void
    {
        unset($this->username);
    }

    public function issetPassword(): bool
    {
        return isset($this->password);
    }

    public function issetUsername(): bool
    {
        return isset($this->username);
    }
}
