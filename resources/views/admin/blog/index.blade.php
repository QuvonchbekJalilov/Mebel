<!-- resources/views/blogs/index.blade.php -->

<x-layouts.admin>
    <div class="container-fluid">
        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Bloglar</h4>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="{{ route('blogs.create') }}" class="btn btn-primary">
                        <i class="mdi mdi-plus-circle"></i> Yangi Blog
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

        <!-- Blog List -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sarlavha (O'zbek)</th>
                                    <th>Rasm</th>
                                    <th>Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title_uz }}</td>
                                        <td>
                                            @if ($blog->image)
                                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Rasm" style="height: 90px;">
                                            @else
                                                <span class="text-muted">Rasm yo'q</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-sm btn-info me-2">
                                                    <i class="mdi mdi-eye"></i> Ko'rish
                                                </a>
                                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning me-2">
                                                    <i class="mdi mdi-pencil"></i> Tahrirlash
                                                </a>
                                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Haqiqatdan ham o‘chirmoqchimisiz?')">
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
                        {{ $blogs->links() }}
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
</x-layouts.admin>
