<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Visitor; // Assuming your model is named Visitor

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        $visitor = new Visitor();
        $visitor->ip_address = $request->ip();
        $visitor->user_agent = $request->header('User-Agent');
        $visitor->visited_date = now()->toDateString();
        $url = \Request::url();
        $segments = explode('/', $url);
        $id = end($segments);
        if(isset($id)){
            $visitor->project = $id;
        }
        $visitor->save();

        return $next($request);
    }

}
