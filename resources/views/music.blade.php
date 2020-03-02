<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <button>Add Song</button>

    <table>
    <tr>
        
    <th>Name</th>
    <th>Artist</th>
    </tr>
        @foreach($songs as $song)
    <tr>
        <th>{{$song->name}}</th> 
        <th>{{$song->artist}}</th>
        </tr>
        @endforeach    
    </table>
</body>
</html>