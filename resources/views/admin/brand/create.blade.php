<x-layouts.admin>
    <div class="container-fluid">
        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Brand Yaratish</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Brand Yaratish</li>
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
                        <h5 class="mb-0" style="color: white !important;">Brand Yaratish Formasi</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('brands.store') }}" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">Brand Nomi</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Brand nomi" required>
                                <div class="invalid-feedback">
                                    Ushbu maydon to'ldirilishi shart.
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="fileInput" class="form-label fw-bold">Brand Rasmni Tanlash</label>
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

                            <div class="mt-4">
                                <button class="btn btn-success btn-lg" type="submit">Saqlash</button>
                                <a href="{{ route('brands.index') }}" class="btn btn-outline-secondary btn-lg">Bekor qilish</a>
                            </div>
                        </form>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
</x-layouts.admin>
