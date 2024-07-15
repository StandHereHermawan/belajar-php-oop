<?php

class SocialMedia
{
    private string $name = "Social Media Unnamed";

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

final class Discord extends SocialMedia
{
    # Kode Discord.

    private string $name = "Discord";

    public function getName(): string
    {
        return $this->name;
    }
}

# class DiscordNipu extends Discord # Error saat Running.
# {
#     # Error, tidak bisa extends class final.
# }
