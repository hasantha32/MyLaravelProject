{{--@extends('layouts.master')--}}
{{--@section('content')--}}
<div class= "card">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <div class = "card-body">
        <form method="post" action="adding" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>
                <div class="col-md-3">
                    <label for="value">Value</label>
                    <input type="number" name="value" id="value" class="form-control" />
                </div>
                <div class="col-md-3">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" />
                </div>
                <div class="col-md-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" />
                </div>
                <div class="col-md-3">
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" class="form-control" />
                </div>
                <div class="col-md-3">
                    <label for="image">Image</label>
                    <input type="file" accept="image/*" name="image" id="image" />
                </div>
                <div class="col-md-3">
                    <input type="submit" value="Submit" class="btn btn-success" />
                </div>
            </div>
        </form>
    </div>
</div>

{{--@endsection--}}
