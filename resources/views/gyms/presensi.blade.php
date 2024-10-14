@extends('dashboard')

@section('content')

<style>
    .gambar {
        height: 100px;
        border-radius: 100px;
        border: 2px solid #ddd;
        background-image: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .gambarKelas {
        width: 300px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card {
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.03);
    }

    .rating-icon {
        color: Gold;
    }

    .table {
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
    }

    .table th, .table td {
        vertical-align: middle;
        padding: 15px;
    }

    .border-gold {
        border: 4px solid gold;
    }

    .border-silver {
        border: 4px solid silver;
    }

    .border-platinum {
        border: 4px solid lightblue;
    }

    .border-black {
        border: 4px solid black;
    }

    #cek-button {
        background-color: #3d4a55;
        color: white;
        border-radius: 5px;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 14px;
    }

    #cek-button:hover {
        background-color: #4f5d6b;
        color: white;
        position: right;
    }


</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">


<div class="content">
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body d-flex">
                <div class="my-auto">
                    <img src="{{ $kelas['gambar'] }}" alt="gambar" style="width: 270px;">
                </div>
                <div class="ml-4">
                    <div class="d-flex alignt-items-center" style="gap: 5px">
                        <h4><strong>{{$kelas['nama_kelas']}}</strong></h4>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#detail">
                            <div class="badge bg-success"><i class="fas fa-eye"></i></div>
                            
                        </a> 
                    </div>
                    <p><strong>Instruktur: {{$kelas['nama']}}</strong></p>
                    <p><strong>Ruang: {{$kelas['ruang']}}</strong></p>
                    <p><strong>Total Member: {{$kelas['member']}}</strong></p>
                    <div class="d-flex">
                        <p><strong>Rating: </strong>
                            @if ($kelas['rating'] == 5)
                                <div class="rating-icon">
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                </div>
                                @elseif ($kelas['rating'] == 4)
                                <div class="rating-icon">
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                </div>
                                @elseif ($kelas['rating'] == 3)
                                <div class="rating-icon">
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                </div>
                            @endif
                        </p>
                        
                    </div>
                    
                </div>
                <div class="ml-auto">
                    <h4>Tanggal: {{\Carbon\Carbon::now()->format('d-M-Y')}}</h4>
                </div>
            </div>
        </div>

        <!-- <div class="container" style="widht: 85%"> -->
            <div class="accordion mb-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Section 1: Informasi Umum
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Informasi umum mengenai kelas.</strong> Detail umum kelas dapat dimasukkan di sini.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Section 2: Jadwal Kelas
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="fs-5 fw-bold">Tanggal: {{date('d-M-Y')}}</p>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Section 3: Informasi Tambahan
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Silahkan Diisi bebas Apa Aja Bolee</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button id="cek-button" class="btn btn-info" data-toggle="tooltip" style="backround color: white;" postion="right;" data-placement="right" title="Cek Member">
                    <i class="fas fa-info-circle" style="bacround color: grey;"></i> Cek
                </button>
            </div>
        <!-- </div> -->
        <div class="d-flex justify-content-between ">
            <h3><strong>Daftar Member</strong></h3>
            <button type="button " class="btn btn-sm btn-primary mb-3" id="liveToastBtn"><i class="fa-solid fa-check"
                    style="color: #ffffff;"></i> Presensi
            </button>
        </div>

            <div class = "row">
                @foreach ($member_total as $langganan)
                <div class="col-md-4">
                    <div class = "card" style="border: 4px solid">
                        <img src="{{$langganan['gambar']}}" class="card-img-top" alt="gambar">
                        @if ($langganan['jenisKartu'] == "Gold" ? 'border-black' :'')
                        <div class ="card-body" style="background-color: yellow">
                        @elseif($langganan['jenisKartu'] == "Silver")
                        <div class="card-body" style="background-color : grey">
                        @elseif($langganan['jenisKartu'] == "Platinum")
                        <div class="card-body" style="background-color : aqua">
                        @elseif($langganan['jenisKartu'] == "Black")
                        <div class="card-body" style="background-color : black; color: white">
                        @endif
                            <h4>{{$langganan['nama']}}</h4>
                            <p>Email :  {{$langganan['email']}}</p>
                            <p>No Telp :    {{$langganan['telepon']}}</p>
                            <p>Jenis Kartu :  {{$langganan['jenisKartu']}}</p>
                            @if ($langganan['metodPembayaran'] == "Hutang Teman")
                            <p>Metode Pembayaran :</p>
                            <p1 class="badge bg-danger">{{$langganan['metodPembayaran']}}</p1>
                            @elseif ($langganan['metodPembayaran'] == "Kredit")
                            <p>Metode Pembayaran :</p>
                            <p1 class="badge bg-success">{{$langganan['metodPembayaran']}} </p1>
                            @elseif ($langganan['metodPembayaran'] == "Shoppe pay later")
                            <p>Metode Pembayaran :</p>
                            <p1 class="badge bg-warning">{{$langganan['metodPembayaran']}}</p1>
                            @elseif ($langganan['metodPembayaran'] == "Langsung Bayar")
                            <p>Metode Pembayaran :</p>
                            <p1 class="badge bg-info">{{$langganan['metodPembayaran']}}</p1>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        <!-- <div class="row row-cols-1 row-cols-md-3 g-4 mx-0">
            @forelse($member_total as $langganan)
                <div class="col">
                    <div class="card h-100 border border-4 border-dark shadow-none">
                        <img src="{{ $langganan['gambar'] }}" class="card-img-top" alt="gambar_card">
                        <div class="card-body {{($langganan['jenisKartu'] === 'Gold') ? 'bg-warning' : 'bg-secondary'}}">
                            <h5 class="card-title fw-bold my-0">{{ $langganan['nama'] }}</h5>
                            <p class="card-text my-0">Email : {{ $langganan['email'] }}</p>
                            <p class="card-text my-0">No Telepon : {{ $langganan['telepon'] }}</p>
                            <p class="card-text my-0">Jenis Kartu :
                                <span
                                    class="badge border {{ ($langganan['jenisKartu'] === 'Gold') ? 'border-dark bg-warning' : 'border-dark bg-secondary'}} rounded-pill fw-bold">
                                    {{ $langganan['jenisKartu'] }}
                                </span>
                            </p>
                            <p class="card-text my-0">Metode Pembayaran :
                                <span
                                    class="badge {{ ($langganan['metodPembayaran'] === 'Hutang Teman') ? 'text-bg-danger' : 'text-bg-primary' }}">
                                    {{ $langganan['metodPembayaran'] }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger">
                    Data Member masih kosong
                </div>
            @endforelse
        </div> -->

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive"
                aria-atomic="true" role="alert" id="liveToast">
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fa-solid fa-check me-3" style="color: #ffffff;"></i> Berhasil Presensi Member
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="detail" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: green">
                <h5 class="modal-title">
                    Detail Kelas 
                </h5>

                <button class="close" data-bs-dismiss="modal" aria-label="close">
                    <span aria-hidden="true"> &times; </span>
                </button>
                
            </div>
            
            <div class="modal-body">
                <h4><strong>{{$kelas['nama_kelas']}}</strong></h4>
                <p><strong>Instruktur: </strong>{{$kelas['nama']}}</p>
                <p><strong>Kode Instruktur: </strong>{{$kelas['kode']}}</p>
                <p><strong>Hari Kelas: </strong>{{$kelas['hari']}}</p>
                <p><strong>Tanggal: </strong>{{$kelas['tanggal']}}</p>
                <p><strong>Ruang: </strong>{{$kelas['ruang']}}</p>
                <div class="d-flex">
                <p><strong>Rating: </strong>
                    @if ($kelas['rating'] == 5)
                        <div class="rating-icon">
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                        </div>
                        @elseif ($kelas['rating'] == 4)
                        <div class="rating-icon">
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                        </div>
                        @elseif ($kelas['rating'] == 3)
                        <div class="rating-icon">
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                            <i class="fas fa-star fa-xs" style="color: black"></i>
                        </div>
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>

<script>

    document.getElementById('liveToastBtn').addEventListener('click', function () {
        var toastEl = document.getElementById('liveToast');
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    });

</script>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


@endsection
