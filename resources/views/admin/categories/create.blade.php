@extends('layouts.master')

@section('content')

    <div class="row" style="padding-bottom: 10px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Features</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('features.index') }}"> Back</a>
            </div>
        </div>
    </div>

<<<<<<< HEAD

=======
>>>>>>> 2e09f68030745fe15265ec8f2ecf6d093f3d7973
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="box box-info" style="padding-top: 10px;">
    <div class="box-header with-border">

     </div>
<<<<<<< HEAD
    <form class="form-horizontal" action="{{route('categories.store')}}" method="post">
=======
<<<<<<< HEAD
    <form class="form-horizontal" action="{{route('features.store')}}" method="post">
=======
    <form class="form-horizontal" action="{{route('categories.store')}}" method="post">
>>>>>>> b5ddf266ccdbba274069c9742e23d724491d88f6
>>>>>>> 2e09f68030745fe15265ec8f2ecf6d093f3d7973
        @csrf

               @include('admin.categories.form')
               <div class="box-footer">
               <button type="submit" class="btn btn-primary">Save</button>
        </div>
           </form>
           </div>
        
@endsection