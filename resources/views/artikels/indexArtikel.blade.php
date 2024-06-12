@extends('template.base')

@section('title', 'Article')

@section('content')

<!-- Page Title -->
<div class="pagetitle">
    <h1>Article Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Article</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<!-- Main Content -->
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Article data rows</h5>
                            <a href="{{ route('artikels.create') }}" class="btn btn-outline-primary">Add Article</a>
                        </div>
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <div class="search-bar">
                                <form class="search-form d-flex align-items-center" method="GET" action="{{ route('artikels.search')}}">
                                    <input type="search" name="search" placeholder="Search" title="Enter search keyword">
                                    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>




                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th></th>
                            <th>Title</th>
                            <th>Artikel</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($artikel as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>
                                @if ($row->image != "")
                                <img width="50" src="{{ asset('uploads/artikels/'.$row->image) }}" alt="">
                                @endif
                            </td>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->artikel }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d M, Y') }}</td>
                            <td>
                                <a href="{{ route('artikels.edit',$row->id) }}" class="btn btn-dark">Edit</a>
                                <form action="{{ route('artikels.destroy', $row->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <!-- End Table with hoverable rows -->

                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Main Content -->



@endsection