<!doctype html>
<html lang="en">
<head>
    <title>Danh sách đại lý</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: white;
    }
    .table {
        background-color: white;
        border-radius: 5px;
    }
</style>
<body>
<table align="center" class="table" style="width: 1000px">
    <tr>
        <td><a href="{{route('add.agency')}}" class="btn btn-success">+ Thêm mới</a></td>
        <td style="text-align: right">
            <form action="{{route('search.agency.post')}}" method="post">
                @csrf
                <input id="search" name="search" type="text" placeholder="Nhập nội dung tìm kiếm">
                <button type="submit" class="btn btn-info">Tìm kiếm</button>
            </form>
        </td>
    </tr>
</table>
<h1 align="center">Danh sách đại lý phân phối</h1>
<hr>
<table id="td" align="center" class="table" style="width: 1400px">
    <thead class="thead-dark">
    <tr style="text-align: center">
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Mã số đại lý</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Tên đại lý</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Điện thoại</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Email</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Địa chỉ</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Tên người quản lý</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Trạng thái</th>
        <th style="background-color: lightskyblue; color: black;border: 1px solid black" scope="col">Chức năng</th>
    </tr>
    </thead>
    <tbody>
    @forelse($agencies as $key => $agency)
        <tr>
            <td style="text-align: center; border: 1px solid black;">AC - {{$agency->id}}</td>
            <td style="border: 1px solid black">{{$agency->agencyName}}</td>
            <td style="border: 1px solid black">0{{$agency->agencyPhone}}</td>
            <td style="border: 1px solid black">{{$agency->agencyEmail}}</td>
            <td style="border: 1px solid black">{{$agency->agencyAddress}}</td>
            <td style="border: 1px solid black">{{$agency->agencyManager}}</td>
            <td style="border: 1px solid black">{{$agency->status}}</td>
            <td style="text-align: center;border: 1px solid black">
                <a class="btn btn-warning" href="{{route('edit.agency', $agency->id)}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg></a>
                <a class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá không?')"
                   href="{{route('delete.agency.post', $agency->id)}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg></a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="7">Không có đại lý nào</td>
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
