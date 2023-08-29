<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    //
    public function index(){
        return view('addnewitem');
    }
    public function addnew(Request $request){
        $request->validate([
            'name'=> 'required',
            'price'=> 'required',//|numeric= giá trị bắt buộc là số
            'editor2'=> 'required',
            'class' => 'required',//dùng để phân loại 
            'file'=> 'required|mimes:png,jpg,jpeg,mp3,pdf,txt,csv|max:2048'

        ]);
        // upload file
        $file = $request->file('file');
        $location = 'upload_files'; // thư mục sẽ lưu file
        $filename = $file->getClientOriginalName(); // lấy tên file
        $file->move($location, $filename);

        // thêm mới       
        Product::create([
                "namePro"=> $request->name,
                "pricePro" => $request->price,
                "aboutPro" => $request->editor2,
                "class"=> $request->class,
                "file" => 'upload_files/'.$filename    
            ]);
    }
    public function getforkem(){
        $item = Product::where('class', 'kem')->get();// chọn giá trị kem trong cột class
        return view('kem',["a" => $item]);
    }
    public function getfornuochoa(){
        $item = Product::where('class', 'nuochoa')->get();// chọn giá trị nuochoa trong cột class
        return view('nuochoa',["a" => $item]);
    }
    public function getforsonmoi(){
        $item = Product::where('class', 'sonmoi')->get(); // chọn giá trị sonmoi trong cột class      
        return view('sonmoi',["a" => $item]);
    }
    public function show($id)// lấy giá trị id truyền vào
    {      
       $item = Product::where('id','=',$id)->first();//đặt cột id bằng với biến id
       return view('sanpham', compact('item'));// truyền dữ liệu(item) vào trang 'sanpham'
    }
    public function addsta(Request $request, $id){//sử dụng request cùng với giá trị id
        $content = $request->input('add');// gán giá trị trong value của input có name='add' vào trong biến content              
        $item = Product::find($id);// tìm id 
        if ($item) { // kiểm tra xem bản ghi có tồn tại không
            $item->update([ // update dữ liệu
                'status' => $content, // truyền dữ liệu vừa được gán vào trong cột status
            ]);   
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
    public function edit(){ // hàm lấy sản phẩm trong bảng Product
        $item = Product::orderBy('id','asc')->get();
        return view('editproduct',[
            "products" => $item
        ]);
    }

    public function destroy($id)// hàm xóa theo id
    {        
        $item = Product::where('id',$id); // chọn(truyền) id đó
        $item->delete($id); // xóa id vừa được chọn
        return redirect()->to("./editproduct")->with(['message'=> 'Successfully deleted!!']);
    }
    public function all(){
        $item = Product::orderBy('id','asc')->get();
        return view('allpro',[
            "a" => $item
        ]);
    }
    public function search(Request $request)// hàm tìm kiếm dữ liệu
    {
        $query = $request->input('query'); //gán trị trong thẻ input vào biến $query    
        $item = Product::where('namePro', 'LIKE', '%' . $query . '%')->get(); // tìm các từ vừa nhập trong cột namePro( do kiểu dữ liệu nên cần phải có 2 dấu % %)
        return view('found', ['a' => $item]);
    }
    public function getsta(){
        $item = Product::where('status', 'Bán chạy')->get();// cái này dư, sắp dùng thôi       
        return view('banchay',["a" => $item]);
    }
}

