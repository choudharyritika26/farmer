@extends('admin.layout.app')

@section('style')
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 style="margin-top: 20px">Single Product Tables</h1>

            <h1 style="margin-top:-30px; margin-left:95%;"><a href="{{ route('add-singleproduct') }}">Add </a></h1>

        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12 w-100">

                    <div class="card">
                        <div class="card-body p-3">
                            {{-- <h5 class="card-title"> Table</h5> --}}

                            <!-- Default Table -->
                            <div class="table-responsive">
                            <table class="table text-center" >
                                <thead>
                                    <tr>
                                        
                                        <th>Sr.No</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
                                        
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($singleproduct as $index => $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->productHeading->heading }}</td>
                                            <td>{{ $item->heading }}</td>
                                            {{-- <td>{{ $item->description }}</td> --}}
                                            <td>
                                                @if (strlen($item->description) > 100)
                                                    <span class="short-description">{{ substr($item->description, 0, 100) }}...</span>
                                                    <span class="full-description" style="display:none;">{{ $item->description }}</span>
                                                    {{-- <button class="btn btn-info btn-sm mx-2" onclick="toggleDescription(this)" style="color:white">Read More</button> --}}
                                                    <a href="{{ route('singleproduct-detail', $item->id) }}" class="btn btn-dark">readd more</a>
                                                @else
                                                    <span>{{ $item->description }}</span>
                                                @endif
                                            </td>
                                            
                                            <td>
                                                <img src="{{ asset('storage/' . $item->image) }}" alt=""
                                                    class="img-fluid" style="width:200px; height:150px;">
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center">
                                                    <!-- Edit Button -->
                                                    <a href="{{ route('edit-singleproduct', $item->id) }}"
                                                        class="btn btn-info btn-sm mx-2" title="Edit">
                                                        <i class="fa fa-edit" style="font-size:25px;"></i>
                                                    </a>

                                                    <form method="POST" action="{{ route('destroy-singleproduct', $item->id) }}"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm showConfirmDelete mx-2"
                                                            data-toggle="tooltip" title="Delete"
                                                            onclick="confirmDelete(event)">
                                                            <i class="fa fa-trash" style="font-size:25px;"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>

                                           
                                           
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                            <!-- End Default Table Example -->
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@section('script')
    <script>
        function confirmDelete(event) {
            event.preventDefault(); // Prevent form submission

            // Show the confirmation dialog
            if (confirm("Are you sure you want to delete this data?")) {
                // If user clicks 'OK', submit the form
                event.target.closest('form').submit();
            }
        }
    </script>
    
@endsection
