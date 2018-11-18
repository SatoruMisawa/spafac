@extends('host.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        新規オプション
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('host') }}"><i class="fa fa-dashboard"></i> ホーム</a></li>
    </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
    @include('host.layouts.message', ['errors' => $errors])
    <div class="row">
        <div class="col-md-12">
            {{
            Form::open([
            'route' => ['host.space.option.create', $space->id],
            'method' => 'POST',
            ])
            }}
            <div class="box box-info">
                <div class="box-body pad">
                    <div class="{{ App\Helper::errorClass($errors, ['options[]']) }}">
                        <label><small class="label bg-blue">任意</small> オプション</label>
                        {{-- @if ($errors->any())
                        {{ dd($errors->all()) }}
                        @endif --}}
                        @for ($i = 0; $i < 2; $i++)
                            <div>
                                <div class="form-group">
                                    <label>名前</label>
                                    @include('layouts.error', ['name' => 'options.'.$i.'.name'])
                                    <div class="row">
                                        <div class="col-sm-9">
                                            {{
                                            Form::text(
                                            'options['.$i.'][name]',
                                            null,
                                            [
                                            'class' => 'form-control',
                                            ]
                                            )
                                            }}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>値段</label>
                                    @include('layouts.error', ['name' => 'options.'.$i.'.price'])
                                    <div class="row">
                                        <div class="col-sm-9">
                                            {{
                                            Form::text(
                                            'options['.$i.'][price]',
                                            null,
                                            [
                                            'class' => 'form-control',
                                            ]
                                            )
                                            }}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>回数制限</label>
                                    @include('layouts.error', ['name' => 'options.'.$i.'.limit'])
                                    <div class="row">
                                        <div class="col-sm-9">
                                            {{
                                            Form::text(
                                            'options['.$i.'][limit]',
                                            null,
                                            [
                                            'class' => 'form-control',
                                            ]
                                            )
                                            }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-default" disabled>保存して戻る</button>
                    <button type="submit" class="btn btn-success pull-right">保存して進む</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</section>
<!-- /.content -->
@endsection