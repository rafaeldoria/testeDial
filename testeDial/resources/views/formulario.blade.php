@extends('layout')

@section('producao')



<div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
        <div class="form-top col-xs-12">
            <div class="form-top-left">
                <h3>Cadastre-se grátis</h3>
                <p>Cadastre-se para concorrer a prêmios exclusivos:</p>
            </div>
            <div class="form-top-right">
                <i class="fa fa-at"></i>
            </div>
        </div>

        <!-- validator -->
        @if (count($errors) > 0)
        <div class="form-top col-xs-12">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        <div class="form-bottom">            
            {{ Form::open(array('action' => 'PessoaController@adiciona', 'class'=> 'login-form', 'role' => 'form')) }}            
            <div class="row">
                <div class="form-group col-md-12">
                    {{ Form::label('nome', 'Nome', array('class'=>'control-label')) }}
                    {{ Form::text('nome', null, array('placeholder'=>'Seu nome...', 'class'=>'form-control')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    {{ Form::label('email', 'E-mail', array('class'=>'control-label')) }}
                    {{ Form::email('email', null, array('placeholder'=>'Seu e-mail...', 'class'=>'form-control')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    {{ Form::label('telefoneCelular', 'Telefone Celular', array('class'=>'control-label')) }}
                    {{ Form::text('telefoneCelular', null, array('placeholder'=>'Seu telefone celular...', 'class'=>'form-control' )) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    {{ Form::label('dataNascimento', 'Data de Nascimento', array('class'=>'control-label')) }}
                    {{ Form::date('dataNascimento', null, array('class'=>'form-control')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    {{ Form::label('cep', 'Cep', array('class'=>'control-label')) }}
                    {{ Form::text('cep', null, array('placeholder'=>'Seu cep...', 'class'=>'form-control')) }}            
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    {{ Form::label('endereco', 'Endereço', array('class'=>'control-label')) }}
                    {{ Form::text('endereco', null, array('placeholder'=>'Seu endereço...', 'class'=>'form-control')) }}            
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    {{ Form::label('numero', 'Número', array('class'=>'control-label')) }}
                    {{ Form::text('numero', null, array('placeholder'=>'Nº...', 'class'=>'form-control')) }}            
                </div> 
                <div class="form-group col-md-9">
                    {{ Form::label('bairro', 'Bairro', array('class'=>'control-label')) }}
                    {{ Form::text('bairro', null, array('placeholder'=>'Seu bairro...', 'class'=>'form-control')) }}            
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    {{ Form::label('cidade', 'Cidade', array('class'=>'control-label')) }}
                    {{ Form::text('cidade', null, array('placeholder'=>'Sua cidade...', 'class'=>'form-control')) }}            
                </div>            
                <div class="form-group col-md-4">
                    {{ Form::label('estado', 'Estado', array('class'=>'control-label')) }}
                    {{ Form::text('estado', null, array('placeholder'=>'Estado...', 'class'=>'form-control')) }}            
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    {{ Form::submit('Salvar Dados', array('class' => 'btn btn-success btn-lg')) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
</div>
@stop