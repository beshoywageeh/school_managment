<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\laboratory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LaboratoryController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();
        $labs = laboratory::where('school_id', $school->id)
            ->where('is_main', 1)
            ->with('sub_locations')
            ->get();
        $labs_main = laboratory::where('is_main', 1)->get();

        return view('backend.labs.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $main_location = $request->location;
            $school_id = $this->getSchool()->id;
            $user_id = auth()->id(); // استخدام auth()->id() أسرع وأقصر

            // 2. إنشاء أو جلب الموقع الرئيسي
            $location = laboratory::firstOrCreate(
                ['location' => $main_location, 'school_id' => $school_id],
                [
                    'is_main' => 1,
                    'user_id' => $user_id,
                ],
            );

            // 3. إنشاء المعامل الفرعية
            foreach ($request->labs_list as $lab) {
                laboratory::firstOrCreate(
                    [
                        'sub_location' => $lab['name'],
                        'location_id' => $location->id, // حماية تفاديًا لتكرار الأسماء بين المواقع المختلفة
                        'school_id' => $school_id,
                    ],
                    [
                        'location' => null,
                        'is_main' => 0,
                        'user_id' => $user_id,
                    ],
                );
            }

            // 4. كتابة الـ Log مرة واحدة فقط خارج الـ Loop
            $this->logActivity(
                trans('log.parents.added_action'),
                trans('log.laboratory.added', [
                    'location' => $main_location,
                    'count' => count($request->labs_list),
                ]),
            );

            // تأكيد حفظ البيانات في قاعدة البيانات
            DB::commit();

            return redirect()
                ->back()
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            // تراجع عن أي عملية تمت في حال حدوث خطأ مالي أو تقني
            DB::rollBack();

            // تسجيل الخطأ الحقيقي في الـ System Log للمطورين، وإظهار رسالة عامة ومفهومة للمستخدم
            Log::error('Laboratory Store Error: '.$e->getMessage());

            return redirect()
                ->back()
                ->with(
                    'error',
                    trans('general.error_something_went_wrong'),
                );
            // يفضل استخدام ترجمة عامة للخطأ بدل إظهار الـ Exception للمستخدم النهائي لحماية النظام
        }
    }

    public function edit($id)
    {
        $school = $this->getSchool();
        $laboratory = laboratory::where('school_id', $school->id)
            ->with('sub_locations:id,sub_location,location_id')
            ->findOrFail($id);

        return view('backend.labs.edit', get_defined_vars());
    }

    public function update(Request $request)
    {
        // return $request;
        try {
            $laboratory = laboratory::findOrFail($request->id);
            $laboratory->update(['location' => $request->location]);
            foreach (
                $request->sub_location_id as $index => $sub_location_id
            ) {
                laboratory::where('id', $sub_location_id)->update([
                    'sub_location' => $request->sub_locations[$index],
                ]);
                $this->logActivity(
                    trans('log.parents.updated_action'),
                    trans('log.laboratory.updated', [
                        'name' => $request->sub_locations[$index],
                        'location' => $laboratory->location,
                    ]),
                );
            }

            return redirect()
                ->route('labs.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        $school = $this->getSchool();
        $laboratory = laboratory::where('school_id', $school->id)
            ->with([
                'orders',
                'orders.stocks:id,name',
                'main_location:id,location',
            ])
            ->findOrFail($id);

        return view('backend.labs.show', get_defined_vars());
    }

    public function destroy($id)
    {
        try {
            $laboratory = laboratory::findOrFail($id);
            if ($laboratory->orders->count() > 0) {
                return redirect()
                    ->back()
                    ->with('info', trans('general.cant_delete'));
            }
            $laboratory->delete();

            return redirect()
                ->back()
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
