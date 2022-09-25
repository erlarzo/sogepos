<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Config;

class ConfigController extends Controller
{    
    public function __construct()
    {
        //    
    }

    public function index()
    {
        $this->isAdmin();
        $config = Config::all();

        $configList = [];
        foreach($config as $x) {
            $configList[] = [
                'key' => $x->config_name,
                'value' => $x->value
            ];
        }

        //create formatted array for setting
        $formattedConfig = array_column($configList, 'value', 'key');
        // dd($formattedConfig);

        return view('admin.configindex', ['data' => $formattedConfig]);
    }

    public function store(Request $request)
    {
        $listKey = [
            'company_name',
            'company_address',
            'company_phone',
            'company_email',
            'company_website',
            'invoice_prefix',
            'invoice_postfix',
            'invoice_note',
        ];
        $this->isAdmin();

        //company_name
        $name = Config::where('config_name', 'company_name')->first();
        if(empty($name)) {
            $name = new Config();
            $name->config_name = 'company_name';
            $name->group_by = 'company';
        }

        $name->value = $request->company_name;
        $name->save();
        
        //company_address
        $address = Config::where('config_name', 'company_address')->first();
        if(empty($address)) {
            $address = new Config();
            $address->config_name = 'company_address';
            $name->group_by = 'company';
        }

        $address->value = $request->company_address;
        $address->save();

        //company_phone
        $phone = Config::where('config_name', 'company_phone')->first();
        if(empty($phone)) {
            $phone = new Config();
            $phone->config_name = 'company_phone';
            $name->group_by = 'company';
        }

        $phone->value = $request->company_phone;
        $phone->save();
        
        //company_email
        $email = Config::where('config_name', 'company_email')->first();
        if(empty($email)) {
            $email = new Config();
            $email->config_name = 'company_email';
            $name->group_by = 'company';
        }

        $email->value = $request->company_email;
        $email->save();
        
        //company_website
        $website = Config::where('config_name', 'company_website')->first();
        if(empty($website)) {
            $website = new Config();
            $website->config_name = 'company_website';
            $name->group_by = 'company';
        }

        $website->value = $request->company_website;
        $website->save();
        
        //invoice_prefix
        $prefix = Config::where('config_name', 'invoice_prefix')->first();
        if(empty($prefix)) {
            $prefix = new Config();
            $prefix->config_name = 'invoice_prefix';
            $name->group_by = 'invoice';
        }

        $prefix->value = $request->invoice_prefix;
        $prefix->save();
        
        //invoice_postfix
        $postfix = Config::where('config_name', 'invoice_postfix')->first();
        if(empty($postfix)) {
            $postfix = new Config();
            $postfix->config_name = 'invoice_postfix';
            $name->group_by = 'invoice';
        }

        $postfix->value = $request->invoice_postfix;
        $postfix->save();
        
        //invoice_note
        $note = Config::where('config_name', 'invoice_note')->first();
        if(empty($note)) {
            $note = new Config();
            $note->config_name = 'invoice_note';
            $name->group_by = 'invoice';
        }

        $note->value = $request->invoice_note;
        $note->save();

        return redirect()->route('admin.config');
    }
}
