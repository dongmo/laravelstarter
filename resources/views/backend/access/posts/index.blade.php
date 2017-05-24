@extends ('backend.layouts.app') 


@section ('title', trans('labels.backend.access.posts.management') . ' | ' . trans('labels.backend.access.posts.edit')) 


@section('page-header')
<h1>
    {{ trans('labels.backend.access.posts.management') }}
    <small>{{ trans('labels.backend.access.posts.edit') }}</small>
</h1> 
@endsection 

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Posts</h3>
        <div class="box-tools pull-right">
        
            <a href="{{ url('/admin/access/posts/create') }}" class="btn btn-primary " title="Add New Post"><span class="glyphicon glyphicon-plus" aria-hidden="true"/>{{trans('buttons.general.crud.add')}}</a>
            
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div> <!--box-tools pull-right-->
    </div> <!-- /.box-header -->
    <div class="box-body"> 

        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>ID</th><th> Title </th><th> Content </th><th> Category </th><th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td><td>{{ $item->content }}</td><td>{{ $item->category }}</td>
                        <td>
                            <a href="{{ url('/admin/access/posts/' . $item->id) }}" class="btn btn-success btn-xs" title="View Post"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                            <a href="{{ url('/admin/access/posts/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                            {!! Form::open([
                                'method'=>'DELETE',
                                'url' => ['/admin/access/posts', $item->id],
                                'style' => 'display:inline'
                            ]) !!}
                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Post" />', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'title' => 'Delete Post',
                                        'onclick'=>'return confirm("Confirm delete?")'
                                )) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $posts->render() !!} </div>
        </div>
        
    </div> <!-- /.box-body -->
     
</div> 

@endsection