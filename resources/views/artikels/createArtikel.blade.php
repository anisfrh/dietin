@extends('template.base')

@section('title', 'Form Input Article')

@section('content')

<!-- Page Title -->
<div class="pagetitle">
    <h1>Form Input Article</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('artikels.index') }}">Home</a></li>
            <li class="breadcrumb-item"> Tables</li>
            <li class="breadcrumb-item active">Input</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<!-- Main Content -->

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('artikels.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h5">Title</label>
                                <input value="{{ old('title') }}" type="text" class="@error('title') is-invalid @enderror form-control-lg form-control" placeholder="Title" name="title">
                                @error('title')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Artikel</label>
                                <input value="{{ old('artikel') }}" type="text" class="@error('artikel') is-invalid @enderror form-control form-control-lg" placeholder="Artikel" name="artikel">
                                @error('artikel')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Image</label>
                                <input type="file" class="form-control form-control-lg" placeholder="Price" name="image">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- End Main Content -->


@endsection

<!-- @section('ckEditor')
<script>
    ClassicEditor
        .create(document.querySelector('#artikel'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection -->