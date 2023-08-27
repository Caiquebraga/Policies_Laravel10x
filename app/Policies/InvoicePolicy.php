<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Invoice;

class InvoicePolicy
{

    public function isAdmin(User $user, Invoice $invoice)
    {
        return $user->perfil === 'superadmin';
    }
}

