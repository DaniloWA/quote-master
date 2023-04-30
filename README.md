# QuoteMaster

QuoteMaster is a PHP library for generating random quotes from the [Quotable API](https://github.com/lukePeavey/quotable). It uses the GuzzleHttp library to make HTTP requests to the API and returns a formatted string with the quote content and author.

## Installation

You can install QuoteMaster using Composer:

```<php>
composer require danilowa/quote-master
```

## Usage

To use QuoteMaster, create an instance of the `RandomQuote` class and call the `from` method with an author name:

```<php>
php use Danilowa\QuoteMaster\RandomQuote;

$quoteGenerator = new RandomQuote(); 

$quote = $quoteGenerator->from('Albert Einstein');

echo $quote; // "Imagination is more important than knowledge. by Albert Einstein"
```

## License

QuoteMaster is released under the MIT License.
