<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
    </head>
    <body>

    
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    
                    <div class="card-body">
                    
        <form action="api/song" method="POST">

            <div class="form-group">
                <label for="">Song Name</label>
                <input type="text" class="form-control" name="name"  >
                </div>

                <div class="form-group">
                <label for="">Artist Name</label>
                <input type="text" class="form-control" name="artist" >
                </div>
            
            <button type="submit" class="btn btn-primary">Add</button>

        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <div class="row justify-content-center">
    <div class="col-md-6">
<table class="table">
  <thead class="thead-light">
    <tr>
      
      <th scope="col">Song Name</th>
      <th scope="col">Artist</th>
     
    </tr>
  </thead>
  <tbody>
   
      @foreach($songs as $song) 
        <tr>
        <td>{{$song->name}}</td>
        <td>{{$song->artist}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
    
    </body>
</html>
