@extends('layouts.admin')
@section('content')
<h3>Đơn hàng</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">ID_HD</th>
            <th scope="col">Tên</th>
            <th scope="col">Màu sắc</th>
            <th scope="col">Dung lượng</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá bán</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($cthd as $key => $value) {
        ?>
            <tr>
                <th><?= $key + 1 ?></th>
                <th><?= $value['id_hd'] ?></th>
                <th><?= $value['ten_sp'] ?></th>
                <th><?= $value['mau_sac'] ?></th>
                <th><?= $value['dung_luong'] ?></th>
                <th><?= $value['so_luong'] ?></th>
                <th><?= $value['gia_ban'] ?></th>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
@endsection