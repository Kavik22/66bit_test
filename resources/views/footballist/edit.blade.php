@extends('layouts.app')

@section('content')

<div class="toForm">
    <div class="card">
      <h2>Редактирование данных о футболисте</h2>
      <form action="{{ route('footballist.update', $footballist->id) }}" method="post" style="min-width: 500px">
        @csrf
        @method('patch')
        <div class="mb-3">
          <label for="name" class="form-label">Имя</label>
          <input type="text" class="form-control" name="name" placeholder="Введите имя" value="{{ $footballist->name }}">
          @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
        </div>
        <div class="mb-3">
          <label for="surname" class="form-label">Фамилия</label>
          <input type="text" class="form-control" name="surname" placeholder="Введите фамилию" value="{{ $footballist->surname }}">
          @if ($errors->has('surname'))
            <span class="text-danger">{{ $errors->first('surname') }}</span>
          @endif
        </div>
        <div class="mb-3">
          <label for="gender_id" class="form-label">Пол</label>
          <select class="form-select" name="gender_id">
            @foreach ($genders as $gender)
              <option value="{{$gender->id}}" {{ $footballist->gender->id == $gender->id ? 'selected' : '' }}>{{$gender->title}}</option>
            @endforeach
          </select>
          @if ($errors->has('gender_id'))
            <span class="text-danger">{{ $errors->first('gender_id') }}</span>
          @endif
        </div>
        <div class="mb-3">
          <label for="date_of_birth">Дата рождения</label>
          <input class="form-control" name="date_of_birth" type="date" value="{{ $footballist->date_of_birth }}"/>
          @if ($errors->has('date_of_birth'))
            <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
          @endif
        </div>
        <div class="mb-3">
          <label for="team" class="form-label">Команда</label>
          <br/>
          <input type="text" class="form-control" name="team" id="team" list="teamList" value="{{ $footballist->team->title }}">
          <datalist id="teamList">
              @foreach($teams as $team)
                  <option value="{{ $team->title }}">
              @endforeach
          </datalist>
          @if ($errors->has('team'))
            <span class="text-danger">{{ $errors->first('team') }}</span>
          @endif
        </div>
        <div class="mb-3">
          <label for="country_id" class="form-label">Страна</label>
          <select class="form-select" name="country_id">
            @foreach ($countries as $country)
              <option value="{{$country->id}}" {{ $footballist->country->id == $country->id ? 'selected' : '' }}>{{$country->title}}</option>
            @endforeach
          </select>
          @if ($errors->has('country_id'))
            <span class="text-danger">{{ $errors->first('country_id') }}</span>
          @endif
        </div>
        <div class="d-flex justify-content-between">
          <a class="btn btn-danger" href="{{ route('footballist.index') }}">Отмена</a>
          <button type="submit" class="btn btn-primary" id="submitButton">Сохранить изменения</button>
        </div>
      </form>
    </div>
</div>
@endsection