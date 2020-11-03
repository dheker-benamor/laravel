@extends('home')

@section('contenu')
<div class="card">
    <div class="card-text alert-success ">
        <h4> List category </h4>
        <div>
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">created at</th>
                    <th scope="col">update at </th>
                </tr>
                </thead>
                <tbody>

                @foreach($all as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $all->links('pagination::bootstrap-4') }}
        </div>
    </div>

</div>


@endsection
