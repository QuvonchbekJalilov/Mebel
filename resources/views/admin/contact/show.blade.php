<!-- resources/views/contacts/show.blade.php -->

<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Kontakt Tafsilotlari</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">Kontaktlar</a></li>
                            <li class="breadcrumb-item active">Kontakt Tafsilotlari</li>
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
                        <h5 class="card-title">Kontakt Tafsilotlari</h5>
                        <div class="mb-3">
                            <strong>Manzil:</strong>
                            <p>{{ $contact->address }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Telefon:</strong>
                            <p>{{ $contact->phone_number }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Email:</strong>
                            <p>{{ $contact->email }}</p>
                        </div>

                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Tahrirlash</a>
                        <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container -->
</x-layouts.admin>
