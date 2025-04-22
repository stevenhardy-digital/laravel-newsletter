<?php

namespace Webkul\Newsletter\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Webkul\Newsletter\Repositories\NewsletterRepository;
use Webkul\Newsletter\Mail\NewsletterMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class NewsletterController extends Controller
{
    protected $newsletterRepository;

    public function __construct(NewsletterRepository $newsletterRepository)
    {
        $this->newsletterRepository = $newsletterRepository;
    }

    public function index()
    {
        $subscribers = $this->newsletterRepository->all();
        return view('newsletter::admin.newsletter.index', compact('subscribers'));
    }

    public function compose()
    {
        return view('newsletter::admin.newsletter.compose');
    }

    public function send(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $subscribers = $this->newsletterRepository->all();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->queue(
                new NewsletterMailable($request->subject, $request->content)
            );
        }

        return redirect()->route('admin.newsletter.index')->with('success', 'Newsletter sent successfully!');
    }

    public function export()
    {
        $subscribers = $this->newsletterRepository->all();
        $csv = "Email,Subscribed At\n";

        foreach ($subscribers as $subscriber) {
            $csv .= "{$subscriber->email},{$subscriber->created_at}\n";
        }

        return Response::make($csv, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="newsletter_subscribers.csv"',
        ]);
    }
}
