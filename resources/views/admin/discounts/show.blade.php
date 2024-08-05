<!-- resources/views/discounts/show.blade.php -->

<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Chegirma Tafsilotlari</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('discounts.index') }}">Chegirmalar</a></li>
                            <li class="breadcrumb-item active">Chegirma Tafsilotlari</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chegirma Tafsilotlari</h5>
                        <div class="mb-3">
                            <strong>Mahsulot:</strong>
                            <p>{{ $discount->product->title_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Nomi:</strong>
                            <p>{{ $discount->name }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Foiz:</strong>
                            <p>{{ $discount->percentage }} %</p>
                        </div>
                        <div class="mb-3">
                            <strong>So'm:</strong>
                            <p>{{ $discount->sum }} so'm</p>
                        </div>
                        <div class="mb-3">
                            <strong>Boshlanish:</strong>
                            <p>{{ $discount->from }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Tugash:</strong>
                            <p>{{ $discount->to }}</p>
                        </div>

                        <a href="{{ route('discounts.edit', $discount->id) }}" class="btn btn-warning">Tahrirlash</a>
                        <a href="{{ route('discounts.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container -->
</x-layouts.admin>
