<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    
    <?php
    
        //echo $users[0]["name"];

        foreach($users as $user)
        {
            echo $user["name"];
            echo $user["age"];
            echo "<br>";
        }

    ?>
    
    @foreach ($users as $user)

    @if ($user["age"] >= 18)

    <h1>{{ $user["name"] }} ma {{ $user["age"] }} rokov a preto moze soferovat auto</h1>
    
    @else

    <h1>{{ $user["name"] }} ma {{ $user["age"] }} rokov a preto nemoze soferovat auto</h1>

    @endif

    @endforeach


</body>
</html>