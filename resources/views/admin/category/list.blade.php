@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($caTe as $ct)
                <tr class="odd gradeX" align="center">
                    <td>{{$ct->id}}</td>
                    <td>{{$ct->Ten}}</td>
                    <td>{{$ct->TenKhongDau}}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/category/delete"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.category.edit',['id'=>$ct->id])}}">Edit</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
