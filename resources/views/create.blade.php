@extends('layout.main')
@push('head')
    <title>Add Todo </title>
@endpush

@section('main_section')
    <div class="container">
        {{-- ------------------------------ --}}
        <div class=" d-flex justify-content-between align-items-center my-5">
            <div class="h2">Add Todo</div>
            <a href="{{ route('todo.home') }}" class="btn btn-primary btn-lg">Back</a>
        </div>
        {{-- ----------------------------- --}}
        {{-- {{ print_r($errors->all()) }} --}}
        <div class="card">
            <div class="card-body">
                <form action="{{ route('todo.store') }}" method="post">
                    @csrf
                    <label for="" class="form-lable mt-4">Name</label>
                    <input type="text" name="name" class="form-control">

                    <div class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>

                    <label for="" class="form-lable  mt-4">Work</label>
                    <input type="text" name="work" class="form-control">

                    <div class="text-danger">
                        @error('work')  {{-- error heandeling --}}
                            {{ $message }}
                        @enderror
                    </div>

                    <label for="" class="form-lable  mt-4">Due Date</label>
                    <input type="date" name="date" class="form-control">

                    <div class="text-danger">
                        @error('date')
                            {{ $message }}
                        @enderror
                    </div>
                    
                    <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
                </form>
            </div>
        </div>
        
    </div>
@endsection