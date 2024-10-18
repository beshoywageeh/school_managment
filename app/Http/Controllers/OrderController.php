<?php

namespace App\Http\Controllers;

use App\Models\order;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return 1;
    }
    public function store()
    {
        try {
            $generate_code = order::orderBy('auto_number', 'desc')->first();
            $order = order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT)  : '000001',
                'type' => '1'
            ]);
            return redirect()->route('stock.tawreed', $order->id);
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }   //
}