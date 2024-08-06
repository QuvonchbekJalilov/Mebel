<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Yangi Blog Qo'shish</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Bloglar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0" style="color: white !important;">Blog Qo'shish Formasi</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf

                            <!-- Uzbek Title -->
                            <div class="row mb-4">
                                <div class="col-lg-4 mb-3">
                                    <label for="title_uz" class="form-label fw-bold">Sarlavha (O'zbek tilida)</label>
                                    <input type="text" class="form-control" id="title_uz" name="title_uz" placeholder="Sarlavha o'zbek tilida" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <!-- Russian Title -->
                                <div class="col-lg-4 mb-3">
                                    <label for="title_ru" class="form-label fw-bold">Sarlavha (Rus tilida)</label>
                                    <input type="text" class="form-control" id="title_ru" name="title_ru" placeholder="Sarlavha rus tilida" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <!-- English Title -->
                                <div class="col-lg-4 mb-3">
                                    <label for="title_en" class="form-label fw-bold">Sarlavha (Ingliz tilida)</label>
                                    <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Sarlavha ingliz tilida" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="mb-4">
                                <h5 class="fw-bold">Blog Haqida Batafsil</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <h4 class="header-title">Description_uz</h4>
                                                <div id="editor_uz" style="height: 300px;"></div>
                                                <input type="hidden" name="description_uz" id="text_uz">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <h4 class="header-title">Description_ru</h4>
                                                <div id="editor_ru" style="height: 300px;"></div>
                                                <input type="hidden" name="description_ru" id="text_ru">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <h4 class="header-title">Description_en</h4>
                                                <div id="editor_en" style="height: 300px;"></div>
                                                <input type="hidden" name="description_en" id="text_en">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-4">
                                <label for="fileInput" class="form-label fw-bold">Blog Rasmni Tanlash</label>
                                <div class="custom-file">
                                    <input id="fileInput" name="image" type="file" class="custom-file-input" onchange="displayFileName()" required>
                                    <label class="custom-file-label" id="photoLabel" for="fileInput">Rasm tanlash</label>
                                    <div class="invalid-feedback">
                                        Rasm tanlash shart.
                                    </div>
                                </div>
                                <div id="imagePreview" class="mt-3"></div>
                            </div>

                            <!-- Submit and Cancel Buttons -->
                            <div class="mt-4">
                                <button class="btn btn-success btn-lg" type="submit">Saqlash</button>
                                <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary btn-lg">Bekor qilish</a>
                            </div>
                        </form>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container -->

    <!-- Quill Editor Scripts -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        var editorUz = new Quill('#editor_uz', { theme: 'snow' });
        var editorRu = new Quill('#editor_ru', { theme: 'snow' });
        var editorEn = new Quill('#editor_en', { theme: 'snow' });

        function updateEditorContent() {
            document.getElementById('text_uz').value = editorUz.root.innerHTML;
            document.getElementById('text_ru').value = editorRu.root
            document.getElementById('text_en').value = editorEn.root.innerHTML;
        }

        document.querySelector('form').addEventListener('submit', function() {
            updateEditorContent();
        });
    </script>
</x-layouts.admin>