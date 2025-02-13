#PHP notes
I'm on lesson 25

Lesson 03
`pwd` - print working directory
`mkdir /websites` - create directory "websites"
`code .` - open all files in project with vscode

`php -h` - help from php
`php -S localhost:8888` - run with built-in web servers -S <addr>:<port>
`F2` - rename file

Lesson 04
Вывод строки в разметку

```php
  <?php
    print "Hello,   World!";
  ?>
```

```php
  <?php
    $greeting = "Hello, "
    echo $greeting . " " ."World!"; //variables and concationation
  ?>
```

Lesson 06
```html
<body>
    <?php
        $usernames = [
            "JohnDoe",
            "JaneDoe",
            "FrankDoe"
        ];
    ?>

    <h1>Top Performing Users</h1>

    <ol>
        <?php foreach ($usernames as $username) : ?>
            <li><?= $username ?></li>
        <?php endforeach; ?>
    </ol>
</body>
```
Lesson 08
Lambda Functions

```php
 $filteredBooks = array_filter($books, function ($book) {
            return $book['author'] === 'Andy Weir';
        });
```
В PHP есть встроенная функция для фильтрации array_filter($some_array, $function_how_to filter)
```php
  $filteredBooks = array_filter($books, function ($book) {
  return $book['author'] === 'Andy Weir';
});
```
Lesson 08
Как динамически определять что в строке запроса и какие стили выводить
```html
<a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
```
```php
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}
```

Lesson 15
Как показать нужную страницу по строке запроса?
Находим URI, прозодим по роутам и запрашиваем нужный контролер, в котором подключена нужная view

```php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);
```
[HTTP response status codes](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status)
Informational responses (100 – 199)
Successful responses (200 – 299)
Redirection messages (300 – 399)
Client error responses (400 – 499)
Server error responses (500 – 599)