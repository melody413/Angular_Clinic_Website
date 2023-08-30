@extends('admin.layout')

@section('content')

    {!! Form::open(['route' => 'admin.sub_category.store', 'method' => 'post'], ['enctype' => "multipart/form-data"]) !!}
    <div class="col-sm-12">
        @admin_block
        @slot('desc')

        @endslot
        @slot('content')
            <div class="col-sm-12">
                <div class="form-group">

                    @include('admin.sub_category._form')

                </div>
            </div>
        @endslot
        @endadmin_block
    </div>



    {!! Form::close() !!}
@stop