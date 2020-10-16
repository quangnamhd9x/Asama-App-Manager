<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: aliceblue;
    }
    .table {
        background-color: white;
        border-radius: 5px;
    }
</style>
<body>
<table align="center" class="table" style="width: 1000px">
    <tr>
        <td><a href="{{route('agency.create')}}" class="btn btn-success">+ Thêm mới</a></td>
        <td style="text-align: right">
            <form action="{{route('agency.resultSearch')}}" method="post">
                @csrf
                <input id="search" name="search" type="text" placeholder="Nhập nội dung tìm kiếm">
                <button type="submit" class="btn btn-info">Tìm kiếm</button>
            </form>
        </td>
    </tr>
</table>
<h1 align="center">Danh sách đại lý phân phối</h1>
<hr>
<table align="center" class="table" style="width: 1200px">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Mã số đại lý</th>
        <th scope="col">Tên đại lý</th>
        <th scope="col">Điện thoại</th>
        <th scope="col">Email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Tên người quản lý</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Chức năng</th>
    </tr>
    </thead>
    <tbody>
    @forelse($agencys as $key => $agency)
        <tr>
            <td>{{$agency->id}}</td>
            <td>{{$agency->name_agency}}</td>
            <td>{{$agency->phone}}</td>
            <td>{{$agency->email}}</td>
            <td>{{$agency->address}}</td>
            <td>{{$agency->name_manager}}</td>
            <td>{{$agency->status}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('agency.edit', $agency->id)}}">Edit</a>
                <a class="btn btn-danger" onclick="return confirm('Are your sure?')"
                   href="{{route('agency.destroy', $agency->id)}}">Delete</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="7">No Data</td>
        </tr>
    @endforelse
    </tbody>
</table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
