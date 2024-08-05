<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Mahsulotni Tahrirlash</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Mahsulotni Tahrirlash</li>
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
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="row mb-4">
                                <div class="col-lg-4 mb-3">
                                    <label for="title_uz" class="form-label fw-bold">Nomi O'zbek tilida</label>
                                    <input type="text" class="form-control" id="title_uz" name="title_uz" value="{{ $product->title_uz }}" placeholder="Nomi o'zbek tilida" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label for="title_ru" class="form-label fw-bold">Nomi Rus tilida</label>
                                    <input type="text" class="form-control" id="title_ru" name="title_ru" value="{{ $product->title_ru }}" placeholder="Nomi rus tilida" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label for="title_en" class="form-label fw-bold">Nomi Ingliz tilida</label>
                                    <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $product->title_en }}" placeholder="Nomi ingliz tilida" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5 class="fw-bold">Mahsulot Haqida Batafsil</h5>
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <label for="description_uz" class="form-label">O'zbek tilida</label>
                                        <textarea name="description_uz" id="description_uz" class="form-control" placeholder="Mahsulot haqida batafsil ma'lumot" required>{{ $product->description_uz }}</textarea>
                                        <div class="invalid-feedback">
                                            Ushbu maydon to'ldirilishi shart.
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="description_ru" class="form-label">Rus tilida</label>
                                        <textarea name="description_ru" id="description_ru" class="form-control" placeholder="Mahsulot haqida batafsil ma'lumot" required>{{ $product->description_ru }}</textarea>
                                        <div class="invalid-feedback">
                                            Ushbu maydon to'ldirilishi shart.
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="description_en" class="form-label">Ingliz tilida</label>
                                        <textarea name="description_en" id="description_en" class="form-control" placeholder="Mahsulot haqida batafsil ma'lumot" required>{{ $product->description_en }}</textarea>
                                        <div class="invalid-feedback">
                                            Ushbu maydon to'ldirilishi shart.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="category_id" class="form-label fw-bold">Kategoriya</label>
                                <select name="category_id" id="category_id" class="form-select" required>
                                    <option value="">Kategoriyani tanlang</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name_uz }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Ushbu maydon to'ldirilishi shart.
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-6 mb-3">
                                    <label for="sale" class="form-label fw-bold">Narx (UZS)</label>
                                    <input type="number" class="form-control" id="sale" name="sale" value="{{ $product->sale }}" placeholder="Narx" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="stock" class="form-label fw-bold">Zaxira</label>
                                    <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" placeholder="Zaxira" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="fileInput" class="form-label fw-bold">Mahsulot Rasmi</label>
                                <input id="fileInput" name="image" type="file" class="form-control">
                                <div class="mt-3">
                                    @if ($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" class="img-thumbnail" style="max-width: 200px;" alt="Mahsulot Rasmi">
                                    @endif
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
                                <button class="btn btn-primary btn-lg" type="submit">Yangilash</button>
                                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-lg">Ortga</a>
                            </div>
                        </form>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container -->
</x-layouts.admin>
