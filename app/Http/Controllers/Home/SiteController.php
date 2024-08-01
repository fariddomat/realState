<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Property;
use App\Models\Favorite;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Contact;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $properties = Property::latest()->take(6)->get(); // Example: show latest 6 properties
        return view('site.home', compact('categories', 'properties'));
    }

    public function categories()
    {
        $categories = Category::all();
        return view('site.categories', compact('categories'));
    }

    public function properties(Category $category)
    {
        $properties = $category->properties()->paginate(10);
        return view('site.properties', compact('category', 'properties'));
    }

    public function property(Property $property)
    {
        $comments = $property->comments()->latest()->get();
        return view('site.property', compact('property', 'comments'));
    }

    public function order(Request $request, Property $property)
    {
        $order = new Order();
        $order->user_id = auth()->id();
        $order->property_id = $property->id;
        $order->save();

        return redirect()->route('property', $property)->with('success', 'Order placed successfully');
    }

    public function addToFavorite(Property $property)
    {
        $favorite = new Favorite();
        $favorite->user_id = auth()->id();
        $favorite->property_id = $property->id;
        $favorite->save();

        return redirect()->route('property', $property)->with('success', 'Property added to favorites');
    }

    public function comment(Request $request, Property $property)
    {
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);

        $comment = new Comment();
        $comment->user_id = auth()->id();
        $comment->property_id = $property->id;
        $comment->content = $request->comment;
        $comment->save();

        return redirect()->route('property', $property)->with('success', 'Comment added successfully');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->route('contact')->with('success', 'Message sent successfully');
    }
}
