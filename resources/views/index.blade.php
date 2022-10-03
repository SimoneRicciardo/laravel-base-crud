<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">    
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">src</th>
                  <th scope="col">titolo</th>
                  <th scope="col">tipo</th>
                  <th scope="col">cottura</th>
                  <th scope="col">peso</th>
                  <th scope="col">descrizione</th>
                  <th scope="col">azioni</th>
                </tr>
              </thead>
              <tbody>
    
                @foreach ($comics as $comic)
                 <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->thumb}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                  </tr>
                @endforeach
    
              </tbody>
        </table>
    </div>
</body>
</html>