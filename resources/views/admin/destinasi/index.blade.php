@include('layout.header')
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
                            <h2 class="content-header-title float-start mb-0">Data Destinasi</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="Destinasi">Data Destinasi</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Analytics Start -->
            <section class="app-user-list">
                <!-- list section start -->
                @include('layout.component.toast')
                <div class="card">
                    <div style="margin: 10pt">
                        <div class="card-datatable table-responsive pt-0">
                            <div class="card-header p-0">
                                <div class="head-label"><h5 class="mt-1">Tabel Data Destinasi</h5></div>
                                <div class="dt-action-buttons text-end">
                                    <a href="{{route('destinasi.create')}}" class="btn btn-success" id="tombol-tambah">
                                        <i data-feather='plus'></i>
                                    </a>
                                </div>
                            </div>
                            <table class="user-list-table table" id="destinasitable">
                                <thead class="table-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Cover</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kategori</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Edit/Hapus</th>
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
        const table = $('#destinasitable').DataTable(
            {
                serverSide : true,
                processing : true,
                language : {
                    processing : "<div class='spinner-border text-primary' role='status'> <span class='visually-hidden'>Loading...</span></div>"
                },

                ajax : {
                    url: '{{ route('destinasi.index') }}',
                    type: 'GET'
                },

                columns : [
                    {data: 'DT_RowIndex'},
                    { "data": "covered" },
                    { "data": "nama" },
                    { "data": "alamat" },
                    { "data": "kategorizz" },
                    { "data": "longitude" },
                    { "data": "latitude" },
                    {data: 'action'}
                ],


                order: [[0, 'asc']],
                "drawCallback" : function( settings ) {
                    feather.replace();
                }
            })
        });
</script>

