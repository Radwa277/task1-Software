<!DOCTYPE html>
<html lang="en">
   
    <head>
    <meta charset="UTF_8">
    <meta name="viewport" content="width=device_width,intial-scale=1.0">
    <title>Task1 Soft</title>
    </head>
    <body>
        <h1>List of names:</h1>
        @foreach ($student as $student)

          
          <li>{{$student}} </li>
           
        @endforeach
        
        
    </body>
   
</html>