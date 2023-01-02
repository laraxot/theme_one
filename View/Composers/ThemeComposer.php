<?php

declare(strict_types=1);

namespace Themes\One\View\Composers;

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class ThemeComposer {


    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view) {
        $view->with('_theme', $this);
    }


}