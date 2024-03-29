@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Users') }}</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('Id') }}</th>
                        <th class="border-gray-200">{{ __('Role') }}</th>
                        <th class="border-gray-200">{{ __('Name') }}</th>
                        <th class="border-gray-200">{{ __('Email') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                        <tr>
                            <td><span class="fw-normal">{{ $user->id }}</span></td>
                            <td><span class="fw-normal">{{ $user->role }}</span></td>
                            <td><span class="fw-normal">{{ $user->name }}</span></td>
                            <td><span class="fw-normal">{{ $user->email }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
