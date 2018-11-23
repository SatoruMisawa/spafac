@extends('stay.host.layouts.master')

@section('content')
<div class="content-wrapper" style="min-height: 622px;">
    <section class="content container-fluid">
        <div class="row">
            {{
            Form::open([
            'route' => ['host.facility.space.stay.create', $facility->id],
            'method' => 'POST',
            'files' => true,
            ])
            }}
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h1 class="box-title">基本情報</h1>
                        <div class="pull-right box-tools"></div>
                    </div>
                    <div class="box-body pad">
                        <div class="form-group">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">名前</div>
                            </div>
                            @include('layouts.error', ['name' => 'name'])
                            <div class="row">
                                <div class="col-sm-9">
                                    {{
                                    Form::text(
                                    'name',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'placeholder' => 'スペースの名前は...'
                                    ]
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">スペースについて</div>
                            </div>
                            @include('layouts.error', ['name' => 'about'])
                            <div class="row">
                                <div class="col-sm-9">
                                    {{
                                    Form::textarea(
                                    'about',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'rows' => '4',
                                    'placeholder' => 'このスペースは...'
                                    ]
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">用途</div>
                            </div>
                            <p class="help-block">スペースをどのような目的に使用してもよいか選択してください。複数選択可能です。</p>
                            @include('layouts.error', ['name' => 'space_usage_ids'])
                            <div class="row checkbox">
                                @foreach ($spaceUsages as $spaceUsage)
                                <div class="col-md-4 col-sm-6">
                                    <label>
                                        {{
                                        Form::checkbox(
                                        'space_usage_ids[]',
                                        $spaceUsage->id,
                                        false
                                        )
                                        }}
                                        {{ $spaceUsage->name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">最大収容人数</div>
                            </div>
                            @include('layouts.error', ['name' => 'capacity'])
                            <div class="row">
                                <div class="col-sm-9">
                                    {{
                                    Form::text(
                                    'capacity',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'placeholder' => '100'
                                    ]
                                    )
                                    }}
                                    <span class="input-group-addon">人</span>
                                </div>
                            </div>
                        </div>
                        <!--content start-->
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">床面積</div>
                            </div>
                            @include('layouts.error', ['name' => 'floor_area'])
                            <div class="row">
                                <div class="col-sm-9">
                                    {{
                                    Form::text(
                                    'floor_area',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'placeholder' => '100'
                                    ]
                                    )
                                    }}
                                    <span class="input-group-addon">㎡</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">部屋のタイプ</div>
                            </div>
                            @include('layouts.error', ['name' => 'rent_space_type_id'])
                            <div class="row radio">
                                @foreach ($rentSpaceTypes as $rentSpaceType)
                                <div class="col-md-4 col-sm-6">
                                    <label>
                                        {{
                                        Form::radio(
                                        'rent_space_type_id',
                                        $rentSpaceType->id
                                        )
                                        }}
                                        {{ $rentSpaceType->name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">部屋とベッド</div>
                            </div>
                            @include('layouts.error', ['name' => 'numbers_of_beds'])
                            @include('layouts.error', ['name' => 'numbers_of_futons'])
                            @include('layouts.error', ['name' => 'numbers_of_baths'])
                            @include('layouts.error', ['name' => 'numbers_of_toilets'])
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="help-block2">ベッドルーム　　　　　　　　ベッド（布団）</p>
                                    {{
                                    Form::text(
                                    'numbers_of_beds',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'placeholder' => '100'
                                    ]
                                    )
                                    }}
                                    <span class="FormItem__Unit-oe304i-5 hguKws">部屋</span>
                                    {{
                                    Form::text(
                                    'numbers_of_futons',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'placeholder' => '100'
                                    ]
                                    )
                                    }}
                                    <span class="FormItem__Unit-oe304i-5 hguKws">台（枚）</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="help-block2">バスルーム　　　　　　　　トイレ</p>
                                    {{
                                    Form::text(
                                    'numbers_of_baths',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'placeholder' => '100'
                                    ]
                                    )
                                    }}
                                    <span class="FormItem__Unit-oe304i-5 hguKws">部屋</span>
                                    {{
                                    Form::text(
                                    'numbers_of_toilets',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'placeholder' => '100'
                                    ]
                                    )
                                    }}
                                    <span class="FormItem__Unit-oe304i-5 hguKws">箇所</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">鍵の受け渡し</div>
                            </div>
                            @include('layouts.error', ['name' => 'key_delivery_id'])
                            <div class="row radio">
                                @foreach ($keyDeliveries as $keyDelivery)
                                <div class="col-md-4 col-sm-6">
                                    <label>
                                        {{
                                        Form::radio(
                                        'key_delivery_id',
                                        $keyDelivery->id
                                        )
                                        }}
                                        {{ $keyDelivery->name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">アメニティ</div>
                            </div>
                            <p class="help-block">スペースをどのような目的に使用してもよいか選択してください。複数選択可能です。</p>
                            @include('layouts.error', ['name' => 'amenity_ids'])
                            <div class="row checkbox">
                                @foreach ($amenities as $amenity)
                                <div class="col-md-4 col-sm-6">
                                    <label>
                                        {{
                                        Form::checkbox(
                                        'amenity_ids[]',
                                        $amenity->id,
                                        false
                                        )
                                        }}
                                        {{ $amenity->name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">アメニティについて</div>
                            </div>
                            @include('layouts.error', ['name' => 'about_amenity'])
                            <div class="row">
                                <div class="col-sm-9">
                                    {{
                                    Form::textarea(
                                    'about_amenity',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'rows' => '4',
                                    'placeholder' => 'アメニティーは...'
                                    ]
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">飲食について</div>
                            </div>
                            @include('layouts.error', ['name' => 'about_food_drink'])
                            <div class="row">
                                <div class="col-sm-9">
                                    {{
                                    Form::textarea(
                                    'about_food_drink',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'rows' => '4',
                                    'placeholder' => '飲食は...'
                                    ]
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">後片付けについて</div>
                            </div>
                            @include('layouts.error', ['name' => 'about_cleanup'])
                            <div class="row">
                                <div class="col-sm-9">
                                    {{
                                    Form::textarea(
                                    'about_cleanup',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'rows' => '4',
                                    'placeholder' => '後片付けは...'
                                    ]
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">キャンセルポリシー</div>
                            </div>
                            @include('layouts.error', ['name' => 'cancellation_policy'])
                            <div class="row">
                                <div class="col-sm-9">
                                    {{
                                    Form::textarea(
                                    'cancellation_policy',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'rows' => '4',
                                    'placeholder' => 'キャンセルポリシーは...'
                                    ]
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">利用規約</div>
                            </div>
                            @include('layouts.error', ['name' => 'terms_of_use'])
                            <div class="row">
                                <div class="col-sm-9">
                                    {{
                                    Form::textarea(
                                    'terms_of_use',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'rows' => '4',
                                    'placeholder' => '利用規約は...'
                                    ]
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">営業の選択</div>
                            </div>
                            <p class="help-block">営業の種類を選択をしてください。</p>
                            @include('layouts.error', ['name' => 'rent_space_business_type_id'])
                            <div class="row">
                                <div class="col-sm-6">
                                    {{
                                    Form::select(
                                    'rent_space_business_type_id',
                                    ['' => '選択してください'] + $rentSpaceBusinessTypes,
                                    null,
                                    ['class' => 'form-control p-region-id']
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">旅館業許可書/特定認定書</div>
                            </div>
                            <p class="help-block">記載事項が分かる写真、またはPDFファイルをアップロードしてください。</p>
                            @include('layouts.error', ['name' => 'business_license_image'])
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="btn btn-success">
                                        {{
                                        Form::file('business_license_image', [
                                        'style' => 'display: none;',
                                        ])
                                        }}
                                        <i class="fa fa-plus"></i> 写真を選択
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">
                                <font style="vertical-align: inherit;">
                                    <font class="preservation-button" style="vertical-align: inherit;">保存</font>
                                </font>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            {{ Form::close() }}
    </section>
</div>
@endsection