<link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/editors/quill/katex.min.css">
<link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
<link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/editors/quill/quill.snow.css">
<link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/editors/quill/quill.bubble.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Inconsolata&amp;family=Roboto+Slab&amp;family=Slabo+27px&amp;family=Sofia&amp;family=Ubuntu+Mono&amp;display=swap">
<link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
<link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-quill-editor.min.css">
<link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
<link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-quill-editor.min.css">
<link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/file-uploaders/dropzone.min.css">
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
                            <h2 class="content-header-title float-start mb-0">Tambah Destinasi</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('destinasi.index')}}">Data Destinasi</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('destinasi.create')}}">Tambah Destinasi</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Wizard -->
            <section class="vertical-wizard">
                <div class="bs-stepper vertical vertical-wizard-example">
                <div class="bs-stepper-header">
                    <div class="step" data-target="#periode-destinasi" role="tab" id="periode-destinasi-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">1</span>
                        <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Informasi Dasar</span>
                        <span class="bs-stepper-subtitle">Tentukan Informasi Destinasi</span>
                        </span>
                    </button>
                    </div>
                    <div class="step" data-target="#deskripsi-destinasi" role="tab" id="deskripsi-destinasi-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">2</span>
                        <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Deskripsi</span>
                        <span class="bs-stepper-subtitle">Masukkan Deskripsi Destinasi</span>
                        </span>
                    </button>
                    </div>
                    <div class="step" data-target="#cover-destinasi" role="tab" id="cover-destinasi-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">3</span>
                        <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Cover</span>
                        <span class="bs-stepper-subtitle">Masukkan Cover Destinasi</span>
                        </span>
                    </button>
                    </div>
                    <div class="step" data-target="#lokasi-destinasi" role="tab" id="lokasi-destinasi-trigger">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-box">4</span>
                            <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Lokasi</span>
                            <span class="bs-stepper-subtitle">Masukkan Lokasi Destinasi</span>
                            </span>
                        </button>
                        </div>
                </div>
                <div class="bs-stepper-content">
                    <form id="destinasi-store" action="{{route('destinasi.update', ['destinasi' => $d->id])}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div
                        id="periode-destinasi"
                        class="content"
                        role="tabpanel"
                        aria-labelledby="periode-destinasi-trigger"
                        >
                        <div class="content-header">
                            <h5 class="mb-0">Informasi Dasar Destinasi</h5>
                            <small class="text-muted">Masukkan Informasi Destinasi.</small>
                        </div>
                        <div class="row">
                            <div class="mb-1">
                                <label class="form-label" for="pilih-nama">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{old('nama') ?? $d->nama}}">
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="pilih-alamat">Alamat</label>
                                <textarea name="alamat" class="form-control" cols="30" rows="6">{{old('alamat') ?? $d->alamat}}</textarea>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="pilih-kategori">Kategori</label>
                                <select class="form-select select2" id="pilih-kategori" name="kategori" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $k)
                                    <option @if ($k->id == (old('kategori') ?? $d->id_kategori)) selected @endif value="{{$k->id}}">{{$k->kategori}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-secondary btn-prev" disabled>
                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Selanjutnya</span>
                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </button>
                        </div>
                        </div>
                        <div id="deskripsi-destinasi" class="content" role="tabpanel" aria-labelledby="deskripsi-destinasi-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Deskripsi Destinasi</h5>
                                <small class="text-muted">Masukkan Deskripsi Destinasi.</small>
                            </div>
                        <div class="row mb-2">
                            <input type="hidden" id="deskripsi-input" name="deskripsi">
                            <div class="col-sm-12 mb-5">
                                <div id="full-wrapper">
                                  <div id="full-container">
                                    <div id="deskripsi-editor" class="editor">
                                        {!! old('deskripsi') ?? $d->content !!}
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Selanjutnya</span>
                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </button>
                        </div>
                        </div>
                        <div id="cover-destinasi" class="content" role="tabpanel" aria-labelledby="cover-destinasi-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Cover Destinasi</h5>
                                <small class="text-muted">Masukkan Cover Destinasi.</small>
                            </div>
                        <div class="row mb-2">
                            <div class="mb-1">
                                <label class="form-label" for="pilih-alamat">Upload Gambar</label>
                                <input type="file" class="form-control" name="cover" id="cover" value="{{old('cover') ?? $d->cover}}">
                            </div>
                            <div class="mb-1">
                                <img id="preview" src="" alt="Image Preview" style="display:none; max-width: 100%; height: auto;">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Selanjutnya</span>
                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </button>
                        </div>
                        </div>
                        <div id="lokasi-destinasi" class="content" role="tabpanel" aria-labelledby="lokasi-destinasi-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Lokasi Destinasi</h5>
                                <small class="text-muted">Masukkan Lokasi Destinasi.</small>
                            </div>
                        <div class="row mb-2">
                            <div class="mb-1">
                                <label class="form-label" for="longlat">Latitude, Longitude</label>
                                <input type="text" class="form-control" name="longlat" id="longlat" placeholder="-5.1676734, 119.4782512" value="{{ old('longlat') ?? $d->latitude . ', ' . $d->longitude }}">
                                <button id="updateMap" class="form-control">Preview</button>
                            </div>
                            <div class="mb-1">
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="820" height="560" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=-5.1676734%2C119.4782512&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                            href="https://www.analarmclock.com"></a><br><a href="https://www.onclock.net"></a><br>
                                        <style>
                                            .mapouter {
                                                position: relative;
                                                text-align: right;
                                                height: 400px;
                                                width: 820px;
                                            }
                                        </style><a href="https://www.ongooglemaps.com">google map for my website</a>
                                        <style>
                                            .gmap_canvas {
                                                overflow: hidden;
                                                background: none !important;
                                                height: 400px;
                                                width: 820px;
                                            }
                                        </style>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById('updateMap').addEventListener('click', function() {
                                        event.preventDefault()
                                        const longlat = document.getElementById('longlat').value;
                                        const iframe = document.getElementById('gmap_canvas');
                                        const src = `https://maps.google.com/maps?q=${encodeURIComponent(longlat)}&t=&z=13&ie=UTF8&iwloc=&output=embed`;
                                        iframe.src = src;
                                    });
                                </script>
                            </div>
                        </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                                </button>
                                <button id="destinasi-create-submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </section>
            <!-- /Vertical Wizard -->


        </div>
    </div>
</div>
@include('layout.footer')
<script src="/app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
<script src="/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="/app-assets/js/scripts/forms/form-wizard.min.js"></script>


<!-- BEGIN: Page Vendor JS-->
<script src="/app-assets/vendors/js/editors/quill/katex.min.js"></script>
<script src="/app-assets/vendors/js/editors/quill/highlight.min.js"></script>
<script src="/app-assets/vendors/js/editors/quill/quill.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
{{-- <script src="/app-assets/js/scripts/forms/form-quill-editor.min.js"></script> --}}
<!-- END: Page JS-->

<script>
    function setEditorContentToHiddenInput(editor, inputId) {
        var editorContent = editor.root.innerHTML;
        $('#' + inputId).val(editorContent);
    }

    $(document).ready(function() {
        var DeskripsiEditor = new Quill('#deskripsi-editor', {
            bounds: "#deskripsi-editor",
            modules: {
                formula: !0,
                syntax: !0,
                toolbar: [
                    [{
                        font: []
                    }, {
                        size: []
                    }],
                    ["bold", "italic", "underline", "strike"],
                    [{
                        color: []
                    }, {
                        background: []
                    }],
                    [{
                        script: "super"
                    }, {
                        script: "sub"
                    }],
                    [{
                        header: "1"
                    }, {
                        header: "2"
                    }, "blockquote", "code-block"],
                    [{
                        list: "ordered"
                    }, {
                        list: "bullet"
                    }, {
                        indent: "-1"
                    }, {
                        indent: "+1"
                    }],
                    ["direction", {
                        align: []
                    }],
                    ["link", "image", "video", "formula"],
                    ["clean"]
                ]
            },
            theme: "snow"
        });

        $('#destinasi-create-submit').on('click', function(event) {
                // event.preventDefault();
                // Memasukkan konten dari masing-masing editor ke dalam input hidden yang sesuai
                setEditorContentToHiddenInput(DeskripsiEditor, 'deskripsi-input');

                // Lanjutkan proses submit form...
                $('destinasi-store').submit();
            });

        $('.btn-next').on('click', function(e) {
            // Prevent the default action of the clicked item. In this case that is submit
            e.preventDefault();

            // Make sure the button is not submitted after all!
            return false;
        });
        $('.btn-prev').on('click', function(e) {
            // Prevent the default action of the clicked item. In this case that is submit
            e.preventDefault();

            // Make sure the button is not submitted after all!
            return false;
        });
    });



</script>
<script src="/app-assets/js/scripts/forms/form-file-uploader.min.js"></script>

<script>
    document.getElementById('cover').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('preview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    });
</script>
