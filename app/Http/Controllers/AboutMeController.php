<?php

namespace App\Http\Controllers;

class AboutMeController extends Controller
{
    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageData = [
            'pageTitle' => trans('larablog.about_me.pageTitle'),
            'pageDesc'  => trans('larablog.about_me.pageDesc'),
            'title'     => trans('larablog.about_me.title'),
            'subtitle'  => trans('larablog.about_me.subtitle'),
            'image'     => config('blog.contact_page_image'),
        ];

        return view('blog.pages.aboutme', $pageData);
    }
}
