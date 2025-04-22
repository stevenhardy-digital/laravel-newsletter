<?php

namespace Webkul\Newsletter\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Newsletter\Contracts\Newsletter as NewsletterContract;

class Newsletter extends Model implements NewsletterContract
{
    protected $fillable = ['email', 'name'];
}
