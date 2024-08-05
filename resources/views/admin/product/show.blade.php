<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Mahsulot Tafsilotlari</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Mahsulot Tafsilotlari</li>
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
                        <div class="row mb-4">
                            <div class="col-lg-4 mb-3">
                                <h5 class="fw-bold">Nomi O'zbek tilida:</h5>
                                <p>{{ $product->title_uz }}</p>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <h5 class="fw-bold">Nomi Rus tilida:</h5>
                                <p>{{ $product->title_ru }}</p>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <h5 class="fw-bold">Nomi Ingliz tilida:</h5>
                                <p>{{ $product->title_en }}</p>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold">Mahsulot Haqida Batafsil:</h5>
                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <h6 class="fw-bold">O'zbek tilida:</h6>
                                    <p>{{ $product->description_uz }}</p>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <h6 class="fw-bold">Rus tilida:</h6>
                                    <p>{{ $product->description_ru }}</p>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <h6 class="fw-bold">Ingliz tilida:</h6>
                                    <p>{{ $product->description_en }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold">Kategoriya:</h5>
                            <p>{{ $product->category->name_uz }}</p>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-6 mb-3">
                                <h5 class="fw-bold">Narx (UZS):</h5>
                                <p>{{ number_format($product->sale, 0, ',', ' ') }} UZS</p>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <h5 class="fw-bold">Zaxira:</h5>
                                <p>{{ $product->stock }}</p>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold">Mahsulot Rasmi:</h5>
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" class="img-thumbnail" style="max-width: 200px;" alt="Mahsulot Rasmi">
                            @else
                                <p>Rasm mavjud emas</p>
                            @endif
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">Ortga</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary btn-lg">Tahrirlash</a>
                        </div>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container -->
</x-layouts.admin>
