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
                            <h2 class="content-header-title float-start mb-0">Tambah Berita</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('berita.index')}}">Data Berita</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('berita.create')}}">Tambah Berita</a>
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
                    <div class="step" data-target="#periode-berita" role="tab" id="periode-berita-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">1</span>
                        <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Informasi Dasar</span>
                        <span class="bs-stepper-subtitle">Tentukan Informasi Berita</span>
                        </span>
                    </button>
                    </div>
                    <div class="step" data-target="#konten-berita" role="tab" id="konten-berita-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">2</span>
                        <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Konten</span>
                        <span class="bs-stepper-subtitle">Masukkan Konten Berita</span>
                        </span>
                    </button>
                    </div>
                    <div class="step" data-target="#cover-berita" role="tab" id="cover-berita-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">3</span>
                        <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Cover</span>
                        <span class="bs-stepper-subtitle">Masukkan Cover Berita</span>
                        </span>
                    </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <form id="berita-store" action="{{route('berita.update', ['beritum' => $b->id])}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div
                        id="periode-berita"
                        class="content"
                        role="tabpanel"
                        aria-labelledby="periode-berita-trigger"
                        >
                        <div class="content-header">
                            <h5 class="mb-0">Informasi Dasar Berita</h5>
                            <small class="text-muted">Masukkan Informasi Berita.</small>
                        </div>
                        <div class="row">
                            <div class="mb-1">
                                <label class="form-label" for="pilih-title">Judul</label>
                                <input type="text" class="form-control" name="title" value="{{old('title') ?? $b->title}}">
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
                        <div id="konten-berita" class="content" role="tabpanel" aria-labelledby="konten-berita-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Konten Berita</h5>
                                <small class="text-muted">Masukkan Konten Berita.</small>
                            </div>
                        <div class="row mb-2">
                            <input type="hidden" id="konten-input" name="konten">
                            <div class="col-sm-12 mb-5">
                                <div id="full-wrapper">
                                  <div id="full-container">
                                    <div id="konten-editor" class="editor">
                                        {!! old('konten') ?? $b->content !!}
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
                        <div id="cover-berita" class="content" role="tabpanel" aria-labelledby="cover-berita-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Cover Berita</h5>
                                <small class="text-muted">Masukkan Cover Berita.</small>
                            </div>
                        <div class="row mb-2">
                            <div class="mb-1">
                                <label class="form-label" for="pilih-alamat">Upload Gambar</label>
                                <input type="file" class="form-control" name="cover" id="cover" value="{{old('cover')}}">
                            </div>
                            <div class="mb-1">
                                <img id="preview" src="{{$b->cover_base64}}" alt="Image Preview" style="display:block; max-width: 100%; height: auto;">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                            </button>
                            <button id="berita-create-submit" class="btn btn-success">Submit</button>
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
        var KontenEditor = new Quill('#konten-editor', {
            bounds: "#konten-editor",
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

        $('#berita-create-submit').on('click', function(event) {
                // event.preventDefault();
                // Memasukkan konten dari masing-masing editor ke dalam input hidden yang sesuai
                setEditorContentToHiddenInput(KontenEditor, 'konten-input');

                // Lanjutkan proses submit form...
                $('berita-store').submit();
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
