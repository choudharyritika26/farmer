@extends('admin.layout.app')

@section('style')
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 style="margin-top: 20px">Edit contactusdetalest</h1>
            {{-- <button class="btn btn-dark" href="{{ route('contactusdetales-index') }}">Submit</button> --}}
            <span>
                <h1 style="margin-top:-30px; margin-left:95%;"><a href="{{ route('contactusdetales-index') }}">Back</a></h1>
            </span>
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
                            <h5 class="card-title">contactusdetales Form</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" action="{{ route('update-contactusdetales',$contactusdetales->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    {{-- <input type="text" class="form-control" name="address"
                                        value="{!! html_entity_decode($contactusdetales->address) !!}"id="address"> --}}
                                    <textarea name="address" id="address" cols="30" rows="10">{!! html_entity_decode($contactusdetales->address) !!}</textarea>
                                    
                                    <script src="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.umd.js"></script>

                                    <script>
                                        const {
                                            ClassicEditor,
                                            Essentials,
                                            Bold,
                                            Italic,
                                            Font,
                                            Paragraph,
                                        } = CKEDITOR;
                            
                                        ClassicEditor
                                            .create( document.querySelector( '#address' ), {
                                                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                                                toolbar: [
                                                    'undo', 'redo', '|', 'bold', 'italic', '|',
                                                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                                                ]
                                            } )
                                            .then( /* ... */ )
                                            .catch( /* ... */ );
                                    </script>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email Idss</label>
                                    <input type="email" class="form-control" name="email_id"
                                        value="{{ $contactusdetales->email_id }}"id="email">
                                </div>

                                
                                <div class="col-12">
                                    <label for="phone" class="form-label">Phone No.</label>
                                    <input type="text" class="form-control" name="phone_no" value="{{ $contactusdetales->phone_no }}"
                                        id="phone">
                                </div>

                                <div class="card-action">
                                    <button class="btn btn-success" href="{{ route('contactusdetales-index') }}">Submit</button>
                                    {{-- <button class="btn btn-danger">Cancel</button> --}}
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
@endsection
