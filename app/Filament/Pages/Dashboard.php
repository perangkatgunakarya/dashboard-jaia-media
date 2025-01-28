<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DashboardOverviewWidget;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\AccountWidget;

class Dashboard extends BaseDashboard
{
  protected static ?string $navigationIcon = 'fas-chart-line';

  public function getWidgets(): array
  {
    return [
      AccountWidget::class,
      DashboardOverviewWidget::class,
    ];
  }
}
