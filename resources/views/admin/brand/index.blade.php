<x-layouts.admin>
    <div class="container-fluid">
        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Brands</h4>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="{{ route('brands.create') }}" class="btn btn-success">Yangi Brand Qo'shish</a>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0" style="color: white !important;">Brandlar Ro'yxati</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Rasm</th>
                                    <th>Nomi</th>
                                    <th>Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($brand->image)
                                            <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}" class="img-thumbnail" style="width: 100px;">
                                        @else
                                            <span class="text-muted">Rasm mavjud emas</span>
                                        @endif
                                    </td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-warning btn-sm">Tahrirlash</a>
                                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Rostdan ham o\'chirmoqchimisiz?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">O'chirish</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
</x-layouts.admin>
