@extends('layouts.app')

@section('title', '| All Categoryies')

@section('content')
    <div class="container">
        <button><a herf="{{ '/create'}}">Add CAtegory</a></button>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Category List</div>

                @foreach($categories as$cat)
                    <table>
                        <div class="row col-lg-12">
                            <thead>
                                <tr>Name</tr>
                                <tr>Created</tr>
                            </thead>
                        </div>
                    </table>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

