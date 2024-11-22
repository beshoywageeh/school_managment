<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Models\bookSheets_order;

class BookSheetsOrderController extends Controller
{
    use LogsActivity;

    public function index($type)
    {
        $book_sheets_order = bookSheets_order::where('type', $type)->with('book_sheet')->get();

        return view('book_sheets_order.index', compact('book_sheets_order', 'type'));
    }
}
