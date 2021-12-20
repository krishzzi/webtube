<?php

namespace App\Orchid\Layouts\System;

use App\Models\System\Themes;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class AppDetailLayout extends Rows
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'system';
    protected $title = 'App Details';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [];
    }

    /**
     * @return Field[]
     */
    protected function fields(): array
    {
        return [

            Group::make([
                Input::make('application')->value(config('app.name'))->title('Application Name')->disabled(),

                Input::make('system.version')->title('Version')->disabled(),
            ])->fullWidth(),


            Group::make([
                Input::make('system.slogan')->title('Slogan'),
                Input::make('system.contact_us')->title('Contact Us')->required(),

            ])->fullWidth(),

            Group::make([

                TextArea::make('system.keywords')->title('Keywords')->rows(7),
                TextArea::make('system.desc')->title('Description')->rows(7),
                TextArea::make('system.header')->title('Header')->rows(7),
            ])->fullWidth(),


            Group::make([
                Select::make('system.per_page')
                    ->options([
                        5   => 'Max 5',
                        10   => 'Max 10',
                        15   => 'Max 15',
                        20   => 'Max 20',
                        30   => 'Max 30',
                        45   => 'Max 45',
                        50   => 'Max 50',
                        55   => 'Max 55',
                        75   => 'Max 75',
                        100   => 'Max 100',
                    ])
                    ->title('Display Per Page Limit')
                    ->help('Set Maximum Posts,Movies,Shows Per Page Limit'),

                Select::make('system.player_size')
                    ->options([
                        '1by1'=>'1x1',
                        '4by3'=>'4x3',
                        '16by9'=>'16x9',
                        '21by9'=>'21x9',

                    ])
                    ->title('Video Player Size'),

                Select::make('system.themes_id')
                    ->fromModel(Themes::class, 'name')->title('Current Theme'),
            ])->fullWidth(),




        ];
    }
}
