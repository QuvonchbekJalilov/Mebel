<x-layouts.admin>
    <div class="container-fluid">
        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Brand Ma'lumotlari</h4>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="{{ route('brands.index') }}" class="btn btn-secondary">Orqaga</a>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0" style="color: white !important;">Brand Ma'lumotlari</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <strong>Brand Nomi:</strong>
                            <p>{{ $brand->name }}</p>
                        </div>

                        <div class="mb-4">
                            <strong>Brand Rasm:</strong>
                            <div>
                                @if ($brand->image)
                                    <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}" class="img-thumbnail" style="width: 300px;">
                                @else
                                    <span class="text-muted">Rasm mavjud emas</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
</x-layouts.admin>
