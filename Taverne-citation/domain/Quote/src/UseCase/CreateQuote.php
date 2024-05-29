<?php

namespace Domain\Quote\UseCase;

use Domain\Quote\Entity\Quote;

class CreateQuote
{
    public function execute(array $quoteData): ?Quote {
        $quote = new Quote($quoteData['quote'], $quoteData['author'], $quoteData['episode'], $quoteData['chapter'], $quoteData['source'], $quoteData['picture']);

        return $quote;
    }
}