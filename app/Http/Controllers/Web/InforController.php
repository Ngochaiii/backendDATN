<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InforController extends Controller
{
    public function contact() {
        $compacts = [
            'siteTitle' => 'Contacts'
        ];
        return view('web.front_end.contact.index',$compacts);
    }
    public function faq() {
        $compacts = [
            'siteTitle' => 'FAQ'
        ];
        return view('web.front_end.FAQ.index',$compacts);
    }

    public function privacy_policy() {
        $compacts = [
            'siteTitle' => 'privacy policy'
        ];
        return view('web.front_end.privacy_policy.index',$compacts);
    }
    public function feedback() {
        $compacts = [
            'siteTitle' => 'feedback'
        ];
        return view('web.front_end.feedback.index',$compacts);
    }
    public function terms_conditions() {
        $compacts = [
            'siteTitle' => 'terms&conditions'
        ];
        return view('web.front_end.terms&conditions.index',$compacts);
    }
    public function about_us() {
        $compacts = [
            'siteTitle' => 'About Us'
        ];
        return view('web.front_end.about_us.index',$compacts);
    }
}
