<?php

declare(strict_types=1);

namespace BombenProdukt\Passage\Http;

final readonly class App
{
    public function __construct(private Client $client)
    {
        //
    }

    public function info(): array
    {
        return $this->client->get(path: '/')->json('app');
    }
}
