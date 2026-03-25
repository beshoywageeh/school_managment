<?php

namespace Modules\Inventory\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Inventory\Entities\InventoryItems;

class InventoryItemsController extends Controller
{
    use SchoolTrait;

    public function index()
    {

        $inventory_items = InventoryItems::get();
        $school = $this->getSchool();

        // dd($inventory_items);
        return view('inventory::index', compact('inventory_items', 'school'));
    }

    public function create()
    {
        return view('inventory::create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('inventory::show');
    }

    public function edit($id)
    {
        return view('inventory::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
