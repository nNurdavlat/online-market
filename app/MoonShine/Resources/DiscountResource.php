<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Discount;

use MoonShine\Laravel\Fields\Relationships\BelongsToMany;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Discount>
 */
class DiscountResource extends ModelResource {
    protected string $model = Discount::class;
    protected string $title = 'Discounts';

    protected function indexFields(): iterable {
        return [
            ID::make()->sortable(),
            Text::make('Name'),
            Number::make('Discount Price', 'discount_price')->step(0.01),
            Date::make('Start Date', 'start_date'),
            Date::make('End Date', 'end_date'),
            BelongsToMany::make('Products', 'products', fn($item) => $item->name),
        ];
    }

    protected function formFields(): iterable {
        return $this->indexFields();
    }

    protected function detailFields(): iterable {
        return $this->indexFields();
    }
}
