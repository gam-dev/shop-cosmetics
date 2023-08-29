<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HG Shop</title>
    @include('elements/head')

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    @include('elements/menu')   
    <section class="pt-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="text-gradient text-primary text-center">Danh sách sản phẩm</h2>
                    <p class="lead mb-5">Son, nước hoa, kem dưỡng</p>
                </div>
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-pricing hover" id="example">
                            <thead class="text-light">
                                <tr>
                                    <th class="ps-2">
                                        <h6 class="mb-0">#</h6>
                                    </th>
                                    <th class="text-center">
                                        <h6 class="mb-0">Name</h6>
                                    </th>
                                    <th class="text-center">
                                        <h6 class="mb-0">Giá</h6>
                                    </th>
                                    <th class="text-center">
                                        <h6 class="mb-0">Phân loại</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $item)                           
                                <tr>
                                        <td class="py-3">
                                            <span class="text-xs">{{ $item->id }}</span>
                                        </td>
                                        <td class="text-center py-3">
                                            <span class="text-xs">
                                                {{ $item->namePro }}
                                            </span>
                                        </td>
                                        <td class="text-center py-3">
                                            <span class="text-xs">
                                                {{ $item->pricePro }}
                                            </span>
                                        </td>
                                        <td class="text-center py-3">
                                            <span class="text-xs">
                                                {{ $item->class }}
                                            </span>
                                        </td>
                                        <td >
                                            <form id="f1" action="{{ route('products.destroy', $item->id)}}" method="POST" onsubmit="return ConfirmDelete( this )">
                                            @method('DELETE')
                                            @csrf
                                                <button class="btn btn-primary px-3"  type="submit">Xóa</button>
                                            </form>
                                        </td>
                                        <td >
                                            <form id="f2" action="{{ route('addsta',$item->id)}}" method="POST">
                                            @csrf
                                                <input type="hidden" id=" id" name="add" value="Bán chạy">
                                               <button class="btn btn-primary px-3"  type="submit">Thêm Bán Chạy</button>
                                            </form>
                                        </td>
                                </tr>                           
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('elements/footer')
    <script>
    $(document).ready(function () { // js dùng để thông báo của form
        $("#f1").submit(function (event) {
            event.preventDefault();
            toastr.success('Đã xóa sản phẩm', 'Thành công');
        });
        $("#f2").submit(function (event) {
            event.preventDefault();
            toastr.success('Đã thêm vào mục bán chạy', 'Thành công');
        });
    });
</script>
</body>

</html>
