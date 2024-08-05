<!-- resources/views/contacts/create.blade.php -->

<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Yangi Kontakt Qo'shish</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Kontaktlar</li>
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
                        <h5 class="mb-0" style="color: white !important;">Yangi Kontakt Qo'shish Formasi</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contacts.store') }}" method="post" class="needs-validation" novalidate>
                            @csrf

                            <div class="row mb-4">
                                <div class="col-lg-6 mb-3">
                                    <label for="location" class="form-label fw-bold">Manzil</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Manzil" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="address" class="form-label fw-bold">Manzil Tafsilotlari</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Manzil tafsilotlari" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-6 mb-3">
                                    <label for="phone_number" class="form-label fw-bold">Telefon Raqami</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Telefon raqam" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        Ushbu maydon to'ldirilishi shart.
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-success btn-lg" type="submit">Saqlash</button>
                                <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary btn-lg">Bekor qilish</a>
                            </div>
                        </form>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container -->
</x-layouts.admin>
