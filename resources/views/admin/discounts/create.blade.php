<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Yangi Chegirma Qo'shish</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Chegirmalar</li>
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
                        <h5 class="mb-0" style="color: white !important;">Yangi Chegirma Qo'shish Formasi</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('discounts.store') }}" method="post" class="needs-validation" novalidate>
                            @csrf

                            <div class="row mb-4">
                                <div class="col-lg-6 mb-3">
                                    <label for="product_id" class="form-label fw-bold">Mahsulot</label>
                                    <select id="product_id" name="product_id" class="form-select" required>
                                        <option value="" selected disabled>Mahsulot tanlang</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->title_uz }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="name" class="form-label fw-bold">Chegirma Nomi</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Chegirma nomi" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-6 mb-3">
                                    <label for="percentage" class="form-label fw-bold">Foiz</label>
                                    <input type="number" step="0.01" class="form-control" id="percentage" name="percentage" placeholder="Foiz">
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="sum" class="form-label fw-bold">So'm</label>
                                    <input type="number" class="form-control" id="sum" name="sum" placeholder="So'm">
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-6 mb-3">
                                    <label for="from" class="form-label fw-bold">Boshlanish Sana</label>
                                    <input type="date" class="form-control" id="from" name="from" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="to" class="form-label fw-bold">Tugash Sana</label>
                                    <input type="date" class="form-control" id="to" name="to" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-success btn-lg" type="submit">Saqlash</button>
                                <a href="{{ route('discounts.index') }}" class="btn btn-outline-secondary btn-lg">Bekor qilish</a>
                            </div>
                        </form>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const percentageInput = document.getElementById('percentage');
            const sumInput = document.getElementById('sum');

            percentageInput.addEventListener('input', function() {
                if (this.value) {
                    sumInput.disabled = true;
                } else {
                    sumInput.disabled = false;
                }
            });

            sumInput.addEventListener('input', function() {
                if (this.value) {
                    percentageInput.disabled = true;
                } else {
                    percentageInput.disabled = false;
                }
            });
        });
    </script>
</x-layouts.admin>
