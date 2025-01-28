<?php

namespace App\Filament\Widgets;

use App\Models\Client;
use App\Models\OwnedVenue;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget as BaseWidget;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget\Stat;

class DashboardOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {

        $totalClient = Client::count();
        $totalOwnedVenue = OwnedVenue::count();
        return [
            Stat::make('Total Client', $totalClient)
                ->icon('fas-users')
                ->description('The total of clients')
                ->descriptionIcon('heroicon-o-chevron-up', 'before')
                ->descriptionColor('primary')
                ->iconColor('warning'),
            Stat::make('Total Owned Venue', $totalOwnedVenue)
                ->icon('fas-building')
                ->description("The total of owned vanue")
                ->descriptionIcon('heroicon-o-chevron-down', 'before')
                ->descriptionColor('info')
                ->iconColor('info')
        ];
    }
}
