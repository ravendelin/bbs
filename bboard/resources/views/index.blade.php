<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Advertisements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="my-3 text-center">Advertisements</h1>
    @if (count($bbs) > 0)
    <table class="table table-striped table-borderless">
        <thead>
        <tr>
            <th>Item</th>
            <th>price, USD.</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bbs as $bb)
        <tr>
            <td><h4>{{ $bb->title }}</h4></td>
            <td>{{ $bb->price }}</td>
            <td>
                <a href="/{{ $bb->id }}/">more...</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endif
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
