@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert-success alert">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Slug</th>
                    <th class="text-center">Delete</th>
                    <th class="text-center">Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($caTe as $ct)
                <tr class="odd gradeX" align="center">
                    <td>{{$ct->id}}</td>
                    <td>{{$ct->Ten}}</td>
                    <td>{{$ct->TenKhongDau}}</td>
                    <td class="center text-primary"><i class="far fa-edit"></i><a href="{{route('admin.category.delete',['id'=>$ct->id])}}"> Delete</a></td>
                    <td class="center text-danger"><i class="far fa-trash-alt"></i><a style="margin-left: 3px" class="ml-3" href="{{route('admin.category.edit',['id'=>$ct->id])}}">Edit</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <hr>
            <div class="row ml-3 my-3">
                {{ $caTe->links() }}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
