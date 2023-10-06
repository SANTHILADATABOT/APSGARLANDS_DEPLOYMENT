{{ Form::text('name', trans('product::attributes.name'), $errors, $product, ['labelCol' => 2, 'required' => true]) }}
{{ Form::wysiwyg('description', trans('product::attributes.description'), $errors, $product, ['labelCol' => 2, 'required' => true]) }}

<div class="row">
    {{-- Navin {{$product}} --}}
{{-- @php  dd($product); --}}
{{-- @endphp --}}
    {{-- exit(); --}}

    <div class="col-md-8">
        {{ Form::select('brand_id', trans('product::attributes.brand_id'), $errors, $brands, $product) }}
        {{ Form::select('categories', trans('product::attributes.categories'), $errors, $categories, $product, ['class' => 'selectize prevent-creation', 'multiple' => true]) }}
        {{ Form::select('tags', trans('product::attributes.tags'), $errors, $tags, $product, ['class' => 'selectize prevent-creation', 'multiple' => true]) }}
        {{-- {{ Form::checkbox('is_same_day', trans('product::attributes.is_same_day'), trans('product::products.form.enable_the_delivery'), $errors, $product) }} --}}
        {{-- {{ Form::checkbox('is_virtual', trans('product::attributes.is_virtual'), trans('product::products.form.the_product_won\'t_be_shipped'), $errors, $product) }} --}}
        {{ Form::checkbox('is_active', trans('product::attributes.is_active'), trans('product::products.form.enable_the_product'), $errors, $product, ['checked' => true]) }}
    </div>
</div>