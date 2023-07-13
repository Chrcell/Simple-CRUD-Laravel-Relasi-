<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">DATA BARANG</h1>  
        <div class="card">
            <div class="card-body">
       <form action="{{ route('barang.update', $barang->id)}}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
          <label for="namabarang" class="form-label">NAMA BARANG</label>
          <input type="text" class="form-control" name="namabarang" value="{{ $barang->namabarang }}" id="nama" >
        </div>

        <div class="mb-3">
          <label for="jenis" class="form-label">JENIS</label>
          <select class="form-control" name="jenis" id="jenisbarang">
            @foreach ($jenis as $jb)
            @if($jb->id==$barang->jenis)
            <option selected value="{{ $jb->id }}" {{($barang->jenisbarang->jenis ?? old('jenis')) == $jb->id ? 'selected' : '' }}>
                {{ $jb->jenisbarang }}
            </option>
            @else 
             <option value="{{ $jb->id }}" {{($barang->jenisbarang->jenis ?? old('jenis')) == $jb->id ? 'selected' : '' }}>
                {{ $jb->jenisbarang }}
            </option>
            @endif
            @endforeach
        </select>
        </div>

        <div class="mb-3">
          <label for="tgldikirim" class="form-label">TGL DIKIRIM</label>
          <input type="text" class="form-control" name="tgldikirim" value="{{ $barang->tgldikirim }}"  id="tgl1" >
        </div>

        <div class="mb-3">
            <label for="tglditerima" class="form-label">TGL DITERIMA</label>
          <input type="text" class="form-control" name="tglditerima" value="{{ $barang->tglditerima }}"  id="tgl2" >
          
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>