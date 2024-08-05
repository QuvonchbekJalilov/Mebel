<x-layouts.admin>
    <div class="container-fluid">
        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Mahsulotlar</h4>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="{{ route('products.create') }}" class="btn btn-primary">
                        <i class="mdi mdi-plus-circle"></i> Yangi Mahsulot
                    </a>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Product List -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kategoriya</th>
                                    <th>Mahsulot Nomi</th>
                                    <th>Rasm</th>
                                    <th>Zaxira</th>
                                    <th>Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->category->name_uz }}</td>
                                        <td>{{ $product->title_uz }}</td>
                                        <td>
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="Rasm" style="height: 90px;">
                                            @else
                                                <span class="text-muted">Rasm yo'q</span>
                                            @endif
                                        </td>
                                        <td>{{ $product->stock }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info me-2">
                                                    <i class="mdi mdi-eye"></i> Ko'rish
                                                </a>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning me-2">
                                                    <i class="mdi mdi-pencil"></i> Tahrirlash
                                                </a>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Haqiqatdan ham o‘chirmoqchimisiz?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="mdi mdi-trash-can"></i> O'chirish
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination Links -->
                        {{ $products->links() }}
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
</x-layouts.admin>
