@extends('layout.master')
@section('title', 'Dashboard')

@section('title-card')
    Data Perjalanan
@endsection

@section('section')

@if (Session::has('message'))
    <div id="alertCreatePerjalanan" class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>
@endif

@if (isset($data))
<div>
    <div class="pb-5">
        <form class="form-inline" method="GET" action="/urutkan">
            {{ csrf_field() }}
            <div class="row">
                <h5 class="mt-2 ml-3">urutkan berdasarkan :</h5>
                <select onchange="sortByCheck(this);" class="form-control form-select ml-3" type="" name="orderBy">>
                    <option value="lokasi">Lokasi</option>
                    <option value="suhu">Suhu</option>
                    <option value="tanggal">Tanggal</option>
                    <option value="jam">Jam</option>
                </select>
                <select onchange="sortByCheck(this);" class="form-control form-select mx-3" type="" name="sortBy">
                    <option value="asc" id="sortByAsc">A - Z</option>
                    <option value="desc" id="sortyByDesc">Z - A</option>

                </select>
                <button type="submit" class="btn btn-dark mx-3" id="btnSortBy">
                    Cari
                    <i class="fas fa-search pl-2"></i>
                </button>
            </div>
        </form>
    </div>


    <div class="table-responsive">
        <table class="table">
            @php
                $num = 1;
            @endphp
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Suhu</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jam</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $value)
                    <tr>
                        <th scope="row">{{ $num++ }}</th>
                        <td>{{ $value->lokasi }}</td>
                        <td>{{ $value->suhu }}</td>
                        <td>{{ $value->tanggal }}</td>
                        <td>{{ $value->jam }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            {{ $data->links() }}
        {{-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
        </nav> --}}
    </div>
</div>

@elseif (!isset($data))
    <h5>data tidak ditemukan</h5> <a href="/dashboard">Kembali</a>
@endif

<script>
    let alertPerjalanan = document.getElementById('alertCreatePerjalanan')

    let btnSortBy = document.getElementById('btnSortBy');

    let sortByAsc = document.getElementById('sortByAsc');
    let sortByDesc = document.getElementById('sortyByDesc');

    function sortByCheck(that) {
        let value = that.value;

        if(value === "suhu"){
            sortByAsc.innerHTML = "Terkecil";
            sortByDesc.innerHTML = "Terbesar";
        } else if(value === "tanggal"){
            sortByAsc.innerHTML = "Terbaru";
            sortByDesc.innerHTML = "Terlama";
        } else if(value === "jam"){
            sortByAsc.innerHTML = "Terbaru";
            sortByDesc.innerHTML = "Terlama";
        } else if(value === "lokasi") {
            sortByAsc.innerHTML = "A - Z";
            sortByDesc.innerHTML = "Z - A";
        }
    }
</script>

@endsection
