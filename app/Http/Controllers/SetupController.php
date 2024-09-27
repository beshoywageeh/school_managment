<?php

namespace App\Http\Controllers;

use App\Http\Traits\ImageTrait;
use App\Models\settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SetupController extends Controller
{
    use ImageTrait;

    public function showSetupForm()
    {
        return view('setup');
    }

    public function processSetup(Request $request)
    {

        \Illuminate\Support\Facades\DB::beginTransaction();
        try {
            $validated = $request->validate([
                'database_name' => 'required|string',
                'database_user' => 'required|string',
                'database_password' => 'required|string',
            ]);

            // تحديث ملف .env بالإعدادات الجديدة
            $this->updateEnv([
                'DB_DATABASE' => $validated['database_name'],
                'DB_USERNAME' => $validated['database_user'],
                'DB_PASSWORD' => $validated['database_password'],
            ]);

            // تنفيذ الأوامر مثل migration
            Artisan::call('migrate', ['--force' => true]);
            $slug = \Str::slug($request->schoolname);
            $school = new settings;
            $school->name = $request->schoolname;
            $school->phone = $request->phone;
            $school->address = $request->address;
            $school->slug = $slug;
            $school->save();
            $this->verifyAndStoreImage($request, 'logo', $slug, 'upload_attachments', $school->id, 'App\Models\settings', $request->schoolname);
            $lastemp = User::latest()->first();
            $user = new User;
            $user->code = $lastemp ? str_pad($lastemp->code + 1, 5, '0', STR_PAD_LEFT) : '00001';
            $user->name = $request->name;
            $user->email = $request->email;
            $user->isAdmin = $request->isAdmin;
            $user->login_allow = $request->loginAllow;
            $user->password = bcrypt($request->password);
            $user->save();
            \DB::commit();

            return redirect()->route('dashboard')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            \DB::rollBack();

            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    protected function updateEnv(array $data)
    {
        $envPath = base_path('.env');
        $envContent = file_get_contents($envPath);

        foreach ($data as $key => $value) {
            $envContent = preg_replace("/^{$key}=.*$/m", "{$key}={$value}", $envContent);
        }

        file_put_contents($envPath, $envContent);
    }
}
