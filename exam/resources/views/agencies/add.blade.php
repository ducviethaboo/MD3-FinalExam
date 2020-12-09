<!doctype html>
<html lang="en">
<head>
    <title>Thêm mới</title>
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
    table {
        background-color: white;
    }
</style>
<body>
<form style="margin-top: 50px" action="{{route('add.agency.post')}}" method="post">
    @csrf
    <table align="center" class="table" style="width: 700px; border: 1px solid black; text-align: center">
        <thead class="thead-dark">
        <tr>
            <th style="border-radius: 5px" colspan="2"><h1>Thêm mới đại lý phân phối</h1></th>
        </tr>
        <tr>
            <td rowspan="2">
                <label>Tên đại lý</label><br>
                <input type="text" name="agencyName">
            </td>

        </tr>
        <tr>
            <td >
                <label>Địa chỉ</label><br>
                <input type="text" name="agencyAddress" style="height: 50px">
            </td>
        </tr>
        <tr>
            <td>
                <label>Điện Thoại</label><br>
                <input type="text" name="agencyPhone">
            </td>
            <td>
                <label>Tên người quản lý</label><br>
                <input type="text" name="agencyManager">
            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label><br>
                <input type="text" name="agencyEmail">
            </td>
            <td>
                <label>Trạng thái</label><br>
                <select name="status">
                    <option value="Hoạt động">Hoạt động</option>
                    <option value="Ngừng hoạt động">Ngừng hoạt động</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="text-align: right" colspan="2">
                <div class="error-message">
                    @if ($errors->any())
                        @foreach($errors->all() as $nameError)
                            <p style="color:red">{{ $nameError }}</p>
                        @endforeach
                    @endif
                </div>
                <button type="submit" class="btn btn-success">Thêm</button>
                <a class="btn-danger btn" href="{{route('show')}}">Quay lại</a>
            </td>
        </tr>
        </thead>
    </table>
</form>




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
