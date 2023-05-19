<?php

declare(strict_types=1);

namespace BombenProdukt\Passage\Http;

final readonly class Passage
{
    private Client $client;

    public function __construct(array $config)
    {
        $this->client = new Client($config);
    }

    public function app(): App
    {
        return new App($this->client);
    }

    public function authenticatedUser(string $token): AuthenticatedUser
    {
        return new AuthenticatedUser($this->client->withToken($token));
    }

    public function magicLink(): MagicLink
    {
        return new MagicLink($this->client);
    }

    public function sessionManagement(): SessionManagement
    {
        return new SessionManagement($this->client);
    }

    public function user(): User
    {
        return new User($this->client);
    }

    public function webAuthn(): WebAuthn
    {
        return new WebAuthn($this->client);
    }
}
