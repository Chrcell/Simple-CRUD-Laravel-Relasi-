<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LARAVEL SIMPLE CRUD 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Menambahkan Data</h1>  
        <div class="card">
            <div class="card-body">
       <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="namabarang" class="form-label">NAMA BARANG</label>
          <input type="text" class="form-control" name="namabarang" id="namabarang" >
        </div>

        <div class="mb-3">
          <label for="jenis" class="form-label">JENIS</label>
          <select type="text" class="form-control" name="jenis" value="" id="jenis">
           <option value="">-- PILIH --</option>
            @foreach ($jenis as $jb)
            <option value="{{ $jb->id }}">
              {{ $jb->jenisbarang }}
            </option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="tgldikirim" class="form-label">TGL DIKIRIM</label>
          <input type="number" class="form-control" name="tgldikirim" id="tgldikirim" >
        </div>

        <div class="mb-3">
          <label for="tglditerima" class="form-label">TGL DITERIMA</label>
          <input type="number" class="form-control" name="tglditerima" id="tglditerima" >
          
        </div>
        <a href="{{ route('barang.index')}}" class="btn btn-default">
        <button type="submit" class="btn btn-primary ">Simpan</button>
        
      </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>