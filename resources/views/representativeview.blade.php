<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sales Representative</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="representative-view">
      <div>ID : {{$representative[0]->id}}</div>
      <div>Name : {{$representative[0]->name}}</div>
      <div>Email : {{$representative[0]->email}}</div>
      <div>Telephone : {{$representative[0]->telephone}}</div>
      <div>Joined Date : {{$representative[0]->created_at}}</div>
      <div>Current Route : {{$representative[0]->current_route}}</div>
      <div>Comments : {{$representative[0]->comments}}</div>
      <div>
        <a href="{{url('/')}}">
            <button class="btn btn-back">Back</button>
        </a>
      </div>
    <div>
  </body>
</html>
