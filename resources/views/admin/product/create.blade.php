<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Yangi Mahsulot Qo'shish</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Yangi Mahsulot</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0" style="color: white !important;">Mahsulot Tafsilotlari</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate onchange="updateEditorContent()">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-lg-4 mb-3">
                                    <label for="title_uz" class="form-label fw-bold">Nomi O'zbek tilida</label>
                                    <input type="text" class="form-control" id="title_uz" name="title_uz" placeholder="Nomi o'zbek tilida" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label for="title_ru" class="form-label fw-bold">Nomi Rus tilida</label>
                                    <input type="text" class="form-control" id="title_ru" name="title_ru" placeholder="Nomi rus tilida" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label for="title_en" class="form-label fw-bold">Nomi Ingliz tilida</label>
                                    <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Nomi ingliz tilida" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5 class="fw-bold">Mahsulot Haqida Batafsil</h5>
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <label for="editor_uz" class="form-label">O'zbek tilida</label>
                                        <div id="editor_uz" style="height: 200px;"></div>
                                        <input type="hidden" name="description_uz" id="text_uz">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="editor_ru" class="form-label">Rus tilida</label>
                                        <div id="editor_ru" style="height: 200px;"></div>
                                        <input type="hidden" name="description_ru" id="text_ru">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="editor_en" class="form-label">Ingliz tilida</label>
                                        <div id="editor_en" style="height: 200px;"></div>
                                        <input type="hidden" name="description_en" id="text_en">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="category_id" class="form-label fw-bold">Kategoriya</label>
                                <select name="category_id" id="category_id" class="form-select" required>
                                    <option value="">Kategoriyani tanlang</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Ushbu maydon to'ldirilishi shart.
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-6 mb-3">
                                    <label for="price" class="form-label fw-bold">Narx (UZS)</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Narx" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="stock" class="form-label fw-bold">Zaxira</label>
                                    <input type="text" class="form-control" id="stock" name="stock" placeholder="Zaxira" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="best_seller" class="form-label fw-bold">Eng Ko'p Sotilgan</label>
                                <input type="checkbox" class="form-check-input" id="best_seller" name="best_seller">
                                <label class="form-check-label" for="best_seller">Eng ko'p sotilgan mahsulot</label>
                            </div>

                            <div class="mb-4">
                                <label for="fileInput" class="form-label fw-bold">Mahsulot Rasmi</label>
                                <input id="fileInput" name="image" type="file" class="form-control" required>
                                <div class="invalid-feedback">
                                    Mahsulot rasmini tanlash shart.
                                </div>
                                <div id="imagePreview" class="mt-3"></div>
                            </div>

                            <script>
                                document.getElementById('fileInput').addEventListener('change', function() {
                                    const file = this.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            const preview = document.createElement('img');
                                            preview.classList.add('img-thumbnail', 'preview-image');
                                            preview.style.maxWidth = '200px';
                                            preview.src = e.target.result;
                                            document.getElementById('imagePreview').innerHTML = '';
                                            document.getElementById('imagePreview').appendChild(preview);
                                        };
                                        reader.readAsDataURL(file);
                                    } else {
                                        document.getElementById('imagePreview').innerHTML = '';
                                    }
                                });
                            </script>

                            <div class="mt-4">
                                <button class="btn btn-primary btn-lg" type="submit">Saqlash</button>
                                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-lg">Bekor qilish</a>
                            </div>
                        </form>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container -->
</x-layouts.admin>

<!-- Quill Editor Scripts -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<script>
    var editorUz = new Quill('#editor_uz', { theme: 'snow' });
    var editorRu = new Quill('#editor_ru', { theme: 'snow' });
    var editorEn = new Quill('#editor_en', { theme: 'snow' });

    function updateEditorContent() {
        document.getElementById('text_uz').value = editorUz.root.innerHTML;
        document.getElementById('text_ru').value = editorRu.root.innerHTML;
        document.getElementById('text_en').value = editorEn.root.innerHTML;
    }

    document.querySelector('form').addEventListener('submit', function() {
        updateEditorContent();
    });
</script>
