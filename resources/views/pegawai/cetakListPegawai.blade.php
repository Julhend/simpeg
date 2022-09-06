<html>

<head>
    <title>CETAK LIST PEGAWAI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 8pt;
        }

        footer {
            position: fixed;
            bottom: -20px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            text-align: center;
            line-height: 35px;
        }

        .ttd  {
            position:absolute;
            right:0%;
            top:50%;
        }

        .line {
            line-height: 40%;
        }

        h4 {
        width: 100%; 
        text-align: center; 
        border-bottom: 1px solid #000; 
        line-height: 0.1em;
        margin: 10px 0 20px; 
        } 

        h4 span { 
            background:#fff; 
            padding:0 10px; 
        }
    </style>
 
        <center>
            <h4><span>LIST PEGAWAI PT. DIKA<span></h4>
        </center>

        <table class="table responsive-sm">
            <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama </th>
                <th>No Telpon</th>
                <th>Hobi</th>
                <th>Status Pernikahan</th>
                <th>Status Kepegawaian</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pegawai as $p)
            <tr>
                <td>{{$p->nip}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->t_lahir}}, {{$p->tgl_lahir}}</td>
                <td>@if($p->jns_kelamin == 'L')Laki-laki @else Perempuan @endif</td>
                <td>{{$p->agama->agama}}</td>
                <td>{{$p->no_telp}}</td>
                <td>{{$p->hobi}}</td>
                <td>{{$p->sts_marital}}</td>
                <td>{{$p->sts_pegawai}}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>

     
    <!-- {{-- <h1>Invoice</h1>
    Awesome company<br />
    7026 Hunters Creek Dr<br />

    <h2 style="margin-top: 3rem">Bill to</h2>
    {{$pegawai->users->name}}<br /> --}} -->

    <!-- <div class="ttd">
       Yang Menerima : __________________ <br />
    </div> -->


    <footer>
        Tanjungpinang | <?php echo date("F j, Y");?>
    </footer>
</body>

</html>
