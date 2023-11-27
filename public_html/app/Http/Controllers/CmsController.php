<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pagecontent;

    class CmsController extends Controller
    {
        private $pagecontent;

        public function __construct()
            {
                $this->pagecontent = new pagecontent();
            }

        public function Buywitharis()
            {
                $data['page'] = $this->pagecontent->getbyid('1');
                return view('cms.buy-with-aris',$data);
            }

            public function whychoose(){
                $data['page'] = $this->pagecontent->getbyid('2');
                return view('cms.why-choose-aris',$data);
            }

            public function buyingguide(){
                $data['page'] = $this->pagecontent->getbyid('3');
                return view('cms.home-buying-guide',$data);
            }

            public function firsttime(){
                $data['page'] = $this->pagecontent->getbyid('4');
                return view('cms.first-time-home-buyer',$data);
            }
            public function currenthomeowner(){
                $data['page'] = $this->pagecontent->getbyid('5');
                return view('cms.current-home-owner',$data);
            }
            public function value360(){
                $data['page'] = $this->pagecontent->getbyid('6');
                return view('cms.value360',$data);
            }
            public function homevalue(){
                $data['page'] = $this->pagecontent->getbyid('7');
                return view('cms.bling-your-home',$data);
            }
            public function sellwith(){
                $data['page'] = $this->pagecontent->getbyid('8');
                return view('cms.sell-with-aris',$data);
            }
            public function comparativeanalysis(){
                $data['page'] = $this->pagecontent->getbyid('9');
                return view('cms.comparative-analysis',$data);
            }
            public function sellguide(){
                $data['page'] = $this->pagecontent->getbyid('10');
                return view('cms.home-selling-guide',$data);
            }
            public function sellingworth(){
                $data['page'] = $this->pagecontent->getbyid('11');
                return view('cms.is-selling-worth-it',$data);
            }
            
            public function mortgagerate(){
                $data['page'] = $this->pagecontent->getbyid('12');
                return view('cms.mortgage-rates',$data);
            }
            public function about_home_loan(){
                $data['page'] = $this->pagecontent->getbyid('13');
                return view('cms.agent-about-homeloan',$data);
            }
            
            public function Mortgage_Learning_Center(){
                $data['page'] = $this->pagecontent->getbyid('14');
                return view('cms.mortgage-learning',$data);
            }
            public function lender_resource(){
                $data['page'] = $this->pagecontent->getbyid('15');
                return view('cms.lender-resource',$data);
            }
            public function agent_find(){
                $data['page'] = $this->pagecontent->getbyid('16');
                return view('cms.find-an-agent',$data);
            }
            public function state_real(){
                $data['page'] = $this->pagecontent->getbyid('17');
                return view('cms.real-estate',$data);
            }
            public function resource_center(){
                $data['page'] = $this->pagecontent->getbyid('18');
                return view('cms.resource_center',$data);
            }
            
            public function market_update(){
                $data['page'] = $this->pagecontent->getbyid('19');
                return view('cms.market-update',$data);
            }
            public function mortgage_rates(){
                $data['page'] = $this->pagecontent->getbyid('20');
                return view('cms.todays-mortgage-rates',$data);
            }
            public function mortgage_buy(){
                $data['page'] = $this->pagecontent->getbyid('21');
                return view('cms.mortgage-buy',$data);
            }
            public function cms_index(){
                $data['page'] = $this->pagecontent->getbyid('22');
                return view('cms.index',$data);
            }
            public function instruction(){
                $data['page'] = $this->pagecontent->getbyid('22');
                return view('cms.instruction',$data);
            }

        public function savecontent(Request $request)
            {
                // return json_encode($request->all());
                $data = $this->pagecontent->savecontent($request->id,$request->content);
                return json_encode('Saved');
            }
           
            
            public function savetwocontent(Request $request)
            {
                // return $request->all();
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                return json_encode('Saved');
            }
            public function savethreecontent(Request $request)
            {
                // return $request->all();
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                return json_encode('Saved');
            }
            public function savefourcontent(Request $request)
            {
                // return $request->all();
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                return json_encode('Saved');
            }
            public function savefivecontent(Request $request)
            {
                // return $request->all();
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                return json_encode('Saved');
            }
            public function savesixcontent(Request $request)
            {
                //  return $request->all();
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                $this->pagecontent->savecontent($request->id6,$request->content6);
                return json_encode('Saved');
            }
            public function savesevencontent(Request $request)
            {
                 // return $request->all();
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                $this->pagecontent->savecontent($request->id6,$request->content6);
                $this->pagecontent->savecontent($request->id7,$request->content7);
                return json_encode('Saved');
            }
            public function saveeightcontent(Request $request)
            {
                //  return $request->all();
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                $this->pagecontent->savecontent($request->id6,$request->content6);
                $this->pagecontent->savecontent($request->id7,$request->content7);
                $this->pagecontent->savecontent($request->id8,$request->content8);
                return json_encode('Saved');
            }
            public function savninecontent(Request $request)
            {
                //  return $request->all();
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                $this->pagecontent->savecontent($request->id6,$request->content6);
                $this->pagecontent->savecontent($request->id7,$request->content7);
                $this->pagecontent->savecontent($request->id8,$request->content8);
                $this->pagecontent->savecontent($request->id9,$request->content9);
                return json_encode('Saved');
            }

            public function savetencontent(Request $request)
            {
                //  return $request->all();
                //  $till =  (count( $request->all())-1)/2;
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                $this->pagecontent->savecontent($request->id6,$request->content6);
                $this->pagecontent->savecontent($request->id7,$request->content7);
                $this->pagecontent->savecontent($request->id8,$request->content8);
                $this->pagecontent->savecontent($request->id9,$request->content9);
                $this->pagecontent->savecontent($request->id10,$request->content10);
                return json_encode('Saved');
            }
            public function saveelevencontent(Request $request)
            {
                //  return $request->all();
                //  $till =  (count( $request->all())-1)/2;
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                $this->pagecontent->savecontent($request->id6,$request->content6);
                $this->pagecontent->savecontent($request->id7,$request->content7);
                $this->pagecontent->savecontent($request->id8,$request->content8);
                $this->pagecontent->savecontent($request->id9,$request->content9);
                $this->pagecontent->savecontent($request->id10,$request->content10);
                $this->pagecontent->savecontent($request->id11,$request->content11);
                return json_encode('Saved');
            }
            public function savetwelvecontent(Request $request)
            {
                //  return $request->all();
                //  $till =  (count( $request->all())-1)/2;
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                $this->pagecontent->savecontent($request->id6,$request->content6);
                $this->pagecontent->savecontent($request->id7,$request->content7);
                $this->pagecontent->savecontent($request->id8,$request->content8);
                $this->pagecontent->savecontent($request->id9,$request->content9);
                $this->pagecontent->savecontent($request->id10,$request->content10);
                $this->pagecontent->savecontent($request->id11,$request->content11);
                $this->pagecontent->savecontent($request->id12,$request->content12);
                return json_encode('Saved');
            }
            public function savethirteencontent(Request $request)
            {
                //  return $request->all();
                //  $till =  (count( $request->all())-1)/2;
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                $this->pagecontent->savecontent($request->id6,$request->content6);
                $this->pagecontent->savecontent($request->id7,$request->content7);
                $this->pagecontent->savecontent($request->id8,$request->content8);
                $this->pagecontent->savecontent($request->id9,$request->content9);
                $this->pagecontent->savecontent($request->id10,$request->content10);
                $this->pagecontent->savecontent($request->id11,$request->content11);
                $this->pagecontent->savecontent($request->id12,$request->content12);
                $this->pagecontent->savecontent($request->id13,$request->content13);
                return json_encode('Saved');
            }
            public function savefourteencontent(Request $request)
            {
                //  return $request->all();
                //  $till =  (count( $request->all())-1)/2;
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                $this->pagecontent->savecontent($request->id6,$request->content6);
                $this->pagecontent->savecontent($request->id7,$request->content7);
                $this->pagecontent->savecontent($request->id8,$request->content8);
                $this->pagecontent->savecontent($request->id9,$request->content9);
                $this->pagecontent->savecontent($request->id10,$request->content10);
                $this->pagecontent->savecontent($request->id11,$request->content11);
                $this->pagecontent->savecontent($request->id12,$request->content12);
                $this->pagecontent->savecontent($request->id13,$request->content13);
                $this->pagecontent->savecontent($request->id14,$request->content14);
                return json_encode('Saved');
            }
            public function savenineteencontent(Request $request)
            {
                //  return $request->all();
                //  $till =  (count( $request->all())-1)/2;
                $this->pagecontent->savecontent($request->id1,$request->content1);
                $this->pagecontent->savecontent($request->id2,$request->content2);
                $this->pagecontent->savecontent($request->id3,$request->content3);
                $this->pagecontent->savecontent($request->id4,$request->content4);
                $this->pagecontent->savecontent($request->id5,$request->content5);
                $this->pagecontent->savecontent($request->id6,$request->content6);
                $this->pagecontent->savecontent($request->id7,$request->content7);
                $this->pagecontent->savecontent($request->id8,$request->content8);
                $this->pagecontent->savecontent($request->id9,$request->content9);
                $this->pagecontent->savecontent($request->id10,$request->content10);
                $this->pagecontent->savecontent($request->id11,$request->content11);
                $this->pagecontent->savecontent($request->id12,$request->content12);
                $this->pagecontent->savecontent($request->id13,$request->content13);
                $this->pagecontent->savecontent($request->id14,$request->content14);
                $this->pagecontent->savecontent($request->id15,$request->content15);
                $this->pagecontent->savecontent($request->id16,$request->content16);
                $this->pagecontent->savecontent($request->id17,$request->content17);
                $this->pagecontent->savecontent($request->id18,$request->content18);
                $this->pagecontent->savecontent($request->id19,$request->content19);
                return json_encode('Saved');
            }

           
    }
