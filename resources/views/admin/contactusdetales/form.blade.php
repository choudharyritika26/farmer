
@extends('admin.layout.app')

@section('style')
@endsection

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1 style="margin-top: 20px">Add Contact Us Detales</h1>
      <span><h1 style="margin-top:-30px; margin-left:95%;"><a href="{{route('contactusdetales-index')}}">Back</a></h1></span>
      {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav> --}}
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          @if ($message = Session::get('Success'))
          <div class="alert alert-success alert-block">
              <strong>{{ $message }}</strong>
      @endif
          <div class="card">
            <div class="card-body">
              {{-- <h5 class="card-title">Form</h5> --}}
              <div class="errorlist">
                <div id="errorMessages" class="alert alert-danger" style="display: none;">
                    <ul></ul>
                </div>
            </div>

              <!-- Vertical Form -->
              <form class="row g-3" action="{{route('store-contactusdetales')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" name="address" id="address">
                  @if ($errors->has('address'))
                      <span class="text-danger">{{ $errors->first('address') }}</span>
                  @endif
              </div>

              <div class="form-group">
                  <label for="comment">Email Id</label>
                  <input type="email" class="form-control" name="email_id" id="email">
                  @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif

              </div>
              <div class="col-12">
                  <label for="phone" class="form-label">Phone No.</label>
                  <input type="text" class="form-control" name="phone_no" id="phone">
                  @if ($errors->has('phone'))
                      <span class="text-danger">{{ $errors->first('phone') }}</span>
                  @endif
              </div>

                <div class="card-action">
                  <button class="btn btn-success submitEditContactusdetalesBtn"
                      href="{{route('contactusdetales-index')}}">Submit</button>
                  {{-- <button class="btn btn-danger"  href="{{route('contactusdetales-index')}}">Cancel</button> --}}
              </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection

  @section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Handle the form submission for the contactusdetales
            $('.submitEditContactusdetalesBtn').click(function(e) {
                //alert('jijed');
                e.preventDefault();

                // Create a new FormData instance
                var formData = new FormData($(this).closest('form')[0]);

                // Send the AJAX request with the CSRF token
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    // Adjust the route for the contactusdetales form submission
                    url: '{{ route('store-contactusdetales', isset($contactusdetales) ? $contactusdetales->id : null) }}',
                    data: formData,
                    contentType: false, // Important: Set this to false to send the file
                    processData: false, // Important: Set this to false to send the file
                    dataType: 'json',
                    success: function(response) {
                        if (response.message) {
                            // Display the SweetAlert with a confirmation button
                            Swal.fire({
                                title: response.message,
                                icon: 'success', // Optional: set the icon type
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Redirect to the specified URL
                                    if (response.redirect_url) {
                                        window.location.href = response.redirect_url;
                                    }
                                }
                            });
                        }
                    },
                    error: function(xhr) {
                        // Clear previous error messages
                        $('#errorMessages ul').empty();

                        // Handle the error response
                        if (xhr.responseJSON.errors) {
                            // Show the alert
                            $('#errorMessages').show();

                            // Loop through the errors and append to the error list
                            $.each(xhr.responseJSON.errors, function(key, messages) {
                                messages.forEach(function(message) {
                                    $('#errorMessages ul').append('<li>' +
                                        message + '</li>');
                                });
                            });
                        } else {
                            // If there are no specific validation errors, you can show a general error message
                            $('#errorMessages').show();
                            $('#errorMessages ul').append(
                                '<li>There was an error processing your request.</li>');
                        }
                    }
                });
            });
        });
    </script>
@endsection
