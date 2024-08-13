@include('layout.header')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            {{-- directory content --}}
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Kategori Management</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="alternatif">Kategori Management</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @error('email')
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Error</h4>
                    <div class="alert-body">
                        {{$message}}
                    </div>
                </div>
            @enderror
            @error('password')
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Error</h4>
                    <div class="alert-body">
                        {{$message}}
                    </div>
                </div>
            @enderror
            @if (session()->get('success'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Sukses</h4>
                <div class="alert-body">
                    {{session('success')}}
                </div>
              </div>
            @elseif (session()->get('error'))
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error</h4>
                <div class="alert-body">
                    {{session('error')}}
                </div>
              </div>
            @endif
            <!-- Dashboard Analytics Start -->
            <section class="app-user-list">
                <!-- list section start -->
                <div class="card">
                    <div style="margin: 10pt">
                    <div class="card-datatable table-responsive pt-0">
                        <div class="card-header p-0">
                            <div class="head-label"><h5 class="mt-1">Tabel Kategori</h5></div>
                            <div class="dt-action-buttons text-end">
                                <button data-toggle="modal" data-bs-toggle="modal" data-bs-target="#tambah-user" href="javascript:void(0)" class="btn btn-success" id="tombol-tambah">
                                    <i data-feather='plus'></i>
                                </button>
                            </div>
                        </div>
                        <table class="user-list-table table" id="kategoritable">
                            <thead class="table-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    </div>
                </div>
                <!-- list section end -->
            </section>


        </div>
    </div>
</div>


{{-- MODAL --}}
@foreach ($kategoris as $usd)
<div class="modal fade text-start" id="modaledit{{$usd->id}}" tabindex="-1" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Edit Kategori</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="user/edit" method="post">
                @csrf
                <div class="modal-body">
                    <input type="text" name="idedit" placeholder="Id Alternatif" value="{{$usd->id}}" class="form-control" hidden>

                    <label> Kategori: </label>
                    <div class="mb-1">
                        <input type="text" name="kategori" placeholder=" Kategori" value="{{$usd->kategori}}" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Accept</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

{{-- modal delete --}}
@foreach ($kategoris as $usd)
<div class="modal fade text-start modal-danger" id="modaldel{{$usd->id}}" tabindex="-1" aria-labelledby="myModalLabel140"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel140">Konfirmasi Hapus Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Kategori tersebut akan dihapus permanen beserta Destinasi terkait, tetap Hapus?
            </div>
            <div class="modal-footer">
            <a href="{{route('kategori.destroy', ['kategori' => $usd->id])}}" class="btn btn-danger">Ya</a>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Modal to add new user starts-->
<div class="modal fade text-start" id="tambah-user" tabindex="-1" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Tambah Kategori</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('kategori.store')}}" method="post">
                @csrf
                <div class="modal-body">

                    <label>Kategori: </label>
                    <div class="mb-1">
                        <input type="text" name="kategori" placeholder="Kategori" value="" class="form-control" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Accept</button>
                </div>
            </form>
        </div>
    </div>
</div>
 <!-- Modal to add new user Ends-->

{{-- MODAL END --}}


<!-- END: Content-->
@include('layout.footer')
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-number-input.min.js')}}"></script>
<script>
    $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

    $(document).ready(function(){
        const table = $('#kategoritable').DataTable(
            {
                serverSide : true,
                processing : true,
                language : {
                    processing : "<div class='spinner-border text-primary' role='status'> <span class='visually-hidden'>Loading...</span></div>"
                },

                ajax : {
                    url: '{{ route('kategori.index') }}',
                    type: 'GET'
                },

                columns : [
                    {data: 'DT_RowIndex'},
                    {data: 'kategori'},
                    {data: 'action'}
                ],

                order: [[0, 'asc']],
                "drawCallback" : function( settings ) {
                    feather.replace();
                }
            })
        });
</script>
