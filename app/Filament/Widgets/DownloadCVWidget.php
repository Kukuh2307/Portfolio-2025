<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class DownloadCVWidget extends Widget
{
    protected static string $view = 'filament.widgets.download-cv';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = -1; // Display at top of dashboard
}
