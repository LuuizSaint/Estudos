<?php

namespace app\models;

class User
{
    public ?int $id;
    public string $userName;
    public string $userEmail;
    public string $userPass;

    public function __construct(
        ?int $id = null,
        string $userName = "",
        string $userEmail = "",
        string $userPass = ""
    )
    {
        
    }
}