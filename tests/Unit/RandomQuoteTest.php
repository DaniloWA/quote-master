<?php

use Danilowa\QuoteMaster\RandomQuote;

it('should return a random quote', function () {
    $fakeCliente = getResponseClient();

    $quoteClass = new RandomQuote($fakeCliente);

    $quote = $quoteClass->from('Stephen Hawking');

    expect($quote)->toBe('Look up at the stars and not down at your feet. Try to make sense of what you see, and wonder about what makes the universe exist. Be curious. by Stephen Hawking');
});
