<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Illuminate\Support\Str;

/**
 * @extends ModelResource<Post>
 */
class PostResource extends ModelResource
{
    protected string $model = Post::class;

    protected string $title = 'Posts';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Title')->sortable(),
            Textarea::make('Content')
            ->customAttributes([
                'rows'=>1,
            ]),
            Image::make('Image'),
            Date::make('Published At','updated_at')->sortable()
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
                Text::make('Title', 'title'),
                TinyMce::make('Content', 'content'),
                Image::make('Image', 'image'),
                BelongsTo::make(
                    'Category',
                    'postCategory',
                    fn($item)=>"$item->id. $item->name",
                    PostCategoryResource::class)
                    ->afterFill(
                        fn($field) => $field->setColumn('category_id')
                    )->nullable(),
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
            Textarea::make('Content')
            ->customAttributes([
                'rows'=>1,
            ]),
            Image::make('Image'),
            BelongsTo::make('Category',
                'postCategory',
                fn($item)=>"$item->id. $item->name",
                PostCategoryResource::class)
                ->afterFill(
                    fn($field) => $field->setColumn('category_id')
                )->nullable(),
        ];
    }

    /**
     * @param Post $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'max:255'],
            'content' => ['required' ],
            'image' => ['required', 'max:255'],
            'category_id' => ['required', 'max:255'],
        ];
    }
}
