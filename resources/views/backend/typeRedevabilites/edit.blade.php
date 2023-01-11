@extends('layouts.admin')
@section('content')

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Formulaire de Modification </h3>
    </div>
    <div class="panel-body">
      <!--Horizontal Form-->
      <!--===================================================-->
      <form class="form-horizontal"  method="POST" action=" {{route('typeRedevabilites.update', ['id' => $Redevabilites->id])}}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
          <div class="panel-body">
              <div class="form-group {{ $errors->has('Types') ? 'has-error' : '' }}" >
                  <label class="col-sm-3 control-label" for="demo-hor-inputemail">Quartier</label>
                  <div class="col-sm-9">
                      <input type="text" placeholder="Types" id="Types" name="Types" value="{{$Redevabilites->Types}}" class="form-control">
                      {{ $errors->has('Quartier') ? 'has-error' : '' }}
                  </div>
              </div>
          </div>
          <div class="panel-footer text-right">
            <button type="reset" class="btn btn-danger wizard-prev-btn btn-rounded mr-auto">Annuler</button>
            <button type="submit"class="btn btn-primary wizard-next-btn btn-rounded ml-auto">Modifier</button>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('typeRedevabilites.index') }}">Back</a>
            </div>
          </div>
      </form>
      <!--===================================================-->
      <!--End Horizontal Form-->

    </div>
</div>



@endsection
