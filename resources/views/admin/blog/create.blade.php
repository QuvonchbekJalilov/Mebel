<!-- resources/views/blogs/create.blade.php -->

<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
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
        <!-- end page title -->

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
                        <form action="{{ route('blogs.store') }}" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
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
                                    <!-- Uzbek Description -->
                                    <div class="col-lg-4 mb-3">
                                        <label for="description_uz" class="form-label">Tavsif (O'zbek tilida)</label>
                                        <textarea name="description_uz" id="description_uz" class="form-control" placeholder="Blog haqida batafsil ma'lumot"></textarea>
                                    </div>
                                    <!-- Russian Description -->
                                    <div class="col-lg-4 mb-3">
                                        <label for="description_ru" class="form-label">Tavsif (Rus tilida)</label>
                                        <textarea name="description_ru" id="description_ru" class="form-control" placeholder="Blog haqida batafsil ma'lumot"></textarea>
                                    </div>
                                    <!-- English Description -->
                                    <div class="col-lg-4 mb-3">
                                        <label for="description_en" class="form-label">Tavsif (Ingliz tilida)</label>
                                        <textarea name="description_en" id="description_en" class="form-control" placeholder="Blog haqida batafsil ma'lumot"></textarea>
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

                            <script>
                                document.getElementById('fileInput').addEventListener('change', function() {
                                    const file = this.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            const preview = document.createElement('img');
                                            preview.classList.add('img-thumbnail', 'preview-image');
                                            preview.src = e.target.result;
                                            document.getElementById('imagePreview').innerHTML = '';
                                            document.getElementById('imagePreview').appendChild(preview);
                                        };
                                        reader.readAsDataURL(file);
                                    } else {
                                        document.getElementById('imagePreview').innerHTML = '';
                                    }
                                });

                                function displayFileName() {
                                    const input = document.getElementById('fileInput');
                                    const label = document.getElementById('photoLabel');
                                    const fileName = input.files[0] ? input.files[0].name : 'Rasm tanlash';
                                    label.textContent = fileName;
                                }
                            </script>

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
</x-layouts.admin>
