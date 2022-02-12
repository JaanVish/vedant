<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        if(!session()->has('loggedAdmin')){
            return redirect()->to('/auth')->with('fail','You are logged out');
        }
        else{
                        return view('admin/dashboard');
        }
    }

    public function monthly()
    {
        if(!session()->has('loggedAdmin')){
            return redirect()->to('/auth')->with('fail','You are logged out');
        }
        else{
                        return view('admin/monthly');
        }
            
    }

    public function activity()
    {
        if(!session()->has('loggedAdmin')){
            return redirect()->to('/auth')->with('fail','You are logged out');
        }
        else{
                        return view('admin/activity');
        }
    }

    public function month_save(){
        $validation = $this->validate([
                'month' => 'required',
                'newsletter' => 'required',
                'global' => 'required',
                'trf_club' => 'required',   
                'trf_member' => 'required',
                'phe' => 'required',
                'mphf' => 'required',
                'maj' => 'required',
                'asha' => 'required',
                'any' => 'required',
                'new' => 'required',
                'aks' => 'required',
                'mem_term' => 'required'
        ]);

        if(!$validation){
            return view('admin/monthly', ['validation' => $this->validator]);
        }
        else{
            $month = $this->request->getPost('month');
            $newsletter = $this->request->getPost('newsletter');
            $news_q = $this->request->getPost('news_q');
            $g_grant = $this->request->getPost('g_grant');
            $grand = $this->request->getPost('grand');
            $global = $this->request->getPost('global');
            $global_p = $this->request->getPost('global_p');
            $trf_club = $this->request->getPost('trf_club');
            $contribution = $this->request->getPost('contribution');
            $trf_member = $this->request->getPost('trf_member');
            $phe = $this->request->getPost('phe');
            $phe_q = $this->request->getPost('phe_q');
            $mphf = $this->request->getPost('mphf');
            $maj = $this->request->getPost('maj');
            $asha = $this->request->getPost('asha');
            $new = $this->request->getPost('new');
            $aks = $this->request->getPost('aks');
            $head = $this->request->getPost('head');
            $h_title = $this->request->getPost('h_title');
            $h_price = $this->request->getPost('h_price');
            $mem_term = $this->request->getPost('mem_term');

            $values = [
                'month'=>$month,
                'newsletter'=>$newsletter,
                'news_q'=>$news_q,
                'g_grant'=>$g_grant,
                'grand'=>$grand,
                'global'=>$global,
                'global_p'=>$global_p,
                'trf_club'=>$trf_club,
                'contribution'=>$contribution,
                'trf_member'=>$trf_member,
                'phe'=>$phe,
                'phe_q'=>$phe_q,
                'mphf'=>$mphf,
                'maj'=>$maj,
                'asha'=>$asha,
                'new'=>$new,
                'aks'=>$aks,
                'head'=>$head,
                'h_title'=>$h_title,
                'h_price'=>$h_price,
                'mem_term'=>$mem_term,
            ];

            $MonthlyModel = new \App\Models\MonthlyModel;
            $query = $MonthlyModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail', 'Something went wrong');
                // return redirect()->to('auth/sign_up')->with('fail', 'Something went wrong');
            }
            else{
                return redirect()->to('admin/monthly')->with('success', 'Data is saved successfully');
            }
        }
    }

    public function activity_save(){
        $validation = $this->validate([
                'project' => 'required',
                'ongoing' => 'required',
                'role' => 'required',
                'rotary' => 'required',   
                'date_from' => 'required',
                'date_to' => 'required',
                'title' => 'required',
                'description' => 'required',
                'impact' => 'required',
                'program_type' => 'required',
                'activity_class' => 'required',
                'activity_type' => 'required',
                'area_of_focus' => 'required',
                'category' => 'required',
                'sub_category' => 'required',
                'cost' => 'required',
                'funding' => 'required',
                'contribution' => 'required',
                'rotarians' => 'required',
                'rotarian_hrs' => 'required',
                'volunteers' => 'required',
                'volunteer_hrs' => 'required',
                'speaker' => 'required',
                'rotaractors' => 'required',
                'rotaractor_hrs' => 'required',
                'direct' => 'required',
                'media' => 'required',
                'facebook' => 'required',
                'showcase' => 'required',
                'picture_1' => 'required',
                'p2_desc' => 'required',
                'picture_2' => 'required',
                'p2_desc' => 'required',
                'picture_3' => 'required',
                'p3_desc' => 'required',
                'picture_4' => 'required',
                'p4_desc' => 'required',
                'picture_5' => 'required',
                'p5_desc' => 'required'
        ]);

        if(!$validation){
            return view('admin/activity', ['validation' => $this->validator]);
        }
        else{
            $project = $this->request->getPost('project');
            $ongoing = $this->request->getPost('ongoing');
            $role = $this->request->getPost('role');
            $rotary = $this->request->getPost('rotary');
            $date_from = $this->request->getPost('date_from');
            $date_to = $this->request->getPost('date_to');
            $title = $this->request->getPost('title');
            $description = $this->request->getPost('description');
            $impact = $this->request->getPost('impact');
            $program_type = $this->request->getPost('program_type');
            $activity_class = $this->request->getPost('activity_class');
            $activity_type = $this->request->getPost('activity_type');
            $area_of_focus = $this->request->getPost('area_of_focus');
            $category = $this->request->getPost('category');
            $sub_category = $this->request->getPost('sub_category');
            $cost = $this->request->getPost('cost');
            $funding = $this->request->getPost('funding');
            $contribution = $this->request->getPost('contribution');
            $rotarians = $this->request->getPost('rotarians');
            $rotarian_hrs = $this->request->getPost('rotarian_hrs');
            $volunteers = $this->request->getPost('volunteers');
            $volunteer_hrs = $this->request->getPost('volunteer_hrs');
            $speaker = $this->request->getPost('speaker');
            $rotaractors = $this->request->getPost('rotaractors');
            $rotaractor_hrs = $this->request->getPost('rotaractor_hrs');
            $direct = $this->request->getPost('direct');
            $media = $this->request->getPost('media');
            $facebook = $this->request->getPost('facebook');
            $showcase = $this->request->getPost('showcase');
            $picture_1 = $this->request->getPost('picture_1');
            $p1_desc = $this->request->getPost('p1_desc');
            $picture_2 = $this->request->getPost('picture_2');
            $p2_desc = $this->request->getPost('p2_desc');
            $picture_3 = $this->request->getPost('picture_3');
            $p3_desc = $this->request->getPost('p3_desc');
            $picture_4 = $this->request->getPost('picture_4');
            $p4_desc = $this->request->getPost('p4_desc');
            $picture_5 = $this->request->getPost('picture_5');
            $p5_desc = $this->request->getPost('p5_desc');


            $values = [
                'project' => $project,
                'ongoing' => $ongoing,
                'role' => $role,
                'rotary' => $rotary,   
                'date_from' => $date_from,
                'date_to' => $date_to,
                'title' => $title,
                'description' => $description,
                'impact' => $impact,
                'program_type' => $program_type,
                'activity_class' => $activity_class,
                'activity_type' => $activity_type,
                'area_of_focus' => $area_of_focus,
                'category' => $category,
                'sub_category' => $sub_category,
                'cost' => $cost,
                'funding' => $funding,
                'contribution' => $contribution,
                'rotarians' => $rotarians,
                'rotarian_hrs' => $rotarian_hrs,
                'volunteers' => $volunteers,
                'volunteer_hrs' => $volunteer_hrs,
                'speaker' => $speaker,
                'rotaractors' => $rotaractors,
                'rotaractor_hrs' => $rotaractor_hrs,
                'direct' => $direct,
                'media' => $media,
                'facebook' => $facebook,
                'showcase' => $showcase,
                'picture_1' => $picture_1,
                'p1_desc' => $p1_desc,
                'picture_2' => $picture_2,
                'p2_desc' => $p2_desc,
                'picture_3' => $picture_3,
                'p3_desc' => $p3_desc,
                'picture_4' => $picture_4,
                'p4_desc' => $p4_desc,
                'picture_1' => $picture_5,
                'p5_desc' => $p5_desc
                
            ];

            $ActivityModel = new \App\Models\ActivityModel;
            $query = $ActivityModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail', 'Something went wrong');
                // return redirect()->to('auth/sign_up')->with('fail', 'Something went wrong');
            }
            else{
                return redirect()->to('admin/activity')->with('success', 'Data is saved successfully');
            }
        }
    }
}