<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use App\Models\Banner;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

/**
 * @extends ModelResource<Banner>
 */
class BannerResource extends ModelResource
{
    protected string $model = Banner::class;

    protected string $title = 'TopBanners';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Title'),
            Textarea::make('Description')
                ->customAttributes([
                    'rows'=>7,
                ]),
            Image::make('Image'),
            Select::make('Position')
            ->options([
                'top'=>'top',
                'middle'=>'middle',
                'one_bottom'=>'one_bottom',
                'bottom'=>'bottom'            ])->nullable(),
            BelongsTo::make('Category','category',
                    fn($item)=>$item->id . ". " . $item->name,
                    CategoryResource::class)->nullable()
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Title'),
                Textarea::make('Description')
                    ->customAttributes([
                        'rows'=>7,
                    ]),
                Image::make('Image'),
                Select::make('Position')
                ->options([
                    'top'=>'Top',
                    'middle'=>'Middle',
                    'one_bottom'=>'One bottom',
                    'bottom'=>'Bottom'
                ])->nullable(),
                BelongsTo::make('Category','category',
                        fn($item)=>$item->id . ". " . $item->name,
                        CategoryResource::class)->nullable()
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Title'),
            Textarea::make('Description')
                ->customAttributes([
                    'rows'=>7,
                ]),
            Image::make('Image'),
            Select::make('Position')
                ->options([
                    'top'=>'Top',
                    'middle'=>'Middle',
                    'one_bottom'=>'One bottom',
                    'bottom'=>'Bottom'
                ])->nullable(),
            BelongsTo::make('Category','category',
                    fn($item)=>$item->id . ". " . $item->name,
                    CategoryResource::class)->nullable()
        ];
    }

    /**
     * @param Banner $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
