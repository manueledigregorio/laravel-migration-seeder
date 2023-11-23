<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>

    <div class="container">
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">Company</th>
                <th scope="col">departure_station</th>
                <th scope="col">arrival_station</th>
                <th scope="col">departure_time</th>
                <th scope="col">arrival_time</th>
                <th scope="col">train_code</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $items )
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$items->agency}}</td>
                        <td>{{$items->departure_station}}</td>
                        <td>{{$items->arrival_station}}</td>
                        <td>{{$items->departure_time}}</td>
                        <td>{{$items->arrival_time}}</td>
                        <td>{{$items->train_code}}</td>
                    </tr>
                @endforeach


            </tbody>
          </table>
    </div>

</body>
</html>
