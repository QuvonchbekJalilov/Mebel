<!-- resources/views/blogs/show.blade.php -->

<x-layouts.admin>
    <div class="container-fluid">
        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Blog Tafsilotlari</h4>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">
                        <i class="mdi mdi-arrow-left"></i> Ortga
                    </a>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Blog Details -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $blog->title_uz }}</h3>

                        <!-- Image -->
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-fluid mb-4" style="max-height: 300px;">
                        @endif

                        <!-- Descriptions -->
                        <div class="mb-3">
                            <h5>Tavsif O'zbek tilida:</h5>
                            <p>{{ $blog->description_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h5>Tavsif Rus tilida:</h5>
                            <p>{{ $blog->description_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h5>Tavsif Ingliz tilida:</h5>
                            <p>{{ $blog->description_en }}</p>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
</x-layouts.admin>
