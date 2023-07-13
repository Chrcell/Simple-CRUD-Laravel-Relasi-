<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LARAVEL SIMPLE CRUD 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class='text-center mb-5'>DATA</h1>
    <div class="container mt-5">
      <a href="{{route('jenis.create')}}" class="btn btn-primary mb-3">TAMBAH</a>
      @if (session('success'))
      <div class="allert-alert success" role="alert">
        {{session('success')}}
      </div>
      @endif
      <div class="card">
        <div class="card-body"> 
          <table class="table">
            <thead>
              <th>JENIS</th>
            <tbody>
              @if ($jenis->count()>0)
              @foreach ($jenis as $no => $hasil)
              <tr>
                <th>{{$no+1 }}</th>
                <td>{{$hasil->jenisbarang}}</td>
                <td>
                  <form action="{{route('jenis.destroy', $hasil->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{route('jenis.edit', $hasil->id)}}" class="btn btn-success btn-sm">EDIT</a>
                    <button class="btn btn-danger btn-sm">HAPUS</button>
                  </form>
                </td>
              </tr>
              @endforeach

              @else
              <tr>
                <td colspan="10" align="center">TIDAK ADA DATA</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>