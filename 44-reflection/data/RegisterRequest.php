<?php

class RegisterRequest
{
    private string $username;
    private string $password;
    private string $email;
    private string $address;

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

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAddress(): string
    {
        return $this->address;
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

    public function unsetEmail(): void
    {
        unset($this->email);
    }

    public function unsetAddress(): void
    {
        unset($this->address);
    }

    public function issetPassword(): bool
    {
        return isset($this->password);
    }

    public function issetUsername(): bool
    {
        return isset($this->username);
    }

    public function issetEmail(): bool
    {
        return isset($this->email);
    }

    public function issetAddress(): bool
    {
        return isset($this->address);
    }
}
