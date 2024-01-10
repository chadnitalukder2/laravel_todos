@extends('layout.main')
@push('head')
    <title>Todo List App</title>
@endpush

@section('main_section')
    <div class="container">
        {{-- ------------------------------ --}}
        <div class=" d-flex justify-content-between align-items-center my-5">
            <div class="h2">All Todos</div>
            <a href="{{ route('todo.create') }}" class="btn btn-primary btn-lg">Add Todo</a>
        </div>
        {{-- ----------------------------- --}}
        <table class="table table-striped table-dark">
            <tr>
                <th>Name</th>
                <th>Work</th>
                <th>Due Date</th>
                <th>Action</th>
            </tr>
            @foreach ($todosData as $todo) {{-- compact kora data variable--}}
                <tr valign="middle" >
                    <td>{{ $todo->name }}</td>
                    <td>{{ $todo->work }}</td>
                    <td>{{ $todo->date }}</td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <a href="{{ route('todo.delete', $todo->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-success btn-sm">Upadate</a>
                    </td>
                </tr>
            @endforeach
           
        </table>
    </div>
@endsection