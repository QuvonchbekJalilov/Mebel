<x-layouts.admin>
    <div class="container-fluid">
        <!-- Start Page Title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Buyurtmalar</h4>
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

        <!-- Orders List -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ism</th>
                                    <th>Familiya</th>
                                    <th>Telefon Raqam</th>
                                    <th>Mahsulotlar</th>
                                    <th>Jami Narx</th>
                                    <th>Yaratilgan Sana</th>
                                    <th>Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->first_name }}</td>
                                    <td>{{ $order->last_name }}</td>
                                    <td>{{ $order->phone_number }}</td>
                                    <td>
                                        @php
                                        // Ensure $order->products is a JSON string before decoding
                                        $products = is_string($order->products) ? json_decode($order->products, true) : $order->products;
                                        @endphp
                                        @if (is_array($products))
                                            @foreach ($products as $product)
                                                @php
                                                    $productDetail = App\Models\Product::find($product['product_id']);
                                                @endphp
                                                <div>
                                                    <strong>Mahsulot:</strong> {{ $productDetail->title_uz ?? 'N/A' }}<br>
                                                    <strong>Soni:</strong> {{ $product['quantity'] }}<br>
                                                    <strong>Jami Narx:</strong> {{ number_format($product['total_price'], 2) }}<br>
                                                </div>
                                                <hr>
                                            @endforeach
                                        @else
                                            <span class="text-muted">Mahsulot ma'lumotlari mavjud emas</span>
                                        @endif
                                    </td>
                                    <td>{{ number_format($order->total_price, 2) }}</td>
                                    <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-info me-2">
                                                <i class="mdi mdi-eye"></i> Ko'rish
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination Links -->
                        {{ $orders->links() }}
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
</x-layouts.admin>
