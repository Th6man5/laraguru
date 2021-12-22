@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mx-auto w-80">
        <div class="card-group">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5 class="card-title">Data Guru</h5>
                     <h6 class="card-subtitle mb-2 text-muted"></h6>
                     <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum ad magnam distinctio veritatis accusantium rerum veniam quidem, beatae facere hic molestiae iure nihil non aut error numquam consequatur perspiciatis unde.</p>
                     <a class="btn btn-dark" href="http://127.0.0.1:8000/guru" role="button">Lihat Data</a>
                     <a class="btn btn-primary" href="http://127.0.0.1:8000/guru/create" role="button">Membuat Data</a>
<br><br><br>
                     <h5 class="card-title">Data Siswa</h5>
                     <h6 class="card-subtitle mb-2 text-muted"></h6>
                     <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae tempore ex ad. Velit saepe dolorem corporis amet itaque aspernatur quia consequuntur eos obcaecati, labore, alias eius impedit. Itaque, beatae perferendis!</p>
                     <a class="btn btn-primary" href="http://127.0.0.1:8000/siswa" role="button">Lihat Data</a>
                     <a class="btn btn-primary" href="http://127.0.0.1:8000/siswa/create" role="button">Membuat Data</a>
<br><br><br>
                     <h5 class="card-title">Data Kelas</h5>
                     <h6 class="card-subtitle mb-2 text-muted"></h6>
                     <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae officiis quia impedit molestiae, veritatis minima officia architecto ipsam placeat saepe ex illo? Sed quos saepe architecto earum? Amet, nemo?</p>
                     <a class="btn btn-primary" href="http://127.0.0.1:8000/kelas" role="button">Lihat Data</a>
                     <a class="btn btn-primary" href="http://127.0.0.1:8000/kelas/create" role="button">Membuat Data</a>
<br><br><br>
                     <h5 class="card-title">Data Ruangan</h5>
                     <h6 class="card-subtitle mb-2 text-muted"></h6>
                     <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum corrupti eligendi sed reiciendis in iure voluptatibus, culpa odio alias quaerat, eius officiis porro, natus aperiam perspiciatis! Autem totam corrupti cum.</p>
                     <a class="btn btn-primary" href="http://127.0.0.1:8000/ruangan" role="button">Lihat Data</a>
                     <a class="btn btn-primary" href="http://127.0.0.1:8000/ruangan/create" role="button">Membuat Data</a>

                     


</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
