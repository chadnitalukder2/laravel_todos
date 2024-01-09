@extends('layout.main')
@push('head')
    <title>Update Todo </title>
@endpush

@section('main_section')
    <div class="container">
        {{-- ------------------------------ --}}
        <div class=" d-flex justify-content-between align-items-center my-5">
            <div class="h2">Update Todo</div>
            <a href="" class="btn btn-primary btn-lg">Back</a>
        </div>
        {{-- ----------------------------- --}}
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <label for="" class="form-lable mt-4">Name</label>
                    <input type="text" name="name" class="form-control">

                    <label for="" class="form-lable  mt-4">Work</label>
                    <input type="text" name="work" class="form-control">

                    <label for="" class="form-lable  mt-4">Due Date</label>
                    <input type="date" name="date" class="form-control">
                    
                    <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
                </form>
            </div>
        </div>
        
    </div>
@endsection