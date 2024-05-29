<?php

namespace Domain\Quote\Entity;

class Quote {
    public string $uuid;
    public string $quote;
    public string $author;
    public int $episode;
    public int $chapter;
    public string $source;
    public ?string $picture;

    public function __construct(string $quote = '', string $author = '', int $episode = 0, 
                                int $chapter = 0, string $source = '', ?string $picture = null, ?string $uuid = null)
    {
        $this->quote = $quote;
        $this->author = $author;
        $this->episode = $episode;
        $this->chapter = $chapter;
        $this->source = $source;
        $this->picture = $picture;
        $this->uuid = $uuid ?? uniqid();
    }
}