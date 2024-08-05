<!-- resources/views/discounts/index.blade.php -->

<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Chegirmalar Ro'yxati</h4>
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

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0"></h4>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="{{ route('discounts.create') }}" class="btn btn-primary">
                        <i class="mdi mdi-plus-circle"></i> Yangi Chegirma Qo'shish
                    </a>
                </div>
            </div>
        </div>

        <!-- start table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Mahsulot</th>
                                    <th>Nomi</th>
                                    <th>Foiz</th>
                                    <th>So'm</th>
                                    <th>Boshlanish</th>
                                    <th>Tugash</th>
                                    <th>Harakatlar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($discounts as $discount)
                                <tr>
                                    <td>{{ $discount->id }}</td>
                                    <td>{{ $discount->product->title_uz }}</td>
                                    <td>{{ $discount->name }}</td>
                                    <td>{{ $discount->percentage }}%</td>
                                    <td>{{ $discount->sum }} so'm</td>
                                    <td>{{ $discount->from }}</td>
                                    <td>{{ $discount->to }}</td>
                                    <td>
                                        <div class="mx-1 d-inline-block">
                                            <a href="{{ route('discounts.show', $discount->id) }}" class="text-info"><i class="mdi mdi-eye fs-3"></i></a>
                                        </div>
                                        <div class="mx-1 d-inline-block">
                                            <a href="{{ route('discounts.edit', $discount->id) }}" class="text-warning"><i class="mdi mdi-book-edit-outline fs-3"></i></a>
                                        </div>
                                        <div class="mx-1 d-inline-block">
                                            <form action="{{ route('discounts.destroy', $discount->id) }}" method="POST" onsubmit="return confirm('O\'chirishga ruxsat berasizmi?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="border: none; background: none; cursor: pointer;"><i class="mdi mdi-trash-can-outline fs-3 text-danger"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $discounts->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- end table -->

    </div> <!-- container -->
</x-layouts.admin>
