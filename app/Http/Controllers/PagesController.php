<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Http\Helpers\Helper;
use \App\Http\Helpers\Utility;
use DB;
use Validator;
use Session;
use Mail;
use App\Http\Requests;
use App\Rules\Recaptcha;

class PagesController extends Controller
{
    // Seo Done
    // Images Alt Done
    public function index(){

        $title = "Affle | Mobile Marketing Platform To Grow User Acquisition & Engagement";
        $keywords = "programmatic advertising,mobile marketing,Digital Advertising,advertising apps,marketing apps,mobile advertising,ad network,ios application development,growth marketing,mobile app marketing,mobile app advertising,mobile advertising companies,Targeted mobile advertising,advertise app,mobile audience,mobile audience Targeting,mobile video ad networks,mobile marketing solutions,mobile application advertising";
        $description = "Affle is a global technology company with a proprietary consumer intelligence platform that delivers consumer engagement, acquisitions and transactions through relevant mobile advertising.";

        return view("index",compact('title','keywords','description'));

    }

    // Seo Done
    // Done
    public function about(){

        $title= "About Affle | Consumer Focused Mobile Advertising | Mobile Marketing";
        $keywords= "About Affle,Affle Management & Leadership,Affle Board Members,Affle's Investors,Life At Affle,Mobile Advertising Company,Global Ad Networks";
        $description="Affle is a Singapore headquartered global mobile advertising company with a consumer intelligence platform that delivers user acquisition, engagement & transactions";
        
        return view("about",compact('title','keywords','description'));
        
    }

    public function career(){

        $title= "Career";
        $keywords= "";
        $description="";
        
        return view("career",compact('title','keywords','description'));
        
    }

    public function contact(){

        $title= "Contact";
        $keywords= "";
        $description="";
        
        return view("contact",compact('title','keywords','description'));
        
    }

    public function corporategovernance(){

        $title= "Corporate Governance";
        $keywords= "";
        $description="";
        
        return view("corporate-governance",compact('title','keywords','description'));
        
    }

    public function shareholders(){

        $title= "Share Holders";
        $keywords= "";
        $description="";
        
        return view("shareholders",compact('title','keywords','description'));
        
    }

    public function investorrelations(){

        $title= "Investor Relations";
        $keywords= "";
        $description="";
        
        return view("investor-relations",compact('title','keywords','description'));
        
    }

    public function corporateaction(){

        $title= "Corporate Action";
        $keywords= "";
        $description="";
        
        return view("corporate-action",compact('title','keywords','description'));
        
    }

    public function media(){

        $title= "Media";
        $keywords= "";
        $description="";
        
        return view("media",compact('title','keywords','description'));
        
    }

    public function discoverIdentify(){

        $title= "Discover Identify";
        $keywords= "";
        $description="";
        
        return view("discover-identify",compact('title','keywords','description'));
        
    }

    public function acquireEngage(){

        $title= "Acquire & Engage";
        $keywords= "";
        $description="";
        
        return view("acquire-engage",compact('title','keywords','description'));
        
    }

    public function reengageTransact(){

        $title= "Re-engage & Transact";
        $keywords= "";
        $description="";
        
        return view("re-engage-transact",compact('title','keywords','description'));
        
    }

    public function aboutusIndia(){

        $title= "About Us India";
        $keywords= "";
        $description="";
        
        return view("about-us-india",compact('title','keywords','description'));
        
    }

    public function esgaffle(){

        $title= "ESG Affle";
        $keywords= "";
        $description="";
        
        return view("esg-affle",compact('title','keywords','description'));
        
    }

    public function annualReportsAGMInformation(){

        $title= "Annual Reports & AGM Iformation";
        $keywords= "";
        $description="";
        
        return view("annual-reports-agm-information",compact('title','keywords','description'));
        
    }

    public function blogs(){

        $title= "Blog";
        $keywords= "";
        $description="";
        
        return view("blogs",compact('title','keywords','description'));
        
    }

    public function blogdetail(){

        $title= "Blog Detail";
        $keywords= "";
        $description="";
        
        return view("blog-detail",compact('title','keywords','description'));
        
    }

    public function author(){

        $title= "Author";
        $keywords= "";
        $description="";
        
        return view("author",compact('title','keywords','description'));
        
    }

    public function thankyou(){

        $title= "Thankyou";
        $keywords= "";
        $description="";
        
        return view("thankyou",compact('title','keywords','description'));
        
    }

    public function digitalTransformation(){

        $title= "Digital Transformation";
        $keywords= "";
        $description="";
        
        return view("digital-transformation",compact('title','keywords','description'));
        
    }
       

}

