@extends ('backend.layouts.app') 


@section ('title', trans('labels.backend.access.posts.management') . ' | ' . trans('labels.backend.access.posts.edit')) 


@section('page-header')
<h1>
    {{ trans('labels.backend.access.posts.management') }}
    <small>{{ trans('labels.backend.access.posts.edit') }}</small>
</h1> 
@endsection 

@section('content')

{!! Form::model($post, [
            'method' => 'PATCH',
            'url' => ['/admin/access/posts', $post->id],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">{{ trans('labels.backend.access.posts.edit') }} - {{ $post->id }}</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div> <!--box-tools pull-right-->
    </div> <!-- /.box-header -->
    <div class="box-body"> 

        @include ('backend/access.posts.form')
        
    </div> <!-- /.box-body -->
     
    <div class="box-footer">   
        {{ link_to_route('admin.access.posts.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger']) }}
        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary pull-right']) }}                
    </div>   <!-- /.box-footer -->
    
</div> 
{!! Form::close() !!} 

@endsection