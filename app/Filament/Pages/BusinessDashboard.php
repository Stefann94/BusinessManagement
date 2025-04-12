<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Business;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class BusinessDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.business-dashboard';

    public $businesses;

    public function mount(): void
    {
        $this->businesses = Business::where('user_id', Auth::id())->get();
    }
}
