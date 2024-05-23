@extends('layouts.admin')

@section('content')
    <section class="py-5">
        <div class="container">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm mb-5">Back</a>
            <div class="card">
                <div class="card-body">

                    @if (Str::startsWith($project->image, 'https://'))
                        <img class="card-image w-100" loading="lazy" src="{{ $project->image }}" alt="{{ $project->title }}">
                    @else
                        <img class="card-image w-100" loading="lazy" src="{{ asset('storage/' . $project->image) }}"
                            alt="{{ $project->title }}">
                    @endif

                    <h5 class="card-title">{{ $project->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $project->subtitle }}</h6>
                    <p class="card-text">{{ $project->date }}</p>
                    <div class="badge text-bg-info text-white">
                        {{ $project->type ? $project->type->name : 'Uncategorized' }}
                    </div>
                    <p class="card-text">{{ $project->description }}</p>
                    <button class="btn btn-primary"><a href="{{ $project->url_code }}"></a>Code</button>
                    <button class="btn btn-secondary"><a href="{{ $project->url_web }}"></a>Web</button>
                </div>
            </div>
        </div>
    </section>
@endsection
