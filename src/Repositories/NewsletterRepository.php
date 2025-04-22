<?php

namespace Webkul\Newsletter\Repositories;

use Webkul\Core\Eloquent\Repository;

class NewsletterRepository extends Repository
{
    public function model()
    {
        return 'Webkul\Newsletter\Contracts\Newsletter';
    }
}
