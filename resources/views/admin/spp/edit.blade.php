<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Pembayaran SPP | SMK Telkom</title>
    <link rel="stylesheet" href="{{asset ('css/dashboard/style_adminHome.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <a href="#">Data Kelas</a>

        <form method="POST" action="/logout" class="logout">
          @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
    </header>

    <aside>
        <ul>
            <li>
                <a href="{{ url('/admin/home') }}">Dashboard</a>
            </li>

            <li>
                <a href="">Data Pengguna</a>
            </li>

            <li>
                <a href="{{ url('/kelas/index') }}">Data Kelas</a>
            </li>

            <li>
                <a href="">Data Siswa</a>
            </li>

            <li>
                <a href="{{ url('/spp/index') }}">Data Spp</a>
            </li>

            <li>
                <a href="">Entry Pembayaran</a>
            </li>

            <li>
                <a href="">History Pembayaran</a>
            </li>

        </ul>
    </aside>

    <div class="content">
        <h1>
           <center>Ubah Data SPP</center>
        </h1>
        <br>

        <form method="POST" action="{{url('spp/index/' . $spp->id_spp)}}">
         @csrf
         @method('PUT')

            <label><b> ID Spp </b></label>
            <input type="text" name="id_spp" class="form-control" value="{{ $spp->id_spp }}">

            <label><b> Tahun </b></label>
            <input type="text" name="tahun" class="form-control" value="{{ $spp->tahun }}">

            <label><b> Nominal per Tahun </b></label>
            <input type="text" name="nominal" class="form-control" value="{{ $spp->nominal }}">
            <br>
        
            <input type="submit" value="simpan" name="simpan" class="btn btn-success">  
        </form>
        
    </div>
    
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>