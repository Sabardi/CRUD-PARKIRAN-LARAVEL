@extends('layouts.main')

@section('content')
<div class="container">
    <h2 class="my-4">Form Register</h2>
    <hr>
    {{-- Pesan --}}
    @if (session ()->has ('pesan'))
    <div class="alert alert-info w-50">
      {{ session()->get('pesan') }}
    </div>
        
    @endif
    {{-- akhir pesan --}}

    <form action="{{ url('/register')}}" method="post">
        @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info w-50">Login</button>
    </form>
</div>
@endsection