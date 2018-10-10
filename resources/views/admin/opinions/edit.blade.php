@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit labels</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary fa fa-arrow-left" href="{{ route('labels.index') }}"> Back</a>
            </div>
        </div>
    </div>


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
<form class="form-horizontal" action="{{ route('labels.update',$label->id) }}" method="post"  enctype="multipart/form-data">
       {{csrf_field()}}
       @method('PUT')
       <div class="col-lg-12 col-md-12">

<!-- //`name_en`, `name_ar`, `category_id`, `img`, `order`, `status`, -->
                          <div class="form-group">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name English ') }}</label>

                          <div class="">
                              <input id="name_en " type="text" class="form-control" name="name_en" value="{{$label->name_en}}">
                             
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class=" col-form-label text-md-right">{{ __('Name Arabic') }}</label>

                              <input id="name_ar" type="text" class="form-control" name="name_ar" value="{{$label->name_ar}}" required autofocus>

                          </div>

                          <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right">{{ __('order') }}</label>

                              <input id="order"   min="1" type="text" class="form-control" name="order" value="{{$label->order}}" required autofocus>
                             
                          </div>
                         
                          <div class="row">
                          <div class="form-group col-md-6">
                          <label for="name" class=" col-form-label text-md-right" required>your current category:{{$label->category->name_en}}</label>
                          <select name="category_id" class="form-control">
                              @if ($categories->count())

                              @foreach($categories as $category)
                               <option value="{{ $category->id }}" {{ $category->id ==  $label->category_id ? ' selected="selected"' : '' }} >{{ $category->name_en}}</option>    
                                @endforeach
                               @endif
                              </select>
                         </div>
                         <div class="form-group col-md-6">
                           <label for="status" class=" col-form-label text-md-right">{{ __('status') }}</label>
                           <select name="status" class="form-control">
                           <option value="1" {{ $label->status == 1? ' selected="selected"' : ''}} >Active</option>    
                           <option value="0" {{ $label->status == 0? ' selected="selected"' : ''}}>Inactive</option>   
                             
                           </select>
                         </div>
                         </div>
                        
 </div>
 <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        </div>
</form>
</div>


@endsection