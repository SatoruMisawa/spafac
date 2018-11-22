@extends('stay.host.layouts.master')

@section('content')
<div class="content-wrapper" style="min-height: 622px;">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{
                Form::open([
                'route' => ['host.space.plan.stay.create', $space->id],
                'method' => 'POST'
                ])
                }}
                @csrf
                <div class="box box-info">
                    <div class="box-header">
                        <h1 class="box-title">新規プラン作成</h1>
                        <div class="pull-right box-tools"></div>
                    </div>
                    <div class="box-body pad">
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">プランの名前</div>
                            </div>
                            <p class="help-block">プランの名前を記述してください。</p>
                            @include('layouts.error', ['name' => 'name'])
                            <div class="row">
                                <div class="col-sm-9">
                                    {{
                                    Form::text(
                                    'name',
                                    null,
                                    [
                                    'class' => 'form-control',
                                    'placeholder' => 'プランの名称'
                                    ]
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                                <div class="SDR4G06kguti">
                                    <div class="FBtyNIKsrTb">必須</div>
                                    <div class="BMWerCSq5F">プランの説明</div>
                                </div>
                                <p class="help-block">プランの名前を記述してください。</p>
                                @include('layouts.error', ['name' => 'description'])
                                <div class="row">
                                    <div class="col-sm-9">
                                        {{
                                        Form::text(
                                        'description',
                                        null,
                                        [
                                        'class' => 'form-control',
                                        'placeholder' => 'プランの名称'
                                        ]
                                        )
                                        }}
                                    </div>
                                </div>
                            </div>
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">価格</div>
                            </div>
                            <p class="help-block">宿泊人数が多い場合に追加料金を設定することができます。</p>
                            @include('layouts.error', ['name' => 'price_per_day'])
                            @include('layouts.error', ['name' => 'max_expected_numbers_of_people'])
                            @include('layouts.error', ['name' => 'excess_charge_per_person'])
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="help-block">1泊あたりの価格　　　　　　　　設定した価格で泊まれる人数</p>
                                    <span class="FormItem__Unit-oe304i-5 hguKws">¥</span>
                                    <div class="col-sm-3 col-sm-offset-4">
                                        <div class="input-group">
                                            {{
                                            Form::text(
                                            'price_per_day',
                                            null,
                                            ['class' => 'form-control']
                                            )
                                            }}
                                        </div>
                                    </div>
                                    <span class="FormItem__Unit-oe304i-5 hguKws">/泊</span>
                                    <div class="col-sm-3 col-sm-offset-4">
                                        <div class="input-group">
                                            {{
                                            Form::text(
                                            'max_expected_numbers_of_people',
                                            null,
                                            ['class' => 'form-control']
                                            )
                                            }}
                                        </div>
                                    </div>
                                    <span class="FormItem__Unit-oe304i-5 hguKws">人</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="help-block">1人超過毎の追加料金</p>
                                    <span class="FormItem__Unit-oe304i-5 hguKws">¥</span>
                                    {{
                                    Form::text(
                                    'excess_charge_per_person',
                                    null,
                                    ['class' => 'form-control']
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">宿泊可能日数</div>
                            </div>
                            <p class="help-block">連続で宿泊可能な日数を入力してください。</p>
                            @include('layouts.error', ['name' => 'min_numbers_of_nights'])
                            @include('layouts.error', ['name' => 'max_numbers_of_nights'])
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="help-block">最小宿泊日数　　　　　　　　最大宿泊日数</p>
                                    {{
                                    Form::text(
                                    'min_numbers_of_nights',
                                    null,
                                    ['class' => 'form-control']
                                    )
                                    }}
                                    <span class="FormItem__Unit-oe304i-5 hguKws">日</span>
                                    {{
                                    Form::text(
                                    'max_numbers_of_nights',
                                    null,
                                    ['class' => 'form-control']
                                    )
                                    }}
                                    <span class="FormItem__Unit-oe304i-5 hguKws">日</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">チェックイン・アウトの時間</div>
                            </div>
                            @include('layouts.error', ['name' => 'checkin_to'])
                            @include('layouts.error', ['name' => 'checkin_from'])
                            @include('layouts.error', ['name' => 'checkout'])
                            <div class="row">
                                <div class="col-sm-9">
                                    <span class="FormItem__Unit-oe304i-5 hguKws">チェックイン</span>
                                    {{
                                    Form::select(
                                    'checkin_from',
                                    array_keys(array_fill(0, 23, 0)),
                                    null,
                                    ['class' => 'form-control']
                                    )
                                    }}
                                    <span class="FormItem__Unit-oe304i-5 hguKws">〜</span>
                                    {{
                                    Form::select(
                                    'checkin_to',
                                    array_keys(array_fill(0, 23, 0)),
                                    null,
                                    ['class' => 'form-control']
                                    )
                                    }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">
                                    <span class="FormItem__Unit-oe304i-5 hguKws">チェックアウト</span>
                                    {{
                                    Form::select(
                                    'checkout',
                                    array_keys(array_fill(0, 23, 0)),
                                    null,
                                    ['class' => 'form-control']
                                    )
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="SDR4G06kguti">
                                <div class="FBtyNIKsrTb">必須</div>
                                <div class="BMWerCSq5F">貸出可能な曜日</div>
                            </div>
                            @include('layouts.error', ['name' => 'day_ids'])
                            <p class="help-block">貸出可能な曜日を設定してください。チェックインの曜日になります。</p>
                            <div class="sp_Asibut7nduS">
                                <div class="B8durTgfsd">
                                    @foreach ($days as $day)
                                    <div class="sp_Fgjunibu5">
                                        <div class="row checkbox">
                                            <label class="col-sm-2 form-control-static">{{ $day->name }}</label>
                                            {{ Form::checkbox('day_ids[]', $day->id, false) }} 有効
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="SDR4G06kguti">
                                    <div class="FBtyNIKsrTb">必須</div>
                                    <div class="BMWerCSq5F">予約の承認方法</div>
                                </div>
                                @include('layouts.error', ['name' => 'need_to_be_approved'])
                                <div class="row radio">
                                    <div class="col-sm-6">
                                        <label>
                                            {{ Form::radio('need_to_be_approved', 0) }} 承認なし/今すぐ予約
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>
                                            {{ Form::radio('need_to_be_approved', 1) }} 承認あり
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="SDR4G06kguti">
                            <div class="FBtyNIKsrTb">必須</div>
                            <div class="BMWerCSq5F">予約の締切</div>
                        </div>
                        <p class="help-block">利用日の何日前に予約を締め切るかを設定してください。</p>
                        <p class="help-block">例）「利用日の7日前」に設定→ゲストが4月8日に利用したい場合、4月1日以前に予約をする必要があります。</p>
                        @include('layouts.error', ['name' => 'preorder_deadline_id'])
                        <div class="row">
                            <div class="col-sm-6">
                                {{
                                Form::select(
                                'preorder_deadline_id',
                                ['' => '選択してください'] + $preorderDeadlines,
                                null,
                                ['class' => 'form-control']
                                )
                                }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="SDR4G06kguti">
                            <div class="FBtyNIKsrTb">必須</div>
                            <div class="BMWerCSq5F">予約の受付期間</div>
                        </div>
                        <p class="help-block">ゲストが予約リクエストする日を起点として、利用日が何ヶ月先までの予約を受け付けるか設定してください。</p>
                        <p class="help-block">例）「12ヶ月先まで予約を受け付ける」を設定→2018年4月1日の場合、2019年4月1日まで予約を受け付けます。</p>
                        @include('layouts.error', ['name' => 'preorder_period_id'])
                        <div class="row">
                            <div class="col-sm-6">
                                {{
                                Form::select(
                                'preorder_period_id',
                                ['' => '選択してください'] + $preorderPeriods,
                                null,
                                ['class' => 'form-control']
                                )
                                }}
                            </div>
                        </div>
                    </div>
                    <!--box-body pad　END-->
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
    </section>
</div>
@endsection