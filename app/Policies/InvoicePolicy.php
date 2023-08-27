<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Invoice;

class InvoicePolicy
{
    /**
     * Create a new policy instance.
     */
    public function edit(User $user, Invoice $invoice)
    {
        return $invoice->user_id === $user->id;
    }

    public function delete(User $user, Invoice $invoice)
    {
        return $invoice->user_id === $user->id;
    }


    public function isAdmin(User $user)
    {
        return $user->perfil === 'superadmin';
    }
}

