@extends ('backend.layouts.app') 


@section ('title', trans('labels.backend.access.posts.management') . ' | ' . trans('labels.backend.access.posts.show')) 


@section('page-header')
<h1>
    {{ trans('labels.backend.access.posts.management') }}
    <small>{{ trans('labels.backend.access.posts.show') }}</small>
</h1> 
@endsection 

@section('content')


<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">{{ trans('labels.backend.access.posts.show') }} - {{ $post->id }}</h3>
        <div class="box-tools pull-right">
        
            <a href="{{ url('admin/access/posts/' . $post->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
            
            {!! Form::open([
                'method'=>'DELETE',
                'url' => ['admin/access/posts', $post->id],
                'style' => 'display:inline'
            ]) !!}
                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'title' => 'Post',
                        'onclick'=>'return confirm("Confirm delete?")'
                ))!!}
            {!! Form::close() !!}
                        
            
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div> <!--box-tools pull-right-->
    </div> <!-- /.box-header -->
    <div class="box-body"> 

        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th>ID</th><td>{{ $post->id }}</td>
                    </tr>
                    <tr><th> Title </th><td> {{ $post->title }} </td></tr><tr><th> Content </th><td> {{ $post->content }} </td></tr><tr><th> Category </th><td> {{ $post->category }} </td></tr>
                </tbody>
            </table>
        </div>)
        
    </div> <!-- /.box-body -->
     
    <div class="box-footer">   
        
        {{ link_to_route('admin.access.posts.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-default pull-right']) }}
        
    </div>   <!-- /.box-footer -->
    
</div> 
{!! Form::close() !!} 

@endsection
