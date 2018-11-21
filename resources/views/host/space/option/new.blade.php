@extends('host.layouts.master')

@section('content')
@include('host.layouts.sidebar')
<div class="content-wrapper" style="min-height: 622px;">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div>
                    {{
                    Form::open([
                    'route' => ['host.space.plan.option.create', $space->id, $plan->id],
                    'method' => 'POST',
                    ])
                    }}
                    <div class="box box-info">
                        <div class="box-header">
                            <h1 class="box-title">新規オプション</h1>
                            <div class="pull-right box-tools"></div>
                        </div>
                        <div class="box-body pad">
                            <div class="form-group ">
                                <div class="SDR4G06kguti">
                                    <div class="FBtyNIKsrTb">必須</div>
                                    <div class="BMWerCSq5F">オプションの名称</div>
                                </div>
                                <p class="help-block">例）パーティーグッズ一式</p>
                                @include('layouts.error', ['name' => 'options.0.name'])
                                <div class="row">
                                    <div class="col-sm-9">
                                        {{
                                        Form::text(
                                        'options[0][name]',
                                        null,
                                        [
                                        'class' => 'form-control',
                                        ]
                                        )
                                        }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                    <div class="SDR4G06kguti">
                                        <div class="FBtyNIKsrTb">必須</div>
                                        <div class="BMWerCSq5F">オプションの説明</div>
                                    </div>
                                    <p class="help-block">例）パーティーグッズ一式</p>
                                    @include('layouts.error', ['name' => 'options.0.description'])
                                    <div class="row">
                                        <div class="col-sm-9">
                                            {{
                                            Form::text(
                                            'options[0][description]',
                                            null,
                                            [
                                            'class' => 'form-control',
                                            ]
                                            )
                                            }}
                                        </div>
                                    </div>
                                </div>
                            <!--content start-->
                            <div class="form-group ">
                                <div class="SDR4G06kguti">
                                    <div class="FBtyNIKsrTb">必須</div>
                                    <div class="BMWerCSq5F">価格と単位</div>
                                </div>
                                @include('layouts.error', ['name' => 'options.0.price'])
                                <div class="row">
                                    <div class="col-sm-9">
                                        {{
                                        Form::text(
                                        'options[0][price]',
                                        null,
                                        [
                                        'class' => 'form-control',
                                        ]
                                        )
                                        }}
                                    </div>
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
                </div>
                {{ Form::close() }}
                </form>
            </div>
        </div>
    </section>
</div>
@endsection