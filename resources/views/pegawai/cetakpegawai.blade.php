<html>

<head>
    <title>CETAK PEGAWAI</title>
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
            <h4><span>BIODATA PEGAWAI PT. DIKA<span></h4>
        </center>

    
     <!-- row 1 -->
     <div class="row">
     <div class="col-md-6"> NIP : {{$pegawai->nip}}
     </div>
     </div>
     <hr>

     <!-- row 2 -->

     <div class="row">
     <div class="col-md-4"> Nama : {{$pegawai->nama}}
     </div>
     </div>
     <hr>

          <!-- row 3 -->

      <div class="row">
     <div class="col-md-4"> Tempat, Tanggal Lahir : {{$pegawai->t_lahir}}, {{$pegawai->tgl_lahir}}
     </div>
     </div>
     <hr>

          <!-- row 4 -->

          <div class="row">
     <div class="col-md-4"> Agama : {{$pegawai->agama->agama}}
     </div>
     </div>
     <hr>

          <!-- row 5 -->

          <div class="row">
     <div class="col-md-4"> Jenis Kelamin : @if($pegawai->jns_kelamin == 'L') Laki-laki @else Perempuan @endif
     </div>
     </div>
     <hr>

          <!-- row 6 -->

          <div class="row">
     <div class="col-md-4"> Hobi : {{$pegawai->hobi}}
     </div>
     </div>
     <hr>

          <!-- row 7 -->

          <div class="row">
     <div class="col-md-4"> Status Pernikahan : {{$pegawai->sts_marital}}
     </div>
     </div>
     <hr>

          <!-- row 8 -->

          <div class="row">
     <div class="col-md-4"> Status Kepegawaian  : {{$pegawai->sts_pegawai}}
     </div>
     </div>
     <hr>

          <!-- row 9 -->

          <div class="row">
     <div class="col-md-4"> Pendidikan : @foreach($pegawai->pendidikan as $pp) <span class="badge badge-primary">{{$pp->pendidikan}}</span> @endforeach
     </div>
     </div>
     <hr>

          <!-- row 10 -->

          <div class="row">
     <div class="col-md-4"> No. Telp : {{$pegawai->no_telp}}
     </div>
     </div>
     <hr>

     @if($pegawai->suamiistri->count() !== 0)
     <!-- row 2 -->
     <div class="row">
        <center> Data Istri
        </center>
    </div>
     <div class="row">
     <div class="col-md-4"> Nama :  @foreach($pegawai->suamiistri as $psi) {{$psi->nama_istri_suami}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 3 -->

      <div class="row">
     <div class="col-md-4"> Tempat Lahir : @foreach($pegawai->suamiistri as $psi) {{$psi->t_lahir}} @endforeach
     </div>
     </div>
     <hr>

     <div class="row">
     <div class="col-md-4"> Tanggal Lahir : @foreach($pegawai->suamiistri as $psi) {{$psi->tgl_lahir}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 4 -->

          <div class="row">
     <div class="col-md-4"> Jenis Kelamin : @foreach($pegawai->suamiistri as $psi) @if($psi->jns_kelamin == 'L') Laki-laki @else Perempuan @endif @endforeach
     </div>
     </div>
     <hr>

          <!-- row 5 -->

          <div class="row">
     <div class="col-md-4"> Pendidikan  : @foreach($pegawai->suamiistri as $psi) @foreach($psi->pendidikan as $pendidikan)<span class="badge badge-secondary">{{$pendidikan->pendidikan}}</span> @endforeach @endforeach
     </div>
     </div>
     <hr>

          <!-- row 6 -->

          <div class="row">
     <div class="col-md-4"> Status Tunjangan : @foreach($pegawai->suamiistri as $psi) {{$psi->sts_tunjangan}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 7 -->

          <div class="row">
     <div class="col-md-4"> Tanggal Pernikahan : @foreach($pegawai->suamiistri as $psi) {{$psi->tgl_menikah}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 8 -->

          <div class="row">
     <div class="col-md-4"> Keterangan : @foreach($pegawai->suamiistri as $psi) {{$psi->ket}} @endforeach
     </div>
     </div>
     <hr>
     @endif

     @if($pegawai->anak->count() !== 0)
     <div class="row">
        <center> Data Anak
        </center>
    </div>
       <!-- row 2 -->
  
       <div class="row">
       <div class="col-md-4"> Nama : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->nama_anak}}</span> @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 3 -->
  
        <div class="row">
       <div class="col-md-4"> Tempat, Tanggal Lahir  : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->t_lahir}}</span> @endforeach , @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->tgl_lair}}</span> @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 4 -->
  
            <div class="row">
       <div class="col-md-4"> Jenis Kelamin : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->jns_kelamin}} <span> @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 5 -->
  
            <div class="row">
       <div class="col-md-4"> Pendidikan : @foreach($pegawai->anak as $anak) @foreach($anak->pendidikan as $pdd)<span class="badge badge-primary">{{$pdd->pendidikan}}</span> @endforeach @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 6 -->
  
            <div class="row">
       <div class="col-md-4"> Status Tunjangan : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->sts_tunjangan}}</span> @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 7 -->
  
            <div class="row">
       <div class="col-md-4"> Status Pernikahan : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->sts_menikah}}</span> @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 8 -->
  
            <div class="row">
       <div class="col-md-4"> Keterangan : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->ket}}</span> @endforeach
       </div>
       </div>
       <hr>
  @endif
     @if($pegawai->orangtua->count() !== 0)

     <div class="row">
        <center> Data Orang Tua
        </center>
    </div>
     <!-- row 2 -->

     <div class="row">
     <div class="col-md-4"> Nama : @foreach($pegawai->orangtua as $org) {{$org->nama_ortu}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 3 -->

      <div class="row">
     <div class="col-md-4"> Tempat, Tanggal Lahir :  @foreach($pegawai->orangtua as $org) {{$org->t_lahir}} @endforeach,  @foreach($pegawai->orangtua as $org) {{$org->tgl_lahir}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 4 -->

          <div class="row">
     <div class="col-md-4"> Status : @foreach($pegawai->orangtua as $org) {{$org->jns_kelamin}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 5 -->

          <div class="row">
     <div class="col-md-4"> Alamat :  @foreach($pegawai->orangtua as $org) {{$org->alamat}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 6 -->

          <div class="row">
     <div class="col-md-4"> Pekerjaan :  @foreach($pegawai->orangtua as $org) {{$org->pekerjaan}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 7 -->

          <div class="row">
     <div class="col-md-4"> Keterangan :  @foreach($pegawai->orangtua as $org) {{$org->ket}} @endforeach
     </div>
     </div>
     <hr>
@endif

         <!-- {{-- <div class="float-right text-left" style="width:30%">
            <p>Tanjungpinang, </p>
            <p>Yang menerima,<p>



           {{$pegawai->users->name}}

    </div> --}} -->


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
