@extends('admin.layout.app')

@section('style')
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 style="margin-top: 20px">Contact Form Tables</h1>

            
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            {{-- <h5 class="card-title"> Table</h5> --}}

                            <!-- Default Table -->
                            <div class="table-responsive">
                            <table class="table text-center" >
                                <thead>
                                    <tr>
                                        
                                        <th>Sr.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Message</th>
                                        
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contact as $index => $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->message }}</td>
                                            {{-- <td>
                                                <img src="{{ asset('storage/' . $item->image) }}" alt=""
                                                    class="img-fluid" style="width:500px; height:150px;">
                                            </td> --}}
                                            {{-- <td>
                                                @if ($item->image)
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-fluid" style="width:500px; height:150px;">
                                                @else
                                                    <p>No image available</p> <!-- You can customize this message or leave it empty -->
                                                @endif
                                            </td> --}}
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center">
                                                    <!-- Edit Button -->
                                                    {{-- <a href="{{ route('edit-contact', $item->id) }}"
                                                        class="btn btn-info btn-sm mx-2" title="Edit">
                                                        <i class="fa fa-edit" style="font-size:25px;"></i>
                                                    </a> --}}

                                                    <form method="POST" action="{{ route('destroy-contact', $item->id) }}"
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
