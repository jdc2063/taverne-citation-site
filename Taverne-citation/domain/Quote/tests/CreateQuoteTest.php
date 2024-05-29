<?php

use Domain\Quote\Entity\Quote;
use Domain\Quote\UseCase\CreateQuote;

use function PHPUnit\Framework\assertInstanceOf;

it("should create a quote", function () {
    $repository = new InMemoryPostRepository;

    $useCase = new CreateQuote($repository);


    $quote = $useCase->execute([
        'quote' => 'je suis le méchant',
        'author' => 'random1',
        'episode' => 10,
        'chapter' => 1,
        'source' => 'One Piece',
        'picture' => null
    ]);

    assertInstanceOf(Quote::class, $quote);
});
