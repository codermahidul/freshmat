<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\ContactPage;
use App\Models\H3Video;
use App\Models\InstagramPost;
use App\Models\Invoice;
use App\Models\InvoicesProducts;
use App\Models\Product;
use App\Models\BlogPost;
use App\Models\ProductCategory;
use App\Models\Slider;
use App\Models\User;
use App\Models\Reviews;
use App\Models\UserProfile;
use App\Models\Wishlist;
use App\Models\PrivacyPolicy;
use App\Models\TermsCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    //Shop
    public function shop(Request $request){

        $query = Product::where('status','active');
     $featuredProducts = InvoicesProducts::select('productId', DB::raw('SUM(quantity) as totalQuantity'))
        ->groupBy('productId')->orderByDesc('totalQuantity')->take(3)
        ->with(['product' => function($query){
            $query->select('id','title','selePrice','thumbnail','slug')
            ->with('reviews', function($query){
                $query->avg('productId','rating');
            });
        }])->get();

        if ($request->has('search')) {
            $query->where('title','like','%'.$request->input('search').'%');
        }
        $selected = '';
        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'lh':
                    $query->orderBy('selePrice','asc');
                    $selected = 'lh';
                    break;

                case 'hl' :
                    $query->orderBy('selePrice','desc');
                    $selected = 'hl';
                    break;

                case 'bs' :
                    $query->withCount(['invoiceProducts as sales_count' => function($query){
                        $query->select(DB::raw('SUM(quantity)'));
                    }])->orderBy('sales_count','desc');
                    $selected = 'bs';
                    break;

                default:
                    $query->latest();
                    break;
            }
        }else{
            $query->latest();
        }


        $products = $query->paginate(9);
        return view('frontend.pages.shop',compact([
            'products',
            'featuredProducts',
            'selected',
        ]));
    }

    public function categoryWiseProduct($slug){
        $categoryId = ProductCategory::where('slug',$slug)->first()->id;
        $categoryName = ProductCategory::where('slug',$slug)->first()->name;
        $categoryWiseProducts = Product::where('status','active')->where('categoryId',$categoryId)->latest()->paginate(10);
        return view('frontend.pages.categorywiseproduct',compact([
            'categoryWiseProducts',
            'categoryName'
        ]));
    }

    //Product Details
    public function productDetails($slug){

        $productInfo = Product::where('slug', $slug)->with('productcategories','productgallery')->first();
        $currentProductId = $productInfo->id;

        $categoryId = $productInfo->productcategories->id;

        $reviews = Reviews::where('status', 'approved')->where('productId', $currentProductId)
        ->with('user')->latest()->paginate(10);

        $relatedProducts = Product::where('categoryId',$categoryId)->where('id','!=',$currentProductId)->latest()->take(10)->get();

        return view('frontend.pages.productDetails',compact([
            'productInfo',
            'relatedProducts',
            'reviews',
        ]));
    }

    //Protected Route
    public function dashboard(){
        $activeOrder = Invoice::where('userId',Auth::id())->where('status','active')->count();
        $completedOrder = Invoice::where('userId',Auth::id())->where('status','completed')->count();
        $totalOrder = Invoice::where('userId',Auth::id())->count();
        return view('frontend.pages.dashboard.dashboard',compact(
            'activeOrder',
            'completedOrder',
            'totalOrder',
        ));
    }

    public function editProfile(){
        return view('frontend.pages.dashboard.editProfile');
    }

    public function profileUpdate(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        User::where('id',Auth::id())->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        UserProfile::where('userId',Auth::id())->update([
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
        ]);

        toast(trans('Your profile update succesfully!'), 'success')->width('350');
        return back();
    }

    public function profileImageUpdate(Request $request){
        $request->validate([
            'avatar' => 'required|image:jpeg,jpg,png',
        ]);

        $avatar = Auth::user()->userProfile->photo;
        if ($request->file('avatar')) {
            if ($avatar !== 'default/user-default-avator.jpg') {
                unlink(base_path('public/'.$avatar));
            }
            //Thumbnail Process
            $manager = new ImageManager(new Driver());
            $image = $request->file('avatar');
            $name = Str::slug(Auth::user()->name).'-'.Auth::user()->id.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->toJpeg(90)->save(base_path('public/uploads/avator/'.$name));
            $avatar = 'uploads/avator/'.$name;
        }

        UserProfile::where('userId',Auth::id())->update([
            'photo' => $avatar,
        ]);
        toast(trans('Profile image update successfull!'), 'success')->width('350');
        return back();
    }

    public function order(){
        $orders = Invoice::where('userId',Auth::id())->latest()->get();
        return view('frontend.pages.dashboard.order',compact(
            'orders',
        ));
    }

    public function orderInvoice($id){
        $invoice = Invoice::where('id',$id)->first();
        $products = InvoicesProducts::where('invoiceId',$id)->get();
        foreach ($products as $product) {
            $product->name = Product::where('id',$product->productId)->first()->title;
            $product->price = Product::where('id',$product->productId)->first()->selePrice;
        }
        return view('frontend.pages.dashboard.invoice',compact('invoice','products'));
    }

    public function review(){
        $reviews = Reviews::where('userId', Auth::user()->id)->latest()->paginate(4);
        return view('frontend.pages.dashboard.review',compact('reviews'));
    }

    public function wishlist(){
        $wishlists = Wishlist::where('userId',Auth::id())->with('products','products.productcategories')->latest()->get();
        return view('frontend.pages.dashboard.wishlist',compact([
            'wishlists',
        ]));
    }

    public function addToWishlists($id){
       $wishlistsCheck = Wishlist::where('userId',Auth::id())->where('productId',$id)->get();
       $delete = false;
       if ($wishlistsCheck->isEmpty()) {
        Wishlist::insert([
            'userId' => Auth::id(),
            'productId' => $id,
        ]);
       } else {
        Wishlist::where('userId',Auth::id())->where('productId',$id)->delete();
        $delete = true;
       }

       if ($delete == true) {
        toast(trans('Wislist item removed!'), 'success')->width('350');
    }else{
           toast(trans('Wislist item added!'), 'success')->width('350');

       }

       return back();

    }


    public function passwordChange(){
        return view('frontend.pages.dashboard.passwordChange');
    }

    public function passwordUpdate(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password,$user->password)) {
            return back()->withErrors(['current_password' => trans('The current password does not match our records.')]);
        }

        User::find($user->id)->update([
            'password' => Hash::make($request->input('new_password')),
        ]);
        toast(trans('Password changed successfully.'), 'success')->width('350');
        return back();

    }

    public function index(){

       $blogs = BlogPost::where('status','publish')->with('blogcategory')->with('user')->latest()->take(3)->get();

        $productCategories = ProductCategory::where('status','active')->latest()->get();
        $topCategories = ProductCategory::where('status','active')->latest()->take(4)->get();
        $latestProduct = Product::where('status','active')->with('productcategories','productgallery')->latest()->take(8)->get();
        $sliders = Slider::where('status','active')->latest()->get();
        $viewName = 'welcome';
        $specialProduct = InvoicesProducts::select('productId', DB::raw('SUM(quantity) as totalQuantity'))
        ->groupBy('productId')->orderByDesc('totalQuantity')->take(3)
        ->with(['product' => function($query){
            $query->select('id','title','selePrice','regularPrice','thumbnail','slug')
            ->with('reviews', function($query){
                $query->avg('productId','rating');
            });
        }])->get();


        if (setting('theme') == 'all') {
            $viewName = 'welcome';
            return view('welcome',compact([
                'productCategories',
                'topCategories',
                'latestProduct',
                'sliders',
                'viewName',
                'specialProduct',
                'blogs',
            ]));
        }elseif (setting('theme') == 'one') {

            $viewName = 'welcome';
            return view('welcome',compact([
                'productCategories',
                'topCategories',
                'latestProduct',
                'sliders',
                'viewName',
                'blogs',
            ]));
        }elseif(setting('theme') == 'two'){
            $instagramPost = InstagramPost::latest()->get();
            $specialProduct = InvoicesProducts::select('productId', DB::raw('SUM(quantity) as totalQuantity'))
        ->groupBy('productId')->orderByDesc('totalQuantity')->take(4)
        ->with(['product' => function($query){
            $query->select('id','title','regularPrice','selePrice','thumbnail','slug')
            ->with('reviews', function($query){
                $query->avg('productId','rating');
            });
        }])->get();
        $firstThreeIds = $sbproduct1->pluck('id')->toArray();
        $sbproduct1 =Product::where('status','active')->latest()->take(3)->get();
        $sbproduct2 = Product::where('status','active')->whereNotIn('id',$firstThreeIds)->latest()->take(3)->get();
            $viewName = 'homeTwo';
            return view('homeTwo',compact([
                'viewName',
                'instagramPost',
                'specialProduct',
                'sbproduct1',
                'sbproduct2',
            ]));
        }elseif(setting('theme') == 'three'){
            $viewName = 'homeThree';
            $productCategories = ProductCategory::where('status','active')->latest()->get();
            $sliders = Slider::where('status','active')->latest()->get();
            $backgroundVideo = H3Video::find(1)->first();
            $topCategories = ProductCategory::where('status','active')->latest()->take(4)->get();
            $latestProduct = Product::where('status','active')->with('productcategories','productgallery')->latest()->take(8)->get();
            return view('homeThree',compact([
                'productCategories',
                'sliders',
                'viewName',
                'backgroundVideo',
                'topCategories',
                'latestProduct',
            ]));
        }
    }

    public function indexOne(){
        $blogs = BlogPost::where('status','publish')->with('blogcategory')->with('user')->latest()->take(3)->get();
        $productCategories = ProductCategory::where('status','active')->latest()->get();
        $topCategories = ProductCategory::where('status','active')->latest()->take(4)->get();
        $latestProduct = Product::where('status','active')->with('productcategories','productgallery')->latest()->take(8)->get();
        $sliders = Slider::where('status','active')->latest()->get();
        $viewName = 'welcome';
        $specialProduct = InvoicesProducts::select('productId', DB::raw('SUM(quantity) as totalQuantity'))
        ->groupBy('productId')->orderByDesc('totalQuantity')->take(3)
        ->with(['product' => function($query){
            $query->select('id','title','regularPrice','selePrice','thumbnail','slug')
            ->with('reviews', function($query){
                $query->avg('productId','rating');
            });
        }])->get();

        return view('welcome',compact([
            'productCategories',
            'topCategories',
            'latestProduct',
            'sliders',
            'viewName',
            'specialProduct',
            'blogs',
        ]));
    }

    public function indexTwo(){
        $viewName = 'homeTwo';
        $latestProduct = Product::where('status','active')->with('productcategories','productgallery')->latest()->take(8)->get();
        $instagramPost = InstagramPost::latest()->get();
        $specialProduct = InvoicesProducts::select('productId', DB::raw('SUM(quantity) as totalQuantity'))
        ->groupBy('productId')->orderByDesc('totalQuantity')->take(4)
        ->with(['product' => function($query){
            $query->select('id','title','regularPrice','selePrice','thumbnail','slug')
            ->with('reviews', function($query){
                $query->avg('productId','rating');
            });
        }])->get();
        $sbproduct1 =Product::where('status','active')->latest()->take(3)->get();
        $firstThreeIds = $sbproduct1->pluck('id')->toArray();
        $sbproduct2 = Product::where('status','active')->whereNotIn('id',$firstThreeIds)->latest()->take(3)->get();
        $blogs = BlogPost::where('status','publish')->with('blogcategory')->with('user')->latest()->take(3)->get();
        return view('homeTwo',compact([
            'viewName',
            'instagramPost',
            'latestProduct',
            'specialProduct',
            'sbproduct1',
            'sbproduct2',
            'blogs',
        ]));
    }

    public function indexThree(){
        $productCategories = ProductCategory::where('status','active')->latest()->get();
        $sliders = Slider::where('status','active')->latest()->get();
        $viewName = 'homeThree';
        $backgroundVideo = H3Video::find(1)->first();
        $topCategories = ProductCategory::where('status','active')->latest()->take(4)->get();
        $latestProduct = Product::where('status','active')->with('productcategories','productgallery')->latest()->take(8)->get();
        $blogs = BlogPost::where('status','publish')->with('blogcategory')->with('user')->latest()->take(3)->get();
        return view('homeThree',compact([
            'productCategories',
            'sliders',
            'viewName',
            'backgroundVideo',
            'topCategories',
            'latestProduct',
            'blogs',
        ]));
    }

    public function contact(){
        $contents = ContactPage::find(1);
        return view('frontend.pages.contact',compact('contents'));
    }

    public function aboutUs(){
        $blogs = BlogPost::where('status','publish')->with('blogcategory')->with('user')->latest()->take(3)->get();
        $viewName = 'welcome';
        $contents = AboutUs::find(1);
        return view('frontend.pages.aboutus',compact([
            'contents',
            'viewName',
            'blogs',
        ]));
    }

    public function privacyPolicy(){
        $content = PrivacyPolicy::find(1)->first()->content;
        return view('frontend.pages.privacyPolicy', compact('content'));
    }

    public function termsCondition(){
        $content = TermsCondition::find(1)->first()->content;
        return view('frontend.pages.termsCondition', compact('content'));
    }

    public function faqsf(){
        return view('frontend.pages.faqs');
    }

    //Forgot Password
    public function forgotPassword(){
        return view('frontend.pages.auth.forgot');
    }




}

