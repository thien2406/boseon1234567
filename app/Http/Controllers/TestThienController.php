<?php

namespace App\Http\Controllers;

use App\Models\test_thien;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class TestThienController extends Controller
{
    public function getData(){
       $data=test_thien::get();
       return response()->json($data); 
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        test_thien::create([
            'ho_ten'    => $request->ho_ten,
            'email'     => $request->email,
            'sdt'       => $request->sdt,
            'diachi'    => $request->diachi,
            'code'      => $request->code,
        ]);
        return response()->json([
                "status"     => true,
                "message"    => 'thêm thành công'
        ]);
    }

    public function show(test_thien $test_thien)
    {
        //
    }

    public function edit(Request $request)
    {
        test_thien::where('id',$request->id)->update([
            'ho_ten'    => $request->ho_ten,
            'email'     => $request->email,
            'sdt'       => $request->sdt,
            'diachi'    => $request->diachi,
            'code'      => $request->code,
        ]);
        return response()->json([
                "status"     => true,
                "message"    => 'cập nhật thành công'
        ]);
    }

    public function update(Request $request, test_thien $test_thien)
    {
 
    }

    public function destroy(test_thien $test_thien, Request $request , $id)
    {
        $check_delete=test_thien::find('id',$id);
        if($check_delete){
            $check_delete->delete();
            return response()->json([
                "status"     => true,
                "message"    => 'xóa thành công'
        ]);
        }
        else{
            return response()->json([
                "status"     => false,
                "message"    => 'không có thì xóa làm lòn à'
        ]);
        }
        
    }
}
