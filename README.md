# Laravel Shopify Graph API Integration

Using this for personal projects, but feel free to use it if you want. I'm open to suggestions and pull requests.

## Installation

You can install the package via composer:

```bash
composer require edstevo/laravel-shopify-graph
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag=shopify-graph-config
```

This is the contents of the published config file:

```php
return [
    'enabled' => true,
    'api_verson' => null,
];
```

## Usage

Use LaravelShopifyGraph facade to post Shopify Graph API requests:

```php
    LaravelShopifyGraph::post(
        "your-shop.myshopify.com",
        "access_token",
        "query { shop { name } }",
        [] // optional laravelShopifyGraphs
    )

    app(\EdStevo\LaravelShopifyGraph\Laravellaravel-shopify-graphConnection::class)->post(
        "your-shop.myshopify.com",
        "access_token",
        "query { shop { name } }",
        [] // optional laravelShopifyGraphs
    )
```

Use Graph Request Classes to post Shopify Graph API requests:

```
    class CreateBlogArticleRequest extends LaravelShopifyGraphRequest
    {
        public function __construct(public BlogArticle $article)
        {
            //   
        }
    
        public function query(): string
        {
            return '
                mutation CreateArticle($article: ArticleCreateInput!) {
                  articleCreate(article: $article) {
                    article {
                      id
                    }
                    userErrors {
                      code
                      field
                      message
                    }
                  }
                }
            ';
        }
    
        public function variables(): array
        {
            return [
                'article' => ArticleCreateInput::from($this->article->toShopifyPayload())->toArray(),
            ];
        }
    
        public function handleResponse(array $data): void
        {
            return $data;
        }
    }
    
    $blogArticle = BlogArticle::first();
    $request = new CreateBlogArticleRequest($blogArticle);
    $response = $request->post("your-shop.myshopify.com", "access_token");
```

Use Laravel Queues to queue Shopify Graph API requests:
(recommended for mutations)

```
    class CreateBlogArticleRequest extends LaravelShopifyGraphJob
    {
        public function __construct(public BlogArticle $article, public string $shopDomain, public string $accessToken)
        {
            //   
        }
    
        public function getShopDomain(): string
        {
            return $this->shopDomain;
        }
    
        public function getAccessToken(): string
        {
            return $this->accessToken;
        }
    
        public function query(): string
        {
            return '
                mutation CreateArticle($article: ArticleCreateInput!) {
                  articleCreate(article: $article) {
                    article {
                      id
                    }
                    userErrors {
                      code
                      field
                      message
                    }
                  }
                }
            ';
        }
    
        public function variables(): array
        {
            return [
                'article' => ArticleCreateInput::from($this->article->toShopifyPayload())->toArray(),
            ];
        }
    
        public function handleResponse(array $data): void
        {
            $this->article->shopify_id = $data['articleCreate']['article']['id'];
            $this->article->save();
        }
    }
    
    $blogArticle = BlogArticle::first();
    CreateBlogArticleRequest::dispatchNow($blogArticle, "your-shop.myshopify.com", "access_token");
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

All contributions welcome within reason. I don't have a lot of time to maintain this package, so any help is appreciated.

## Credits

- [Edward Stephenson](https://github.com/edstevo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT).
