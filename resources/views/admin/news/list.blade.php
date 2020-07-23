@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">News
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
                <tr align="center">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Viewers</th>
                    <th>Highlights</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($new as $ns)
                <tr class="odd gradeX" align="center">
                    <td>{{$ns->id}}</td>
                    <td>
                        <p>{{$ns->TieuDe}}</p>
                        <img width="100px" src="{{asset("upload/tintuc/$ns->Hinh")}}" alt="">
                    </td>
                    <td>{{$ns->TomTat}}</td>
                    {{--tro theo ten ham trong model lien ket--}}
                    <td>{{$ns->typeNews->categories->Ten}}</td>
                    <td>{{$ns->typeNews->Ten}}</td>
                    <td>{{$ns->SoLuotXem}}</td>
                    <td>
                        @if($ns->NoiBat == 0)
                            <i class="text-danger far fa-times-circle"></i>
                        @endif
                        @if($ns->NoiBat == 1)
                            <i class="text-success far fa-check-circle"></i>
                        @endif
                    </td>
                    <td class="center text-danger"><i class="far fa-trash-alt"></i><a style="margin-left: 3px" href="{{route('admin.news.delete',['id'=>$ns->id])}}">Delete</a></td>
                    <td class="center text-info"><i class="far fa-edit"></i><a style="margin-left: 3px" class="ml-3" href="{{route('admin.news.edit',['id'=>$ns->id])}}">Edit</a></td>
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
