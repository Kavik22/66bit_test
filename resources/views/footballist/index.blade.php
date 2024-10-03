@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="card">
    <h2>Футболисты</h2>
    <table class="table table-res">
      <thead>
        <tr>
          <th>Имя</th>
          <th>Фамилия</th>
          <th>Пол</th>
          <th>Дата рождения</th>
          <th>Название команды</th>
          <th>Страна</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($footballists as $footballist)
      <tr>
        <td><?php  echo $footballist['name'];?></td>
        <td><?php  echo $footballist['surname'];?></td>
        <td><?php  echo $footballist->gender->title?></td>
        <td><?php  echo $footballist['date_of_birth']?></td>
        <td><?php  echo $footballist->team->title?></td>
        <td><?php  echo $footballist->country->title?></td>
        <td class="text-end"><a href="{{ route('footballist.edit', $footballist->id) }}" class="btn btn-primary">Редактировать</a></td>
      </tr>
    @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection