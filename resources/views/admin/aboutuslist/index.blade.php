@extends('admin.layout.app')

@section('style')
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 style="margin-top: 20px">About Us List Tables</h1>

            <h1 style="margin-top:-30px; margin-left:95%;"><a href="{{ route('add-aboutuslist') }}">Add </a></h1>

        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body p-3">
                            {{-- <h5 class="card-title"> Table</h5> --}}

                            <!-- Default Table -->
                            <div class="table-responsive">
                            <table class="table text-center" >
                                <thead>
                                    <tr>
                                        
                                        <th>Sr.No</th>
                                        <th scope="col">Heading</th>
                                        {{-- <th scope="col">Description</th>
                                        <th scope="col">Image</th> --}}
                                        
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aboutuslist as $index => $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->heading }}</td>
                                            {{-- <td>{{ $item->description }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $item->image) }}" alt=""
                                                    class="img-fluid" style="width:500px; height:150px;">
                                            </td> --}}
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center">
                                                    <!-- Edit Button -->
                                                    <a href="{{ route('edit-aboutuslist', $item->id) }}"
                                                        class="btn btn-info btn-sm mx-2" title="Edit">
                                                        <i class="fa fa-edit" style="font-size:25px;"></i>
                                                    </a>

                                                    <form method="POST" action="{{ route('destroy-aboutuslist', $item->id) }}"
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
