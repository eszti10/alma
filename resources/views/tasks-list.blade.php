<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Valtozok</title>
    </head>
    <body>

        <ul>
            @foreach($tasks as $task)
              <li>{{ $task }}</li>
            @endforeach
          </ul>

          <h1>{{ $foo }}</h1>
    </body>
</html>
