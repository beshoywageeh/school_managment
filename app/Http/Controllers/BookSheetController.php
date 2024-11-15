<?php

namespace App\Http\Controllers;

use App\Models\book_sheet;
use Illuminate\Http\Request;
use App\Http\Traits\LogsActivity;
use App\Models\Grade;
class BookSheetController extends Controller
{
    use LogsActivity;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $books_sheets=book_sheet::with('grade','classroom')->get();
         $grades=Grade::all();
         return view('backend.book_sheet.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         try{
            foreach ($request->list_Books as $book) {

            book_sheet::create([
                'grade_id'=>$request->grade_id,
                'classroom_id'=>$request->classroom_id,
                'name'=>$book['name'],
                'opening_qty'=>$book['opening_qty'],
                'sales_price'=>$request->sales_price,
                'is_book'=>isset($book['is_book'])?true:false
            ]);
            $this->logActivity('إضافة',' تم إضافة كتاب ' . $request->name);
        }
            session()->flash('success',trans('general.success'));
            return redirect()->back();
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(book_sheet $book_sheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try{
            $book_sheet=book_sheet::findorFail($request->id);
           $book_sheet->update([
                'grade_id'=>$request->grade_id,
                'classroom_id'=>$request->classroom_id,
                'name'=>$request->name,
                'opening_qty'=>$request->opening_qty,
                'sales_price'=>$request->sales_price,
                'is_book'=>isset($book['is_book'])?true:false
            ]);
            $this->logActivity('تعديل',' تم تعديل كتاب ' . $request->name);

            session()->flash('success',trans('general.success'));
            return redirect()->back();
        }catch(\Exception $e){

            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{

            $book_sheet=book_sheet::findorFail($id);
            $this->logActivity('حذف','تم حذف كتاب '.$book_sheet->name);
            $book_sheet->delete();
            session()->flash('success',trans('general.success'));
            return redirect()->back();
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }
}