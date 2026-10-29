<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-success text-white">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
        <a class="nav-link" href="/about">About</a>
        <a class="nav-link" href="/project">Project</a>
      </div>
    </div>
  </div>
</nav>
    <div class="container m-5">
    <h1> {{ $title }}</h1>
    <table style="border-collapse: collapse; width: 100%; ">
        <thead>
            <tr>
                <th style="padding: 2px;">No</th>
                <th style="padding: 10px;">PROJECT</th>
                <th style="padding: 10px;">SEMESTER</th>
                <th style="padding: 10px;">DESCRIPTION</th>
            </tr>
        </thead>
        <tbody>
          @for ($i = 1; $i <= 6; $i++)
            @if ($i % 2 == 1)
              @php ($semester = "ODD")
            @else
              @php ($semester = "EVEN")
            @endif
            @if ($i == 1)
              @php ($desc = $description [1])
            @elseif ($i == 6)
              @php ($desc=$description [2])
            @else
              @php ($desc =$description[0])
            @endif
            
            <tr>
                <td style="border: 1px solid white; padding: 10px;"> {{ $i }}</td>
                <td style="border: 1px solid white; padding: 10px;"> {{ $Programs [$i - 1] }}</td>
                <td style="border: 1px solid white; padding: 10px;">{{$semester}}</td>
                <td style="border: 1px solid white; padding: 10px;">{{ $desc}}</td>
            </tr>
          @endfor  
        </tbody>
    </table>
</div>
    
  </body>
</html>

