<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HG Shop</title>
    @include('elements/head')
    <script src="ckeditor/ckeditor.js"></script>

</head>

<body>
    @include('elements/menu')

    <!-- thiet ke giao dien them item-->
    <section>
        <div class="container py-4 mt-5">
            <div class="row">
                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                    <div class="card d-flex justify-content-center p-4 shadow-lg">
                        <div class="text-center">
                            <h3 class="text-gradient text-primary">Thêm Sản Phẩm</h3>
                            <p class="mb-0">
                                Lưu ý: Khi thêm sản phẩm hãy chọn đúng loại sản phẩm.
                            </p>
                            @include('alert')
                        </div>
                        <div class="card card-plain">
                            <form action="./addnewitem" enctype='multipart/form-data' method="post">
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tên Sản Phẩm</label>
                                            <div class="input-group mb-4">
                                                <input name="name" class="form-control" placeholder="Tên sản phẩm"
                                                    aria-label="Tên sản phẩm" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ps-md-2">
                                            <label>Giá Sản Phẩm</label>
                                            <div class="input-group">
                                                <input name="price" class="form-control" placeholder="Giá sản phẩm"
                                                    aria-label="Thông tin khác" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Mô tả chi tiết</label>
                                            <div class="input-group mb-4">
                                                <textarea name="editor2" id="editor2" rows="10" cols="80">

                                            </textarea>
                                                <script>
                                                    // Replace the <textarea id="editor1"> with a CKEditor 4
                                                    // instance, using default configuration.
                                                    CKEDITOR.replace('editor2');
                                                </script>
                                            </div>
                                        </div>
                                        <!-- phan loai san pham -->
                                        <div class="d-flex mb-4">
                                            <strong class="text-dark mr-3">Loại Sản Phẩm</strong>
                                                <form method="POST" acction="{{ route('products.add') }}">                                                
                                                    <select name="class" >
                                                        <option value="sonmoi">Son Môi</option>
                                                        <option value="nuochoa">Nước Hoa</option>
                                                        <option value="kem">Kem</option>                                                   
                                                    </select>
                                                    @csrf
                                                </form>
                                            </div>
                                        <div class="col-md-12">
                                            <label>Hình ảnh</label>
                                            <div class="input-group mb-4">
                                                <input class="form-control" name="file" type="file"
                                                    id="file-input">
                                                <img id="preview-image" src="#" alt="example image" />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Thêm
                                                mới</button>
                                        </div>
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('elements/footer')
    <style>
     
      #preview-image {
        display: none;
      }
    </style>
    <script>
        const fileInput = document.getElementById('file-input');

        const previewImage = document.getElementById('preview-image');

        fileInput.addEventListener('change', event => {
            if (event.target.files.length > 0) {
                previewImage.src = URL.createObjectURL(
                    event.target.files[0],
                );
                previewImage.style.display = 'block';
            }
        });
    </script>
</body>

</html>
